import { Component, OnInit } from '@angular/core';
import { UsersService } from '../users.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Users';

  public get dataUrl(): string {
    return '/api/' + this.usersService.getUserRole() + '/users';
  }

  constructor(
    private usersService: UsersService
  ) { }

  ngOnInit(): void {
    this.usersService.feedActivityBox();
  }

  onTableEvent(e) {
    if(e) {
      this.usersService.feedActivityBox();
    }
  }

}
