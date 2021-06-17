import { Component, OnInit, OnDestroy } from '@angular/core';
import { ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { CountriesService } from './countries.service';


@Component({
  templateUrl: 'countries.component.html',
})
export class CountriesComponent implements OnInit {

  title = 'Countries';
  dataUrl = '/api/' + this.countriesService.getUserRole() + '/countries';


  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private countriesService: CountriesService,
  ) { }

  ngOnInit() {
    this.countriesService.feedActivityBox();
  }


}
