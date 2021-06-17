import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { tap } from 'rxjs/operators';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  constructor(
    private httpClient: HttpClient,
    private router: Router,
  ) { }

  isAuthenticated(): boolean {
    return localStorage.getItem('user') ? true : false;
  }

  signIn(credentials: { email: string, password: string }): Observable<boolean> {
    return this.httpClient.post<any>('/api/auth/login', credentials)
      .pipe(tap(
        (data) => {
          localStorage.setItem("access_token", data.access_token);
          localStorage.setItem("token_type", data.token_type);
          localStorage.setItem("user", btoa(JSON.stringify(data.user)));
          localStorage.setItem("expires_in", data.expires_in);
        }
      ));
  }


  getUserAvatar(): Observable<any> {
    let user = this.getUser();
    return this.httpClient.get<any>('/api/'+user.role+'/user-profile/avatar')
      .pipe(tap(
        (avatar) => { }
      ));
  }

  signOut() {
    return this.httpClient.post<any>('/api/auth/logout', {})
    .pipe(tap(
      (data) => {}
    )).subscribe((data) => {
      localStorage.clear();
      this.router.navigate(['/signin']);
    });
  }

  getUser(): any {
    return localStorage.getItem('user') ? JSON.parse(atob(localStorage.getItem('user'))) : null;
  }

  getRole(): string {
    return this.getUser()['role'];
  }

}
