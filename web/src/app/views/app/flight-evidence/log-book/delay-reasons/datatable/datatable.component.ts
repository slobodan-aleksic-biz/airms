import { Component, OnInit } from '@angular/core';
import { DelayReasonsService } from '../delay-reasons.service';
import { BreadcrumbMenuService } from '../../../../../../shared/services/breadcrumb-menu-service.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Delay Reasons';
  dataUrl = '/api/' + this.delayReasonsService.getUserRole() + '/delay-reasons';

  constructor(
    private delayReasonsService: DelayReasonsService,
    private breadcrumbMenuService: BreadcrumbMenuService,
    private router: Router
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([{
      name: 'Delay Types',
      path: this.router.url.substring(0, this.router.url.indexOf('delay-reasons')) + "delay-reasons/delay-types",
      icon: 'icon-clock',
    }]);
    this.delayReasonsService.feedActivityBox();
  }

  onTableEvent(e) {
    if (e) {
      this.delayReasonsService.feedActivityBox();
    }
  }

}
