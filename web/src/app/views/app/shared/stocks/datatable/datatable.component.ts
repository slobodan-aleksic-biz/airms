import { Component, OnInit } from '@angular/core';
import { StocksService } from '../stocks.service';
import { BreadcrumbMenuService } from '../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Stocks';

  public get dataUrl(): string {
    return '/api/' + this.stocksService.getUserRole() + '/stocks';
  }

  constructor(
    private stocksService: StocksService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    this.breadcrumbMenuService.settingsItems.next([]);
    this.stocksService.feedActivityBox();
  }

  onTableEvent(e) {
    if(e) {
      this.stocksService.feedActivityBox();
    }
  }

}

