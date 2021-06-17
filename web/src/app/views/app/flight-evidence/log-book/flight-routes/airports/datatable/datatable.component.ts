import { Component, OnInit } from '@angular/core';
import { AirportsService } from '../airports.service';
import { BreadcrumbMenuService } from '../../../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Airports';
  dataUrl = '/api/' + this.flightRoutesService.getUserRole() + '/airports';

  constructor(
    private flightRoutesService: AirportsService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([{
      name: 'Cities',
      path: './log-book/flight-routes/airports/cities',
      icon: 'fa fa-building-o',
    }]);
    this.flightRoutesService.feedActivityBox();
  }

  onTableEvent(e) {
    if (e) {
      this.flightRoutesService.feedActivityBox();
    }
  }

}
