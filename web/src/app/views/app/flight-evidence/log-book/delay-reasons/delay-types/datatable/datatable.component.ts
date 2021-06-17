import { Component, OnInit } from '@angular/core';
import { DelayTypesService } from '../delay-types.service';
import { BreadcrumbMenuService } from '../../../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Delay Types';
  dataUrl = '/api/' + this.delayTypesService.getUserRole() + '/delay-types';

  constructor(
    private delayTypesService: DelayTypesService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([]);
    this.delayTypesService.feedActivityBox();
  }

  onTableEvent(e) {
    if (e) {
      this.delayTypesService.feedActivityBox();
    }
  }

}
