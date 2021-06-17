import { Component, OnInit, OnDestroy } from '@angular/core';
import { ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { StatesService } from './states.service';


@Component({
  templateUrl: 'states.component.html',
})
export class StatesComponent implements OnInit {

  title = 'States';
  dataUrl = '/api/' + this.statesService.getUserRole() + '/states';


  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private statesService: StatesService,
  ) { }

  ngOnInit() {
    this.statesService.feedActivityBox();
  }


}
