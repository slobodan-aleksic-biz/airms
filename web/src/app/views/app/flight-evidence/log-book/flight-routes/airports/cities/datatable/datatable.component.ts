import { Component, OnInit } from '@angular/core';
import { CitiesService } from '../cities.service';
import { BreadcrumbMenuService } from '../../../../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Cities';
  dataUrl = '/api/' + this.flightRoutesService.getUserRole() + '/cities';

  constructor(
    private flightRoutesService: CitiesService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([{
      name: 'States',
      path: './log-book/flight-routes/airports/cities/states',
      icon: 'icon-globe-alt',
    }]);
    this.flightRoutesService.feedActivityBox();
  }

  onTableEvent(e) {
    if (e) {
      this.flightRoutesService.feedActivityBox();
    }
  }

}
