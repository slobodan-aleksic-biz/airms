import { HttpErrorResponse } from '@angular/common/http';
import * as d3 from "d3";
import { throwError } from 'rxjs';

export class HandleError {
  public static handleError(error: HttpErrorResponse, toasterService) {
    if (error.error instanceof ErrorEvent) {
      // A client-side or network error occurred. Handle it accordingly.
      console.error('An error occurred:', error.error.message);
    } else {
      // The backend returned an unsuccessful response code.
      // The response body may contain clues as to what went wrong,

      console.error(
        `Backend returned code ${error.status}, ` +
        `body was: ${JSON.stringify(error.error)}`);
      if (!toasterService) {
        d3.keys(error.error.errors).forEach(
          (key) => {
            let msg = error.error.errors[key];
            alert(error.error.message + "\n" + msg);
          }
        );
      }
      d3.keys(error.error.errors).forEach(
        (key) => {
          let msg = error.error.errors[key];
          toasterService.pop('error', error.error.message, msg);
        }
      );
    }
    // return an observable with a user-facing error message
    return throwError(
      'Something bad happened; please try again later.');
  }
}
