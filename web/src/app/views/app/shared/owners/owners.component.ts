import { Component, OnInit } from '@angular/core';
import { ToasterConfig, ToasterService } from 'angular2-toaster/angular2-toaster';
import { OwnersService } from './owners.service';

@Component({
  templateUrl: 'owners.component.html',
  providers: [OwnersService]
})
export class OwnersComponent implements OnInit {

  title = 'Owner';

  public get dataUrl(): string {
    return '/api/' + this.ownersService.getUserRole() + '/owners';
  }

  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private ownersService: OwnersService
  ) { }

  ngOnInit() {
    this.ownersService.feedActivityBox();
  }

}
