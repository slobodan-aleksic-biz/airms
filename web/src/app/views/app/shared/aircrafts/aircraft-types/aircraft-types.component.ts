import { Component, OnInit, OnDestroy } from '@angular/core';
import { ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { AircraftTypesService } from './aircraft-types.service';


@Component({
  templateUrl: 'aircraft-types.component.html',
  providers: [AircraftTypesService]
})
export class AircraftTypesComponent implements OnInit {

  title = 'Aircraft Types';
  dataUrl = '/api/' + this.aircraftTypesService.getUserRole() + '/aircraft-types';


  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private aircraftTypesService: AircraftTypesService,
  ) { }

  ngOnInit() {
    this.aircraftTypesService.feedActivityBox();
  }


}
