import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { retry, catchError } from 'rxjs/operators';
import { throwError, Observable, BehaviorSubject } from 'rxjs';
import { ToasterService } from 'angular2-toaster';
import { Router, ActivatedRoute } from '@angular/router';
import { AuthService } from '../../../../auth/auth.service';
import { ActivityBoxService } from '../../../../shared/components/activity-box/activity-box-service.service';
import { HandleError } from '../../../../shared/classes/handle-error.class';

interface ATAChapter {
  code: string,
  name: string,
  description: string,
};

@Injectable()
export class OwnersService {

  private name = 'owners';

  private get url() {
    return this.getUserRole() + '/' + this.name;
  }

  private serverUrl: string = this.router.url.substring(0, this.router.url.indexOf(this.name)) + this.name;

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

  create(item: ATAChapter): void {

    this.httpClient.post<any>('/api/' + this.url + '/store', item)
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      ).subscribe(
        (data) => {
          this.defaultCreateUpdateResponse(data, 'success');
        },
        error => {

        });
  }

  update(id, item: ATAChapter): void {

    this.httpClient.put<any>('/api/' + this.url + '/' + id + '/update', item)
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      ).subscribe(
        (data) => {
          this.defaultCreateUpdateResponse(data, 'info');
        },
        error => {

        });
  }

  defaultCreateUpdateResponse(data, messageType) {
    this.toasterService.pop(messageType,  data.message, 'The action will be tracked!');
    this.feedActivityBox();
    this.router.navigate(['../' + this.name], { relativeTo: this.activeRoute });
  }


  feedOwnersDropDown(): Promise<Array<[]>> {
    let url = '/api/' + this.url;
    return this.feedFunc('get', url);
  }

  feedFunc(method, url, body?, options?): Promise<Array<[]>> {
    return new Promise(
      (resolve, reject) => {
        if (method === 'post') {
          this.httpClient.post<any>(url, body, options)
            .pipe(
              retry(3), // retry a failed request up to 3 times
              catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
            ).subscribe(
              (data: any) => {
                resolve(data);
              },
              error => {
                reject(error);
              }
            );
        } else {
          this.httpClient.get<any>(url, options)
            .pipe(
              retry(3), // retry a failed request up to 3 times
              catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
            ).subscribe(
              (data: any) => {
                resolve(data);
              },
              error => {
                reject(error);
              }
            );
        }
      }
    );
  }

  feedActivityBox(subjectId?): void {

    let activityBoxUrl = '/' + this.serverUrl;
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

  getUserRole() {
    return this.authService.getUser().role;
  }

}
