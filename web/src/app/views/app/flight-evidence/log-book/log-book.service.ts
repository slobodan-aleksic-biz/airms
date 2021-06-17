import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { retry, catchError } from 'rxjs/operators';
import { throwError, Observable, BehaviorSubject } from 'rxjs';
import { ToasterService } from 'angular2-toaster';
import { Router, ActivatedRoute } from '@angular/router';
import { IOption } from 'ng-select';
import { AuthService } from '../../../../auth/auth.service';
import { ActivityBoxService } from '../../../../shared/components/activity-box/activity-box-service.service';
import { HandleError } from '../../../../shared/classes/handle-error.class';

interface LogBook {
  id: string,
  flight_no: string,
  origin: string,
  destination: string,
  flight_time_start: string,
  flight_time_end: string,
};

@Injectable()
export class LogBookService {

  private get url() {
    return this.getUserRole() + '/log-book';
  }

  private serverUrl: string = 'flight-evidence/log-book';

  public aircraft: IOption;

  constructor(
    private authService: AuthService,
    private httpClient: HttpClient,
    private toasterService: ToasterService,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private activityBoxService: ActivityBoxService,
  ) { }

  get(id): Observable<any> {
    return this.httpClient.get<any>('/api/' + this.url + '/' + this.aircraft.value + '/' + id)
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      );
  }

  create(item: LogBook): void {

    this.httpClient.post<any>('/api/' + this.url + '/' + this.aircraft.value + '/store', item)
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

  update(id: number, item: LogBook): void {

    this.httpClient.put<any>('/api/' + this.url + '/' + this.aircraft.value + '/' + id + '/update', item)
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
    this.router.navigate(['./' + this.serverUrl], { relativeTo: this.activeRoute });
  }

  feedActivityBox(subjectId?): void {

    let activityBoxUrl = '/' + this.serverUrl;
    this.activityBoxService.url.next(null);
    this.activityBoxService.data.next([]);

    if (subjectId) {
      this.httpClient.get<any>('/api/' + this.url + '/activities', {
        params: {
          subject_id: subjectId,
          aircraft_id: this.aircraft ? this.aircraft.value : null
        }
      })
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
      this.httpClient.get<any>('/api/' + this.url + '/activities', { params: { aircraft_id: this.aircraft ? this.aircraft.value : null } })
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

  feedFlightRouteDropDown(): Promise<Array<[]>> {
    let url = '/api/' + this.url.replace('/log-book', '') + '/flight-routes';
    return this.feedFunc('get', url);
  }

  feedCaptainsDropDown(): Promise<Array<[]>> {
    let url = '/api/' + this.url.replace('/log-book', '') + '/users/captains';
    return this.feedFunc('get', url);
  }

  getAircraftInto(id?): Promise<Array<[]>> {
    let url = '/api/' + this.url + '/' + this.aircraft.value + "/aircraft-info";
    if(id) {
      return this.feedFunc('get', url, null, { params: { log_book_id: id } });
    } else {
      return this.feedFunc('get', url);
    }
  }

  findOriginDestinationFromFlightNo(flightRoute): Promise<Array<[]>> {
    let options = { params: { flight_route_id: flightRoute.value } }
    let url = '/api/' + this.url.replace('/log-book', '') + '/flight-routes';
    return this.feedFunc('get', url, null, options);
  }

  feedAircraftsDropDown(): Promise<Array<[]>> {
    let url = '/api/' + this.url.replace('/log-book', '') + '/aircrafts';
    return this.feedFunc('get', url);
  }

  feedDelayReasonsDropDown(): Promise<Array<[]>> {
    let url = '/api/' + this.url.replace('/log-book', '') + '/delay-reasons';
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

  getUserRole() {
    return this.authService.getUser().role;
  }

}
