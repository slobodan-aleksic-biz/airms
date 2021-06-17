import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse, HttpHeaders } from '@angular/common/http';
import { retry, catchError, tap } from 'rxjs/operators';
import { throwError, Observable } from 'rxjs';
import { AuthService } from '../../../../../../../../auth/auth.service';
import { HandleError } from '../../../../../../../../shared/classes/handle-error.class';
import { ToasterService } from 'angular2-toaster';
import { ActivityBoxService } from '../../../../../../../../shared/components/activity-box/activity-box-service.service';
import { Router, ActivatedRoute } from '@angular/router';

interface LineItem {
  id: number,
  bin: number,
  time_since_new: number,
  cycles_since_new: number,
  days_since_new: number,
  time_since_overhaul: number,
  cycles_since_overhaul: number,
  days_since_overhaul: number,
  note: string,
  location: string,
  certificate_date: string,
  input_date: string,
  shelf_life: number,
  quantity: number,
  invoice_ref: number,
  stock_id: number,
  part_id: number
};


@Injectable()
export class LineItemsService {

  private stockItemsName = 'stock-items';
  private partsName = 'parts';
  private lineItemsName = 'line-items';

  private get url() {
    return this.getUserRole() + '/' + this.stockItemsName;
  }

  private serverUrl: string = this.router.url + '/' + this.stockItemsName;

  constructor(
    private authService: AuthService,
    private httpClient: HttpClient,
    private toasterService: ToasterService,
    private activityBoxService: ActivityBoxService,
    private router: Router,
    private activeRoute: ActivatedRoute,
  ) { }


