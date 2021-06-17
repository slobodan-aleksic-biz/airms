
import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { retry, catchError } from 'rxjs/operators';
import { throwError, BehaviorSubject } from 'rxjs';
import { AuthService } from '../../../../../../../auth/auth.service';
import { HandleError } from '../../../../../../../shared/classes/handle-error.class';
import { ToasterService } from 'angular2-toaster';


@Injectable()
export class AdvancedSearchService {

  public isAdvancedSearchPanelActive = new BehaviorSubject(false);

  public stockItemId;
  public stockItemInitPartNum;
  public partId;
  public partSerialOrBatch;
  public lineItemId;
  public lineItemBin;


  private get url() {
    return this.getUserRole() + '/airports';
  }

  constructor(
    private authService: AuthService,
    private httpClient: HttpClient,
    private toasterService: ToasterService,
  ) { }

  getAllLineItems(): Promise<Array<[]>> {
    let url = '/api/' + this.getUserRole() + '/stock-items/advanced-search';
    return this.feedFunc('get', url);
  }

  private feedFunc(method, url, body?, options?): Promise<Array<[]>> {
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
