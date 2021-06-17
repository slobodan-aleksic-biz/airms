import { Component, OnInit, OnDestroy } from '@angular/core';
import { ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { AirportsService } from './airports.service';


@Component({
  templateUrl: 'airports.component.html',
})
export class AirportsComponent implements OnInit {

  title = 'Airports';
  dataUrl = '/api/' + this.airportsService.getUserRole() + '/airports';


  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private airportsService: AirportsService
  ) { }

  ngOnInit() {
    this.airportsService.feedActivityBox();
  }


}
