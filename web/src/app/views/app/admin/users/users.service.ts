import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { retry, catchError } from 'rxjs/operators';
import { throwError, Observable, BehaviorSubject } from 'rxjs';
import { ToasterService } from 'angular2-toaster';
import { Router, ActivatedRoute } from '@angular/router';
import { AuthService } from '../../../../auth/auth.service';
import { ActivityBoxService } from '../../../../shared/components/activity-box/activity-box-service.service';
import { HandleError } from '../../../../shared/classes/handle-error.class';

interface User {
  name: string,
  email: string,
  password: string,
  password_confirmation: string,
  role: string,
  is_active: number,
};

@Injectable()
export class UsersService {

  private get url() {
    return this.getUserRole() + '/users';
  }

  constructor(
    private authService: AuthService,
    private httpClient: HttpClient,
    private toasterService: ToasterService,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private activityBoxService: ActivityBoxService,
  ) { }

  get(id): Observable<any> {
    return this.httpClient.get<any>('/api/' + this.url + '/' + id)
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      );
  }

  create(item: User): void {

    this.httpClient.post<any>('/api/' + this.url + '/store', item)
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      ).subscribe(
        (data) => {
          this.toasterService.pop('success',  data.message, 'The action will be tracked!');
          this.feedActivityBox();
          this.router.navigate(['./' + this.url], { relativeTo: this.activeRoute });
        },
        error => {

        });
  }

  update(id, item: User): void {

    this.httpClient.put<any>('/api/' + this.url + '/' + id + '/update', item)
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      ).subscribe(
        (data) => {
          this.toasterService.pop('info',  data.message, 'The action will be tracked!');
          this.feedActivityBox();
          this.router.navigate(['./' + this.url], { relativeTo: this.activeRoute });
        },
        error => {

        });
  }

  feedActivityBox(subjectId?): void {

    let activityBoxUrl = '/' + this.getUserRole() + '/users';
    this.activityBoxService.url.next(null);
    this.activityBoxService.data.next(null);

    if (subjectId) {
      this.httpClient.get<any>('/api/' + this.url + '/activities', { params: { subject_id: subjectId } })
        .pipe(
          retry(3), // retry a failed request up to 3 times
          catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
        ).subscribe(
          data => {
            this.activityBoxService.url.next(activityBoxUrl);
            this.activityBoxService.data.next(data);
          },
          error => {

          }
        );
    } else {
      this.httpClient.get<any>('/api/' + this.url + '/activities')
        .pipe(
          retry(3), // retry a failed request up to 3 times
          catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
        ).subscribe(
          data => {
            this.activityBoxService.url.next(activityBoxUrl);
            this.activityBoxService.data.next(data);
          },
          error => {

          }
        );
    }
  }

  feedEntitiesDropDown(): Promise<any> {
    return new Promise(
      (resolve, reject) => {
        this.httpClient.get<any>('/api/' + this.url + '/entities')
          .pipe(
            retry(3), // retry a failed request up to 3 times
            catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
          ).subscribe(
            data => {
              resolve(data);
            },
            error => {
              reject(error);
            }
          );
      }
    );
  }

  feedRolesDropDown(entityId): Promise<any> {
    return new Promise(
      (resolve, reject) => {
        this.httpClient.get<any>('/api/' + this.url + '/entities/' + entityId + '/roles')
          .pipe(
            retry(3), // retry a failed request up to 3 times
            catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
          ).subscribe(
            data => {
              resolve(data);
            },
            error => {
              reject(error);
            }
          );
      }
    );
  }

  feedTimezonesDropDown(): Promise<any> {
    return new Promise(
      (resolve, reject) => {
        this.httpClient.get<any>('/api/' + this.url + '/timezones')
          .pipe(
            retry(3), // retry a failed request up to 3 times
            catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
          ).subscribe(
            data => {
              resolve(data);
            },
            error => {
              reject(error);
            }
          );
      }
    );
  }

  getUserRole() {
    return this.authService.getUser().role;
  }

}
