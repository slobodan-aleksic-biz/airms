import { Component, OnInit } from '@angular/core';
import { ToasterConfig, ToasterService } from 'angular2-toaster/angular2-toaster';
import { QuantityUnitsService } from './quantity-units.service';

@Component({
  templateUrl: 'quantity-units.component.html',
  providers: [QuantityUnitsService]
})
export class QuantityUnitsComponent implements OnInit {

  title = 'Quantity Unit';

  public get dataUrl(): string {
    return '/api/' + this.quantityUnitsService.getUserRole() + '/quantity-units';
  }

  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private quantityUnitsService: QuantityUnitsService
  ) { }

  ngOnInit() {
    this.quantityUnitsService.feedActivityBox();
  }

}
