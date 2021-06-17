import { Component, OnInit } from '@angular/core';
import { FlightRoutesService } from '../flight-routes.service';
import { BreadcrumbMenuService } from '../../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Flight Routes';
  dataUrl = '/api/' + this.flightRoutesService.getUserRole() + '/flight-routes';

  constructor(
    private flightRoutesService: FlightRoutesService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([{
      name: 'Airports',
      path: './log-book/flight-routes/airports',
      icon: 'fa fa-angle-double-up',
    }]);
    this.flightRoutesService.feedActivityBox();
  }

  onTableEvent(e) {
    if (e) {
      this.flightRoutesService.feedActivityBox();
    }
  }

}
