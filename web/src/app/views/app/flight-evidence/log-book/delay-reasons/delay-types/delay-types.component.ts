import { Component, OnInit, OnDestroy } from '@angular/core';
import { ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { DelayTypesService } from './delay-types.service';


@Component({
  templateUrl: 'delay-types.component.html',
})
export class DelayTypesComponent implements OnInit {

  title = 'Delay Types';
  dataUrl = '/api/' + this.delayTypesService.getUserRole() + '/delay-types';


  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private delayTypesService: DelayTypesService,
  ) { }

  ngOnInit() {
    this.delayTypesService.feedActivityBox();
  }


}
