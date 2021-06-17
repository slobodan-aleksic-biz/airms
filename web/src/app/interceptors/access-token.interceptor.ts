import { Injectable } from "@angular/core";
import {
  HttpEvent,
  HttpInterceptor,
  HttpHandler,
  HttpRequest,
  HttpResponse,
  HttpErrorResponse
} from "@angular/common/http";
import { Observable, throwError } from "rxjs";
import { map, catchError } from 'rxjs/operators';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class AccessTokenInterceptor implements HttpInterceptor {
  constructor(
    private router: Router
  ) { }
  intercept(request: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {
    const token: string = localStorage.getItem('access_token');

    if (token) {
      request = request.clone({
        setHeaders: {
          'Authorization': `Bearer ${token}`,
          // 'Content-Type': 'application/json; charset=UTF-8',
        }
      });
    }

    return next.handle(request).pipe(
      map((event: HttpEvent<any>) => {
        if (event instanceof HttpResponse) {

        }
        return event;
      }),
      catchError((error: HttpErrorResponse) => {
        // this.router.navigate(['/']);

        if(!error.status) {
          this.router.navigate(['/']);
        }

        let data:any = {};
        data = {
          reason: error && error.error && error.error.error ? error.error.error : error.error.message ? error.error.message : '',
          status: error.status
        };

        if (data['reason'].includes('Forbidden') || data['reason'].includes('Unauthorized') || data['reason'].includes('Unauthenticated') ) {
          localStorage.clear();
          this.router.navigate(['/']);
        }

        return throwError(error);
      }));
  }
}
