import { Component, OnInit, ViewEncapsulation, OnDestroy, ViewChild } from '@angular/core';
import { BreadcrumbMenuService } from '../../../../../../shared/services/breadcrumb-menu-service.service';
import { ActivityBoxService } from '../../../../../../shared/components/activity-box/activity-box-service.service';
import { Router } from '@angular/router';
import { DataFilterPipe } from '../../../../../../shared/components/datatable/datafilterpipe';
import { UnderscorelessPipe } from '../../../../../../shared/pipes/underscorlesspipe';
import { ExcelService } from '../../../../../../shared/services/excel-service.service';
import { Subscribable, Subscription } from 'rxjs';
import { PartsService } from './parts/parts.service';
import { ModalDirective } from 'ngx-bootstrap';
import { AdvancedSearchService } from './advanced-search/advanced-search.service';
import { ToasterConfig, ToasterService } from 'angular2-toaster';
import { CreateUpdateStockItemComponent } from '../create-update-stock-item/create-update-stock-item.component';
import { AircraftPartsMainFormService } from './aircraft-parts-main-form.service';

@Component({
  templateUrl: 'aircraft-parts-main-form.component.html',
  // styleUrls: ['../../../../../../scss/vendors/toastr/toastr.scss'],
  // encapsulation: ViewEncapsulation.None,
  providers: [
    DataFilterPipe,
    UnderscorelessPipe,
  ],
})
export class AircraftPartsMainFormComponent implements OnInit, OnDestroy {

  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  error: any;
  columns: Array<any>;
  public data: any;
  public dataVal: any;
  public filterQuery = '';

  public title = '';

  @ViewChild(CreateUpdateStockItemComponent, { static: false }) public createUpdateStockItemComponent: CreateUpdateStockItemComponent;

  @ViewChild('stockItemModal', { static: false }) public stockItemModal: ModalDirective;
  @ViewChild('dangerModal', { static: false }) public dangerModal: ModalDirective;

  noData: boolean = true;

  public stockItemId: string;
  public stockItem: any;
  public componentType: string;
  public isShelfLifeApplicable: boolean;

  private isAdvancedSearchPanelActiveSubscription: Subscription;

  constructor(
    private breadcrumbMenuService: BreadcrumbMenuService,
    private activityBoxService: ActivityBoxService,
    private aircraftPartsMainFormService: AircraftPartsMainFormService,
    private advancedSearchService: AdvancedSearchService,
    private partNumDataFilterPipe: DataFilterPipe,
    private router: Router,
    private excelService: ExcelService,
    private partsService: PartsService,
    private toasterService: ToasterService
  ) { }

  ngOnInit() {
    this.breadcrumbMenu();

    this.advancedSearchService.stockItemId = null;
    this.advancedSearchService.stockItemInitPartNum = null;
    this.advancedSearchService.partId = null;
    this.advancedSearchService.partSerialOrBatch = null;
    this.advancedSearchService.lineItemId = null;
    this.advancedSearchService.lineItemBin = null;

    this.isAdvancedSearchPanelActiveSubscription = this.advancedSearchService.isAdvancedSearchPanelActive
      .subscribe(
        (isActive: boolean) => {
          this.advancedSearchPanel = isActive;
          this.onStockItem(this.advancedSearchService.stockItemId);
          setTimeout(
            () => {
              this.filterQuery = this.advancedSearchService.stockItemInitPartNum;
              this.onPartNumSearchChange(this.advancedSearchService.stockItemInitPartNum);
            }, 500
          );
        }
      );
    this.feedDataTable();
  }

  private feedDataTable() {

    this.noData = false;
    this.aircraftPartsMainFormService.getStockItems()
      .then(
        (data: any) => {
          if (data[0]) {
            this.columns = Object.keys(data[0]);
            setTimeout(() => {
              this.data = [...data];
              this.dataVal = [...data];
            }, 300);
          } else {
            this.noData = true;
          }
        }, // success path
        error => this.error = error // error path
      );
  }


  public onPartNumSearchChange(event) {
    this.filterQuery = event;
    this.dataVal = this.partNumDataFilterPipe.transform(this.data, event);
  }

