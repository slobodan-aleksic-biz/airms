import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { retry, catchError } from 'rxjs/operators';
import { throwError, Observable, BehaviorSubject } from 'rxjs';
import { ToasterService } from 'angular2-toaster';
import { Router, ActivatedRoute } from '@angular/router';
import { AuthService } from '../../../../../../auth/auth.service';
import { ActivityBoxService } from '../../../../../../shared/components/activity-box/activity-box-service.service';
import { HandleError } from '../../../../../../shared/classes/handle-error.class';

interface Airport {
  name: string,
  description: string,
  iata_code: string,
  icao_code: string,
  latitude: number,
  longitude: number,
  altitude_m: number,
  time_zone_offset: number,
  time_zone_letter: string,
  time_zone_dst: string,
  city_id: number,
};

@Injectable()
export class AirportsService {

  private get url() {
    return this.getUserRole() + '/airports';
  }

  private serverUrl: string = 'flight-evidence/log-book/flight-routes/airports';

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

  create(item: Airport): void {

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

  update(id, item: Airport): void {

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
    this.router.navigate(['./' + this.serverUrl], { relativeTo: this.activeRoute });
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



  feedCountriesDropDown(): Promise<Array<[]>> {
    let url = '/api/' + this.getUserRole() + '/countries';
    return this.feedFunc('get', url);
  }

  feedStatesDropDown(countryId): Promise<Array<[]>> {
    let url = '/api/' + this.getUserRole() + '/states';
    return this.feedFunc('get', url, null, { params : { 'country_id': parseInt(countryId) }});
  }

  feedCitiesDropDown(stateId): Promise<Array<[]>> {
    let url = '/api/' + this.getUserRole() + '/cities';
    return this.feedFunc('get', url, null, { params : { 'state_id': parseInt(stateId) }});
  }

  feedTimezonesDropDown(): Promise<Array<[]>> {
    let url = '/api/' + this.getUserRole() + '/users/timezones';
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