  get(id, partId, stockItemId): Observable<any> {
    return this.httpClient.get<any>('/api/' + this.url + '/' + stockItemId + '/' + this.partsName + '/' + partId + '/' + this.lineItemsName + '/' + id)
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      );
  }


  getFirstLineItemInfo(stockItemId: number, partId: number): Promise<Array<[]>> {
    const url = '/api/' + this.getUserRole() + '/stock-items/' + stockItemId + '/parts/' + partId + '/first-line-item';
    return this.feedFunc('get', url);
  }

  getLastLineItemInfo(stockItemId: number, partId: number, lineItemId: number): Promise<Array<[]>> {
    const url = '/api/' + this.getUserRole() + '/stock-items/' + stockItemId + '/parts/' + partId + '/last-line-item/' + lineItemId;
    return this.feedFunc('get', url);
  }

  getLineItemInfo(stockItemId: number, partId: number, lineItemId: number): Promise<Array<[]>> {
    const url = '/api/' + this.getUserRole() + '/stock-items/' + stockItemId + '/parts/' + partId + '/line-items/' + lineItemId;
    return this.feedFunc('get', url);
  }

  getPartInfo(stockItemId: number, partId: number): Promise<Array<[]>> {
    const url = '/api/' + this.getUserRole() + '/stock-items/' + stockItemId + '/parts/' + partId;
    return this.feedFunc('get', url);
  }


  getPartQR(stockItemId: number, partId: number): Observable<any> {
    const url = '/api/' + this.getUserRole() + '/stock-items/' + stockItemId + '/parts/' + partId + '/qr';
    const headers = new HttpHeaders({
      'Content-Type': 'application/json',
      'Accept': 'application/json'
    });
    return this.httpClient.get(url, { headers: headers, responseType: 'blob' as 'json' });
  }


  getLineItems(stockItemId: number, partId: number): Promise<Array<[]>> {
    const url = '/api/' + this.getUserRole() + '/stock-items/' + stockItemId + '/parts/' + partId + '/line-items';
    return this.feedFunc('get', url);
  }

  feedLocationsDropDown(stockItemId: number, partId: number): Promise<Array<[]>> {
    const url = '/api/' + this.getUserRole() + '/stock-items/' + stockItemId + '/parts/' + partId + '/line-items/locations';
    return this.feedFunc('get', url);
  }

  findLineItemByBIN(stockItemId, partId, bin): Promise<LineItem> {
    const url = '/api/' + this.getUserRole() + '/' + this.stockItemsName + '/' + stockItemId + '/' + this.partsName + '/' + partId + '/line-items/bin/' + bin;
    return this.feedFunc('get', url);
  }

  feedEngineersDropDown(): Promise<Array<[]>> {
    const url = '/api/' + this.getUserRole() + '/users/engineers';
    return this.feedFunc('get', url);
  }

  feedTechniciansDropDown(): Promise<Array<[]>> {
    const url = '/api/' + this.getUserRole() + '/users/technicians';
    return this.feedFunc('get', url);
  }

  feedConditionsDropDown(): Promise<Array<[]>> {
    const url = '/api/' + this.getUserRole() + '/conditions';
    return this.feedFunc('get', url);
  }

  feedUnserviceableConditionsDropDown(condition: string): Promise<Array<[]>> {
    const url = '/api/' + this.getUserRole() + '/conditions/' + condition + '/unserviceable-conditions';
    return this.feedFunc('get', url);
  }


  private feedFunc(method, url, body?, options?): Promise<any> {
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


  create(item: any, stockItemId, partId, toasterService): Promise<boolean> {
    this.toasterService = toasterService;

    return new Promise<boolean>(
      (resolve, reject) => {
        this.httpClient.post<any>('/api/' + this.url + '/' + stockItemId + '/' + this.partsName + '/' + partId + '/line-items/store', item)
          .pipe(
            retry(3), // retry a failed request up to 3 times
            catchError((err) => HandleError.handleError(err, toasterService)) // then handle the error
          ).subscribe(
            (data) => {
              this.defaultCreateUpdateResponse(stockItemId, partId, data, 'success');
              resolve(data.bin);
            },
            error => {
              reject(false);
            });
      }
    );
  }

  update(id, item: any, stockItemId, partId, toasterService): Promise<boolean> {
    this.toasterService = toasterService;
    return new Promise<boolean>(
      (resolve, reject) => {
        this.httpClient.put<any>('/api/' + this.url + '/' + stockItemId + '/' + this.partsName + '/' + partId + '/line-items/' + id + '/update', item)
          .pipe(
            retry(3), // retry a failed request up to 3 times
            catchError((err) => HandleError.handleError(err, toasterService)) // then handle the error
          ).subscribe(
            (data) => {
              this.defaultCreateUpdateResponse(stockItemId, partId, data, 'info');
              resolve(data.bin);
            },
            error => {
              reject(false);
            });
      }
    );
  }



  removeItem(stockItemId, partId, id) {
    return this.httpClient.delete<any>('/api/' + this.url + '/' + stockItemId + '/' + this.partsName + '/' + partId + '/line-items/' + id + '/delete')
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      );
  }


  defaultCreateUpdateResponse(stockItemId, partId, data, messageType) {
    this.toasterService.pop(messageType, data.message, 'The action will be tracked!');
    this.feedActivityBox(stockItemId, partId);
    this.router.navigate(['./' + this.serverUrl], { relativeTo: this.activeRoute });
  }

  getUserRole() {
    return this.authService.getUser().role;
  }


  feedActivityBox(stockItemId, partId, subjectId?): void {

    const activityBoxUrl = '/' + this.serverUrl + '/' + stockItemId + '/' + this.partsName + '/' + partId + '/' + this.lineItemsName;
    this.activityBoxService.url.next(null);
    this.activityBoxService.data.next(null);

    const aUrl = '/api/' + this.url + '/' + stockItemId + '/' + this.partsName + '/' + partId + '/' + this.lineItemsName + '/activities';

    if (subjectId) {
      this.httpClient.get<any>(aUrl, { params: { subject_id: subjectId } })
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
      this.httpClient.get<any>(aUrl)
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
}
