import { Component, OnInit } from '@angular/core';
import { AircraftTypesService } from '../aircraft-types.service';
import { BreadcrumbMenuService } from '../../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Aircraft Types';
  dataUrl = '/api/' + this.aircraftTypesService.getUserRole() + '/aircraft-types';

  constructor(
    private aircraftTypesService: AircraftTypesService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([]);
    this.aircraftTypesService.feedActivityBox();
  }

  onTableEvent(e) {
    if (e) {
      this.aircraftTypesService.feedActivityBox();
    }
  }

}
