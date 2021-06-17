import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { retry, catchError } from 'rxjs/operators';
import { throwError, Observable, BehaviorSubject } from 'rxjs';
import { ToasterService } from 'angular2-toaster';
import { Router } from '@angular/router';
import { AuthService } from '../../../../auth/auth.service';
import { HandleError } from '../../../../shared/classes/handle-error.class';

@Injectable()
export class ComponentTypesService {

  private name = 'component-types';

  private get url() {
    return this.getUserRole();
  }

  private serverUrl: string = this.router.url.substring(0, this.router.url.indexOf(this.name)) + this.name;

  constructor(
    private authService: AuthService,
    private httpClient: HttpClient,
    private toasterService: ToasterService,
    private router: Router,
  ) { }

  feedComponentTypesDropDown(componentCategory: string, isInventoryCAMOPage?): Promise<Array<[]>> {
    let url = '/api/' + this.url + "/component-categories/" + componentCategory + "/" + this.name;
    if(isInventoryCAMOPage) {
      return this.feedFunc('get', url, null, { params : { 'request_page': 'inventory_camo' }});
    } else {
      return this.feedFunc('get', url);
    }
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
