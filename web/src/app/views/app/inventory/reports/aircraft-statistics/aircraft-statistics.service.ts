import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse, HttpHeaders } from '@angular/common/http';
import { retry, catchError, map } from 'rxjs/operators';
import { throwError, Observable, BehaviorSubject } from 'rxjs';
import { ToasterService } from 'angular2-toaster';
import { Router, ActivatedRoute } from '@angular/router';
import { AuthService } from '../../../../../auth/auth.service';
import { ActivityBoxService } from '../../../../../shared/components/activity-box/activity-box-service.service';
import { HandleError } from '../../../../../shared/classes/handle-error.class';


@Injectable()
export class AircraftStatisticsService {

  private get url() {
    return this.getUserRole() + '/flight-evidence/reports';
  }

  constructor(
    private authService: AuthService,
    private httpClient: HttpClient,
    private toasterService: ToasterService,
  ) { }


  getReport(): Promise<Array<[]>> {
    let url = '/api/' + this.url + '/report';
    return this.feedFunc('get', url, null,
      {
        headers: new HttpHeaders({
          'Content-Type': 'application/octet-stream',
        }), responseType: 'blob',
        params: {

        }
      });
  }



  // getAircraftStatisticsPDF(fromDate, toDate): Observable<any> {
  //   let url = '/api/' + this.url + '/aircraft-statistics-pdf';
  //   return this.httpClient.get(url, {
  //     responseType: 'blob', params: {
  //       from_date: fromDate,
  //       to_date: toDate,
  //     }
  //   })
  //     .pipe(
  //       map((result: any) => {
  //         return result;
  //       })
  //     );
  // }

  getAircraftStatisticsPDF(fromDate, toDate): Promise<Array<[]>> {
    let url = '/api/' + this.url + '/aircraft-statistics-pdf';
    return this.feedFunc('get', url, null,
      {
        headers: new HttpHeaders({
          'Content-Type': 'application/octet-stream',
        }), responseType: 'blob',
        params: {
          from_date: fromDate,
          to_date: toDate,
        }
      });
  }

  getAircraftStatisticsUI(fromDate, toDate): Promise<Array<[]>> {
    let url = '/api/' + this.url + '/aircraft-statistics-ui';
    return this.feedFunc('get', url, null, {
      params: {
        from_date: fromDate,
        to_date: toDate,
      }
    });
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