  public onSearchClear() {
    this.filterQuery = null;
    this.dataVal = this.partNumDataFilterPipe.transform(this.data, null);
  }

  public onPartNumExport() {
    this.excelService.exportAsExcelFile(this.dataVal, 'Stock Items');
  }


  public onStockItem(stockItemId: string, fromBtn: boolean = false) {
    this.stockItemId = null;
    if (fromBtn) {
      this.advancedSearchService.partId = null;
      this.advancedSearchService.partSerialOrBatch = null;
    }
    setTimeout(async () => {
      this.stockItemId = stockItemId;
      if(this.stockItemId) {
        await this.aircraftPartsMainFormService.findStockItemById(this.stockItemId)
          .then((stockItem) => {
            this.stockItem = stockItem;
          });
      }
    }, 100);
  }

  advancedSearchPanel: boolean = false;
  public onAdvancedSearch(e) {
    e.preventDefault();
    this.advancedSearchPanel = true;
  }

  onCreatePartNum(e) {
    e.preventDefault();
    this.title = "Create Part Num";
    this.stockItemId = null;
    this.stockItemModal.show();
  }

  onStockItemEdit(e, stockItemId) {
    e.preventDefault();
    this.stockItemId = stockItemId;
    this.title = "Edit Part Num";
    this.createUpdateStockItemComponent.init();
    this.stockItemModal.show();
  }

  onStockItemRemove(e, stockItemId) {
    e.preventDefault();
    this.dangerModal.show();
    this.stockItemId = stockItemId;
  }


  onSave(partNum) {
    if (partNum) {
      this.stockItemModal.hide();
      this.feedDataTable();
      setTimeout(() => {
        this.aircraftPartsMainFormService.findStockItemByPartNum(partNum)
          .then(
            (stockItem: any) => {
              this.onStockItem(stockItem.id, true);
              this.onPartNumSearchChange(partNum);
            });
      }, 500);
    }
  }

  onCancel(e) {
    if (e) {
      this.stockItemModal.hide();
    }
  }


  public deleteAction() {
    this.dangerModal.hide();
    if (this.stockItemId) {
      this.aircraftPartsMainFormService.removeItem(this.stockItemId)
        .subscribe(
          (data: any) => {

            this.data = null;
            this.dataVal = null;

            this.feedDataTable();

            this.toasterService.pop('error', data.message, 'The action will be tracked!');
          }, // success path
          async error => {
            let msg = 'Integrity constraint violation. Cannot delete or update a parent row: a foreign constraint fails!';
            this.toasterService.pop('error', 'Error', msg);
            this.error = error; // error path
            // this.toasterService.pop('error', 'Error', this.error);
          }
        );

      this.stockItemId = null;
    }
  }


  private breadcrumbMenu() {
    this.breadcrumbMenuService.settingsItems.next([
      {
        name: 'ATA Chapters',
        path: './c-a-m-o/aircraft-parts/ata-chapters/datatable',
        icon: 'fa fa-paper-plane-o',
      },
      {
        name: '--',
        path: '--',
        icon: '',
      },
      {
        name: 'Aircrafts',
        path: './c-a-m-o/aircraft-parts/aircrafts',
        icon: 'icon-plane',
      },
      {
        name: 'Owners',
        path: './c-a-m-o/aircraft-parts/owners',
        icon: 'icon-plane',
      },
      {
        name: '--',
        path: '--',
        icon: '',
      },
      {
        name: 'Stocks',
        path: './c-a-m-o/aircraft-parts/stocks',
        icon: 'icon-plane',
      },
      {
        name: 'Quantity Units',
        path: './c-a-m-o/aircraft-parts/quantity-units',
        icon: 'icon-plane',
      },
      {
        name: '--',
        path: '--',
        icon: '',
      },
      {
        name: 'Shops',
        path: './c-a-m-o/aircraft-parts/shops',
        icon: 'icon-plane',
      },
    ]);
  }

  ngOnDestroy() {
    this.isAdvancedSearchPanelActiveSubscription.unsubscribe();
  }

}
