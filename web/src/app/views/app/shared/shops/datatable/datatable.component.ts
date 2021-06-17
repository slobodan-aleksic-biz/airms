import { Component, OnInit } from '@angular/core';
import { ShopsService } from '../shops.service';
import { BreadcrumbMenuService } from '../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Shops';

  public get dataUrl(): string {
    return '/api/' + this.shopsService.getUserRole() + '/shops';
  }

  constructor(
    private shopsService: ShopsService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([]);
    this.shopsService.feedActivityBox();
  }

  onTableEvent(e) {
    if(e) {
      this.shopsService.feedActivityBox();
    }
  }

}

