import { Component, OnInit, OnDestroy } from '@angular/core';
import { ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { UsersService } from './users.service';

@Component({
  templateUrl: 'users.component.html',
})
export class UsersComponent implements OnInit {

  title = 'Users';

  public get dataUrl(): string {
    return '/api/' + this.usersService.getUserRole() + '/users';
  }


  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private usersService: UsersService
  ) { }

  ngOnInit() {
    this.usersService.feedActivityBox();
  }
}
