import { Component, OnInit } from '@angular/core';
import { OwnersService } from '../owners.service';
import { BreadcrumbMenuService } from '../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Owner';

  public get dataUrl(): string {
    return '/api/' + this.ownersService.getUserRole() + '/owners';
  }

  constructor(
    private ownersService: OwnersService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([]);
    this.ownersService.feedActivityBox();
  }

  onTableEvent(e) {
    if(e) {
      this.ownersService.feedActivityBox();
    }
  }

}

