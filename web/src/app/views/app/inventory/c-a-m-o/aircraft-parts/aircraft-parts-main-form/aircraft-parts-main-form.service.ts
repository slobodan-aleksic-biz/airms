import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { retry, catchError } from 'rxjs/operators';
import { throwError, BehaviorSubject, Observable } from 'rxjs';
import { AuthService } from '../../../../../../auth/auth.service';
import { ToasterService } from 'angular2-toaster';
import { Router, ActivatedRoute } from '@angular/router';
import { ActivityBoxService } from '../../../../../../shared/components/activity-box/activity-box-service.service';
import * as d3 from "d3";
import { HandleError } from '../../../../../../shared/classes/handle-error.class';

interface StockItem {
  id: number,
  init_part_num: string,
  name: string,
  description: string,
  a_t_a_chapter_id: number,
  component_type: number,
};

@Injectable()
export class AircraftPartsMainFormService {

  private stockItemName = 'stock-items';

  private get url() {
    return this.getUserRole() + '/' + this.stockItemName;
  }

  private serverUrl: string = this.router.url + '/' + this.stockItemName;

  constructor(
    private authService: AuthService,
    private httpClient: HttpClient,
    private toasterService: ToasterService,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private activityBoxService: ActivityBoxService,
  ) { }


  findStockItemById(stockItemId): Promise<StockItem> {
    let url = '/api/' + this.getUserRole() + '/' + this.stockItemName + '/' + stockItemId;
    return this.feedFunc('get', url);
  }

  findStockItemByPartNum(stockItemPartNum): Promise<StockItem> {
    let url = '/api/' + this.getUserRole() + '/' + this.stockItemName + '/part-num/' + stockItemPartNum;
    return this.feedFunc('get', url);
  }

  getStockItems(): Promise<Array<[]>> {
    let url = '/api/' + this.getUserRole() + '/' + this.stockItemName;
    return this.feedFunc('get', url, null, { params: {'is_camo_page': 'yes'} });
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

  getUserRole() {
    return this.authService.getUser().role;
  }

  create(item: StockItem, toasterService): Promise<boolean> {
    this.toasterService = toasterService;
    return new Promise<boolean>(
      (resolve, reject) => {
        this.httpClient.post<any>('/api/' + this.url + '/store', item)
          .pipe(
            retry(3), // retry a failed request up to 3 times
            catchError((err) => HandleError.handleError(err, toasterService)) // then handle the error
          ).subscribe(
            (data) => {
              this.defaultCreateUpdateResponse(data, 'success');
              resolve(true);
            },
            error => {
              reject(false);
            });
      }
    );
  }

  update(id, item: StockItem, toasterService): Promise<boolean> {
    this.toasterService = toasterService;
    return new Promise<boolean>(
      (resolve, reject) => {
        this.httpClient.put<any>('/api/' + this.url + '/' + id + '/update', item)
          .pipe(
            retry(3), // retry a failed request up to 3 times
            catchError((err) => HandleError.handleError(err, toasterService)) // then handle the error
          ).subscribe(
            (data) => {
              this.defaultCreateUpdateResponse(data, 'info');
              resolve(true);
            },
            error => {
              reject(false);
            });
      }
    );
  }

  removeItem(id) {
    return this.httpClient.delete<any>('/api/' + this.url + '/' + id + '/delete')
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      );
  }

  defaultCreateUpdateResponse(data, messageType) {
    this.toasterService.pop(messageType, data.message, 'The action will be tracked!');
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
}
