import { Component, OnInit } from '@angular/core';
import { ATAChaptersService } from '../a-t-a-chapters.service';
import { BreadcrumbMenuService } from '../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'ATA Chapters';

  public get dataUrl(): string {
    return '/api/' + this.ataChaptersService.getUserRole() + '/ata-chapters';
  }

  constructor(
    private ataChaptersService: ATAChaptersService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([]);
    this.ataChaptersService.feedActivityBox();
  }

  onTableEvent(e) {
    if(e) {
      this.ataChaptersService.feedActivityBox();
    }
  }

}
