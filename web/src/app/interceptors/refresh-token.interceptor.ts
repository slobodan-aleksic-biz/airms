import { Injectable, Injector } from "@angular/core";
import {
  HttpEvent,
  HttpInterceptor,
  HttpHandler,
  HttpRequest,
  HttpResponse,
  HttpErrorResponse,
  HttpClient
} from "@angular/common/http";
import { Observable, throwError } from "rxjs";
import { map, catchError } from 'rxjs/operators';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class RefreshTokenInterceptor implements HttpInterceptor {
  constructor(
    private router: Router,
    private injector: Injector
  ) { }
  intercept(request: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {

    return next.handle(request).pipe(
      map((event: HttpEvent<any>) => {
        if (event instanceof HttpResponse) {

        }
        return event;
      }),
      catchError((errorResponse: HttpErrorResponse) => {

        const error = (typeof errorResponse.error !== 'object') ? JSON.parse(errorResponse.error) : errorResponse;
        if (errorResponse.status === 401 && error.error === 'token_expired') {
          const http = this.injector.get(HttpClient);

          return http.post<any>('/api/auth/refresh', {})
            .flatMap(
              (data) => {
                localStorage.setItem('access_token', data.token);
                const cloneRequest = request.clone({
                  setHeaders: {
                    'Authorization': `Bearer ${data.token}`
                  }
                });
                return next.handle(cloneRequest);
              }
            );
        }
        return Observable.throw(errorResponse);
      }
      ));
  }
}
