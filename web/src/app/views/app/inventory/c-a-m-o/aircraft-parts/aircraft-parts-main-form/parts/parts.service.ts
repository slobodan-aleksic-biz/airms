import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { retry, catchError } from 'rxjs/operators';
import { throwError, BehaviorSubject, Observable } from 'rxjs';
import { AuthService } from '../../../../../../../auth/auth.service';
import { HandleError } from '../../../../../../../shared/classes/handle-error.class';
import { ToasterService } from 'angular2-toaster';
import { ActivityBoxService } from '../../../../../../../shared/components/activity-box/activity-box-service.service';
import { Router, ActivatedRoute } from '@angular/router';

interface Part {
  id: number,
  serial_num: string,
  batch_num: string,
  quantity_alarm: number,
  shelf_life_alarm: number,
  note: string,
  aircraft_type_id: number,
  owner_id: number,
  stock_item_id: number,
};


@Injectable()
export class PartsService {

  private stockItemsName = 'stock-items';
  private partsName = 'parts';

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

  findPartById(stockItemId: number, partId: number): Promise<Part> {
    let url = '/api/' + this.getUserRole() + '/' + this.stockItemsName + '/' + stockItemId + '/' + this.partsName + '/' + partId;
    return this.feedFunc('get', url);
  }

  getParts(stockItemId: number): Promise<Array<[]>> {
    let url = '/api/' + this.getUserRole() + '/' + this.stockItemsName + '/' + stockItemId + '/' + this.partsName;
    return this.feedFunc('get', url);
  }

  feedAircraftPartsDropDown(stockItemId: number, aircraftId: number, partId: number): Promise<Array<[]>> {
    let url = '/api/' + this.getUserRole() + '/' + this.stockItemsName + '/' + stockItemId + '/' + this.partsName;
    return this.feedFunc('get', url, null, { params: { 'aircraft_id': aircraftId, part_id: partId } });
  }

  findPartBySerialOrBatchNum(stockItemId, serialOrBatchNum): Promise<Part> {
    let url = '/api/' + this.getUserRole() + '/' + this.stockItemsName + '/' + stockItemId + '/' + this.partsName + '/serial-or-batch-num/' + serialOrBatchNum;
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

  create(item: any, stockItemId, toasterService): Promise<boolean> {
    this.toasterService = toasterService;
    return new Promise<boolean>(
      (resolve, reject) => {
        this.httpClient.post<any>('/api/' + this.url + '/' + stockItemId + '/' + this.partsName + '/store', item)
          .pipe(
            retry(3), // retry a failed request up to 3 times
            catchError((err) => HandleError.handleError(err, toasterService)) // then handle the error
          ).subscribe(
            (data) => {
              this.defaultCreateUpdateResponse(stockItemId, data, 'success');
              resolve(true);
            },
            error => {
              reject(false);
            });
      }
    );
  }

  update(id, item: any, stockItemId, toasterService): Promise<boolean> {
    this.toasterService = toasterService;
    return new Promise<boolean>(
      (resolve, reject) => {
        this.httpClient.put<any>('/api/' + this.url + '/' + stockItemId + '/' + this.partsName + '/' + id + '/update', item)
          .pipe(
            retry(3), // retry a failed request up to 3 times
            catchError((err) => HandleError.handleError(err, toasterService)) // then handle the error
          ).subscribe(
            (data) => {
              this.defaultCreateUpdateResponse(stockItemId, data, 'info');
              resolve(true);
            },
            error => {
              reject(false);
            });
      }
    );
  }


  removeItem(stockItemId, id) {
    return this.httpClient.delete<any>('/api/' + this.url + '/' + stockItemId + '/' + this.partsName + '/' + id + '/delete')
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      );
  }

  defaultCreateUpdateResponse(stockItemId, data, messageType) {
    this.toasterService.pop(messageType, data.message, 'The action will be tracked!');
    this.feedActivityBox(stockItemId);
    this.router.navigate(['./' + this.serverUrl], { relativeTo: this.activeRoute });
  }


  getUserRole() {
    return this.authService.getUser().role;
  }


  feedActivityBox(stockItemId, subjectId?): void {

    let activityBoxUrl = '/' + this.serverUrl + '/' + stockItemId + '/' + this.partsName;
    this.activityBoxService.url.next(null);
    this.activityBoxService.data.next(null);

    if (subjectId) {
      this.httpClient.get<any>('/api/' + this.url + '/' + stockItemId + '/' + this.partsName + '/activities', { params: { subject_id: subjectId } })
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
      this.httpClient.get<any>('/api/' + this.url + '/' + stockItemId + '/' + this.partsName + '/activities')
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
