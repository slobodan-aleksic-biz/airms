import { Component, OnInit } from '@angular/core';
import { StatesService } from '../states.service';
import { BreadcrumbMenuService } from '../../../../../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'States';
  dataUrl = '/api/' + this.statesService.getUserRole() + '/states';

  constructor(
    private statesService: StatesService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([{
      name: 'Countries',
      path: './log-book/flight-routes/airports/cities/states/countries',
      icon: 'icon-globe',
    }]);
    this.statesService.feedActivityBox();
  }

  onTableEvent(e) {
    if (e) {
      this.statesService.feedActivityBox();
    }
  }

}
