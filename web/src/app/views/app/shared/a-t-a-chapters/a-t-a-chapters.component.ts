import { Component, OnInit } from '@angular/core';
import { ToasterConfig, ToasterService } from 'angular2-toaster/angular2-toaster';
import { ATAChaptersService } from './a-t-a-chapters.service';
import { BreadcrumbMenuService } from '../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  templateUrl: 'a-t-a-chapters.component.html',
  providers: [ATAChaptersService]
})
export class ATAChaptersComponent implements OnInit {

  title = 'ATA Chapters';

  public get dataUrl(): string {
    return '/api/' + this.ataChaptersService.getUserRole() + '/ata-chapters';
  }

  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  constructor(
    private ataChaptersService: ATAChaptersService
  ) { }

  ngOnInit() {
    this.ataChaptersService.feedActivityBox();
  }

}
