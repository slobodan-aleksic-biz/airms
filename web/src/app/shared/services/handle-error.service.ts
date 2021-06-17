import { Injectable } from '@angular/core';
import { HttpErrorResponse } from '@angular/common/http';
import * as d3 from "d3";
import { throwError } from 'rxjs';
import { ToasterService } from 'angular2-toaster';


@Injectable({
  providedIn: 'root'
})
export class HandleErrorService {
  public constructor(
    private toasterService: ToasterService,
  ) { }

  public handleError(error: HttpErrorResponse) {
    if (error.error instanceof ErrorEvent) {
      // A client-side or network error occurred. Handle it accordingly.
      console.error('An error occurred:', error.error.message);
    } else {
      // The backend returned an unsuccessful response code.
      // The response body may contain clues as to what went wrong,

      console.error(
        `Backend returned code ${error.status}, ` +
        `body was: ${JSON.stringify(error.error.errors)}`);

        d3.keys(error.error.errors).forEach(
          (key) => {
            let msg = error.error.errors[key];
            this.toasterService.pop('error', msg, 'The action will be tracked!');
          }
        );
    }
    // return an observable with a user-facing error message
    return throwError(
      'Something bad happened; please try again later.');
  }
}
