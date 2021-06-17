import { Component, OnInit, OnDestroy } from '@angular/core';
import { ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { LogBookService } from './log-book.service';
import { ActivityBoxService } from '../../../../shared/components/activity-box/activity-box-service.service';

@Component({
  templateUrl: 'log-book.component.html',
})
export class LogBookComponent implements OnInit, OnDestroy {

  title = 'Log Book';

  public get dataUrl(): string {
    return '/api/' + this.logBookService.getUserRole() + '/log-book';
  }

  activityBoxUrl: string = '/flight-evidence/log-book';

  public showActivities = false;

  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private logBookService: LogBookService,
  ) { }

  async ngOnInit() {
    await this.logBookService.feedFlightRouteDropDown();
    await this.logBookService.feedActivityBox();

  }

  ngOnDestroy() {
  }

}
