import { Component, OnInit } from '@angular/core';
import { QuantityUnitsService } from '../quantity-units.service';
import { BreadcrumbMenuService } from '../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Quantity Unit';

  public get dataUrl(): string {
    return '/api/' + this.quantityUnitsService.getUserRole() + '/quantity-units';
  }

  constructor(
    private quantityUnitsService: QuantityUnitsService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([]);
    this.quantityUnitsService.feedActivityBox();
  }

  onTableEvent(e) {
    if(e) {
      this.quantityUnitsService.feedActivityBox();
    }
  }

}

