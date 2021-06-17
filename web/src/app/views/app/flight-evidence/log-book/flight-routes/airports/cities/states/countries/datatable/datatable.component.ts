import { Component, OnInit } from '@angular/core';
import { CountriesService } from '../countries.service';
import { BreadcrumbMenuService } from '../../../../../../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Countries';
  dataUrl = '/api/' + this.countriesService.getUserRole() + '/countries';

  constructor(
    private countriesService: CountriesService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([]);
    this.countriesService.feedActivityBox();
  }

  onTableEvent(e) {
    if (e) {
      this.countriesService.feedActivityBox();
    }
  }

}
