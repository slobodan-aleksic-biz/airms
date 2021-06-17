import { Component, OnInit } from '@angular/core';
import { ToasterConfig, ToasterService } from 'angular2-toaster/angular2-toaster';
import { StocksService } from './stocks.service';


@Component({
  templateUrl: 'stocks.component.html',
  providers: [StocksService]
})
export class StocksComponent implements OnInit {

  title = 'Stocks';

  public get dataUrl(): string {
    return '/api/' + this.stocksService.getUserRole() + '/stocks';
  }

  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private stocksService: StocksService
  ) { }

  ngOnInit() {
    this.stocksService.feedActivityBox();
  }

}
