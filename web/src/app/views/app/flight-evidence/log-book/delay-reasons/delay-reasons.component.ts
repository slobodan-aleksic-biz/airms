import { Component, OnInit, OnDestroy } from '@angular/core';
import { ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { DelayReasonsService } from './delay-reasons.service';


@Component({
  templateUrl: 'delay-reasons.component.html',
})
export class DelayReasonsComponent implements OnInit {

  title = 'Delay Reasons';
  dataUrl = '/api/' + this.delayReasonsService.getUserRole() + '/delay-reasons';


  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private delayReasonsService: DelayReasonsService,
  ) { }

  ngOnInit() {
    this.delayReasonsService.feedActivityBox();
  }


}
