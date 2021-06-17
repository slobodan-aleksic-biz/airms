import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { HttpErrorResponse } from '@angular/common/http';

import { throwError } from 'rxjs';
import { catchError, retry } from 'rxjs/operators';
import { HandleError } from '../../classes/handle-error.class';
import { ToasterService } from 'angular2-toaster';


export interface TableData extends Array<any> { }

@Injectable()
export class DataTableService {
  dataUrl: any;

  constructor(
    private http: HttpClient,
    // private dataUrl: string
    private toasterService: ToasterService
  ) { }

  setDataUrl(dataUrl: any) {
    this.dataUrl = dataUrl;
  }

  getData() {
    return this.http.get<TableData>(this.dataUrl)
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      );
  }

  removeItem(id) {
    return this.http.delete<any>(this.dataUrl + '/' + id + '/delete')
      .pipe(
        retry(3), // retry a failed request up to 3 times
        catchError((err) => HandleError.handleError(err, this.toasterService)) // then handle the error
      );
  }
}
