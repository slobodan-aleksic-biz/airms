import { Component, OnInit, ViewEncapsulation, Input } from '@angular/core';
import { BreadcrumbMenuService } from '../../../../../../../shared/services/breadcrumb-menu-service.service';
import { ActivityBoxService } from '../../../../../../../shared/components/activity-box/activity-box-service.service';
import { AdvancedSearchService } from './advanced-search.service';
import { Router } from '@angular/router';
import { DataFilterPipe } from '../../../../../../../shared/components/datatable/datafilterpipe';
import { UnderscorelessPipe } from '../../../../../../../shared/pipes/underscorlesspipe';
import { ExcelService } from '../../../../../../../shared/services/excel-service.service';

import { PartsService } from '../parts/parts.service';
import { LineItemsService } from '../parts/line-items/line-items.service';
import { AircraftPartsMainFormService } from '../aircraft-parts-main-form.service';

@Component({
  selector: 'app-advanced-search',
  templateUrl: 'advanced-search.component.html',
  providers: [
    DataFilterPipe
  ],
})
export class AdvancedSearchComponent implements OnInit {
  error: any;
  columns: Array<any>;
  public data: any;
  public dataVal: any;
  public filterQuery = '';


  noData: boolean = true;

  private itemId: number;

  constructor(
    private activityBoxService: ActivityBoxService,
    private aircraftPartsMainFormService: AircraftPartsMainFormService,
    private partsService: PartsService,
    private lineItemsService: LineItemsService,
    private partNumDataFilterPipe: DataFilterPipe,
    private router: Router,
    private excelService: ExcelService,
    private advancedSearchService: AdvancedSearchService,
  ) { }

  ngOnInit() {
    this.feedDataTable();
  }

  private feedDataTable() {

    this.noData = false;
    this.advancedSearchService.getAllLineItems()
      .then(
        (data: any) => {
          if (data[0]) {
            this.columns = Object.keys(data[0]);
            setTimeout(() => {
              this.data = [...data];
              this.dataVal = [...data];
            }, 1000);
          } else {
            this.noData = true;
          }
        }, // success path
        error => this.error = error // error path
      );
  }


  public onSearchChange(event) {
    this.dataVal = this.partNumDataFilterPipe.transform(this.data, event);
  }

  public onSearchClear() {
    this.filterQuery = null;
    this.dataVal = this.partNumDataFilterPipe.transform(this.data, null);
  }

  public onExport() {
    this.excelService.exportAsExcelFile(this.dataVal, 'Stock Items');
  }

  public onExit() {
    this.advancedSearchService.stockItemId = null;
    this.advancedSearchService.stockItemInitPartNum = null;
    this.advancedSearchService.partId = null;
    this.advancedSearchService.partSerialOrBatch = null;
    this.advancedSearchService.lineItemId = null;
    this.advancedSearchService.lineItemBin = null;

    this.advancedSearchService.isAdvancedSearchPanelActive.next(false);
  }

  public onPickLineItem(stockItemId, componentType, stockItemInitPartNum, partId, partSerialOrBatch, lineItemId, lineItemBin) {
    this.advancedSearchService.stockItemId = stockItemId;
    this.advancedSearchService.stockItemInitPartNum = stockItemInitPartNum;
    this.advancedSearchService.partId = partId;

    this.advancedSearchService.partSerialOrBatch = partSerialOrBatch;

    this.advancedSearchService.lineItemId = lineItemId;
    this.advancedSearchService.lineItemBin = lineItemBin;

    this.advancedSearchService.isAdvancedSearchPanelActive.next(false);
  }


}
