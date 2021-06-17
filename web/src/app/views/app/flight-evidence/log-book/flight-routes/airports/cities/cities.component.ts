import { Component, OnInit, OnDestroy } from '@angular/core';
import { ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { CitiesService } from './cities.service';


@Component({
  templateUrl: 'cities.component.html',
})
export class CitiesComponent implements OnInit {

  title = 'Cities';
  dataUrl = '/api/' + this.citiesService.getUserRole() + '/cities';


  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private citiesService: CitiesService,
  ) { }

  ngOnInit() {
    this.citiesService.feedActivityBox();
  }


}
