import { Component, OnInit } from '@angular/core';
import { ToasterConfig, ToasterService } from 'angular2-toaster/angular2-toaster';
import { ShopsService } from './shops.service';


@Component({
  templateUrl: 'shops.component.html',
  providers: [ShopsService]
})
export class ShopsComponent implements OnInit {

  title = 'Shops';

  public get dataUrl(): string {
    return '/api/' + this.shopsService.getUserRole() + '/shops';
  }

  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private shopsService: ShopsService
  ) { }

  ngOnInit() {
    this.shopsService.feedActivityBox();
  }

}
