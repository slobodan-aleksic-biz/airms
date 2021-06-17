import { Component, OnInit, OnDestroy } from '@angular/core';
import { ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { FlightRoutesService } from './flight-routes.service';

@Component({
  templateUrl: 'flight-routes.component.html',
})
export class FlightRoutesComponent implements OnInit {

  title = 'Flight Routes';
  dataUrl = '/api/' + this.flightRoutesService.getUserRole() + '/flight-routes';

  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private flightRoutesService: FlightRoutesService,
  ) { }

  ngOnInit() {
    this.flightRoutesService.feedActivityBox();
  }

}
