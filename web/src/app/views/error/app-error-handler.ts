import { Injectable, Injector, ErrorHandler } from "@angular/core";
import { HttpErrorResponse } from '@angular/common/http';
import { Router } from '@angular/router';

@Injectable({ providedIn: "root" })
export class AppErrorHandler extends ErrorHandler {
  constructor(private injector: Injector) {
    super();
  }

  handleError(errorResponse: HttpErrorResponse | any) {
    if(errorResponse instanceof HttpErrorResponse) {
      const error = (typeof errorResponse.error === 'object') ? JSON.parse(errorResponse.error) : errorResponse.error;

      if(errorResponse.status.toString().indexOf('40') || errorResponse.status.toString().indexOf('50') ) {
        this.goToSignin();
      }
    }
  }

  goToSignin() {
    const router = this.injector.get(Router);
    router.navigate(['/signin']);
  }
}

