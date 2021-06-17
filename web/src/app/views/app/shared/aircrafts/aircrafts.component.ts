import { Component, OnInit, OnDestroy } from '@angular/core';
import { ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { AircraftsService } from './aircrafts.service';


@Component({
  templateUrl: 'aircrafts.component.html',
  providers: [AircraftsService]
})
export class AircraftsComponent implements OnInit {

  title = 'Aircrafts';
  dataUrl = '/api/' + this.aircraftsService.getUserRole() + '/aircrafts';


  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private aircraftsService: AircraftsService,
  ) { }

  ngOnInit() {
    this.aircraftsService.feedActivityBox();
  }


}
