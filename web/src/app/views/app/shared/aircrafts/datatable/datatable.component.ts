import { Component, OnInit } from '@angular/core';
import { AircraftsService } from '../aircrafts.service';
import { BreadcrumbMenuService } from '../../../../../shared/services/breadcrumb-menu-service.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Aircrafts';
  dataUrl = '/api/' + this.aircraftsService.getUserRole() + '/aircrafts';

  constructor(
    private aircraftsService: AircraftsService,
    private breadcrumbMenuService: BreadcrumbMenuService,
    private router: Router
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([{
      name: 'Aircraft Types',
      path: this.router.url.substring(0, this.router.url.indexOf('aircrafts')) + "aircrafts/aircraft-types",
      icon: 'icon-plane',
    }]);
    this.aircraftsService.feedActivityBox();
  }

  onTableEvent(e) {
    if (e) {
      this.aircraftsService.feedActivityBox();
    }
  }

}
