import { Component, OnInit, ViewEncapsulation, Input, OnDestroy, ViewChild } from '@angular/core';
import { BreadcrumbMenuService } from '../../../../../../../../shared/services/breadcrumb-menu-service.service';
import { ActivityBoxService } from '../../../../../../../../shared/components/activity-box/activity-box-service.service';
import { LineItemsService } from './line-items.service';
import { Router } from '@angular/router';
import { DataFilterPipe } from '../../../../../../../../shared/components/datatable/datafilterpipe';
import { UnderscorelessPipe } from '../../../../../../../../shared/pipes/underscorlesspipe';
import { ExcelService } from '../../../../../../../../shared/services/excel-service.service';
import { DomSanitizer } from '@angular/platform-browser';
import { Subscription } from 'rxjs';
import { AdvancedSearchService } from '../../advanced-search/advanced-search.service';
import { ModalDirective } from 'ngx-bootstrap';
import { CreateUpdateLineItemComponent } from './create-update-line-item/create-update-line-item.component';
import { ToasterService } from 'angular2-toaster';
import { setTime } from 'ngx-bootstrap/chronos/utils/date-setters';

@Component({
  selector: 'app-line-items',
  templateUrl: 'line-items.component.html',
  styleUrls: ['line-items.component.scss'],
  providers: [
    DataFilterPipe,
    UnderscorelessPipe,
  ],
})
export class LineItemsComponent implements OnInit, OnDestroy {

  error: any;
  columns: Array<any>;
  public data: any;
  public dataVal: any;
  public filterQuery = '';

  noData: boolean = true;
  noInfoData: boolean = true;

  noQRData: boolean = true;
  qrSrc: any;

  action: string;


  private itemId: number;

  @Input('stockItemId')
  stockItemId: number;

  @Input('stockItem')
  stockItem: any;

  @Input('partId')
  partId: number;

  @Input('part')
  part: any;

  @ViewChild('dangerModal', { static: false }) public dangerModal: ModalDirective;

  @ViewChild('lineItemModal', { static: false }) public lineItemModal: ModalDirective;

  @ViewChild(CreateUpdateLineItemComponent, { static: false }) public createUpdateLineItemComponent: CreateUpdateLineItemComponent;

  public lastLineItemId;

  public lineItem: any;
  public firstLineItem: any;
  public lastLineItem: any;

  public initPartNum;
  public partNum;
  public serialNum;
  public batchNum;

  public title;
  public name;


  public quantityAlarm;
  public quantity;

  public componentNote;


  public isShelfLifeOk = 2;
  public shelfLife;
  public shelfLifeAlarm;


  public componentType;
  public aircraftType;
  public ataChapterCode;
  public ataChapterName;
  public owner;


  public timeSinceNew;
  public cyclesSinceNew;
  public daysSinceNew;

  public timeSinceOverhaul;
  public cyclesSinceOverhaul;
  public daysSinceOverhaul;

  public lineItemNote;
  public positionTotalQtyColumn;


  private isAdvancedSearchPanelActiveSubscription: Subscription;

  constructor(
    private breadcrumbMenuService: BreadcrumbMenuService,
    private activityBoxService: ActivityBoxService,
    private lineItemsService: LineItemsService,
    private advancedSearchService: AdvancedSearchService,
    private lineItemNumDataFilterPipe: DataFilterPipe,
    private router: Router,
    private excelService: ExcelService,
    private domSanitizer: DomSanitizer,
    private toasterService: ToasterService,
  ) { }

  async ngOnInit() {

    this.feedInfo();
    await this.feedDataTable();

    await this.fetchLastLineItem(0);

    if (this.stockItem.component_type === 'expendable') {
      await this.lineItemsService.getFirstLineItemInfo(this.stockItemId, this.partId)
        .then(
          (data: any) => {
            if (data) {
              this.firstLineItem = data;
            }
          }, // success path
          error => this.error = error // error path
        );
    }




    this.isAdvancedSearchPanelActiveSubscription = this.advancedSearchService.isAdvancedSearchPanelActive
      .subscribe(
        (isActive: boolean) => {
          this.onLineItem(this.advancedSearchService.lineItemId);
          setTimeout(
            () => {
              this.filterQuery = this.advancedSearchService.lineItemBin;
              this.onLineItemNumSearchChange(this.advancedSearchService.lineItemBin);
            }, 700
          );

        }
      );

  }


  private async fetchLastLineItem(lineItemId) {

    await this.lineItemsService.getLastLineItemInfo(this.stockItemId, this.partId, lineItemId)
      .then(
        (data: any) => {
          if (data) {
            this.lastLineItem = data;
            this.lastLineItemId = data['id'];
            if (lineItemId === 0) {
              this.onLineItem(data['id']);
              this.lineItemId = null;
              setTimeout(
                () => {
                  this.filterQuery = data['bin'];
                  this.onLineItemNumSearchChange(data['bin']);
                }, 700
              );
            } else {
              this.onLineItem(this.lineItem['id']);
              this.lineItemId = lineItemId;
              setTimeout(
                () => {
                  this.filterQuery = this.lineItem['bin'];
                  this.onLineItemNumSearchChange(this.lineItem['bin']);
                }, 700
              );
            }
          }
        }, // success path
        error => this.error = error // error path
      );
  }


  private async feedInfo() {

    this.noInfoData = false;
    await this.lineItemsService.getPartInfo(this.stockItemId, this.partId)
      .then(
        (data: any) => {
          if (data) {

            this.initPartNum = data['init_part_num'];
            this.serialNum = data['serial_num'];
            this.batchNum = data['batch_num'];

            this.name = data['name'];

            this.quantityAlarm = data['quantity_alarm'];
            this.componentNote = data['note'];

            this.componentType = data['component_type'];
            this.aircraftType = data['aircraft_type_name'];
            this.ataChapterCode = data['a_t_a_chapter_code'];
            this.ataChapterName = data['a_t_a_chapter_name'];
            this.owner = data['owner_name'];

            this.noInfoData = false;

          } else {
            this.noInfoData = true;
          }
        }, // success path
        error => this.error = error // error path
      );

    this.lineItemsService.getPartQR(this.stockItemId, this.partId)
      .subscribe(
        (data: any) => {

          if (data) {
            this.createImageFromBlob(data);
            this.noQRData = false;
          } else {
            this.noQRData = true;
          }
        }, // success path
        error => this.error = error // error path
      );
  }


  createImageFromBlob(image: Blob) {
    let reader = new FileReader();
    reader.addEventListener("load", () => {
      this.qrSrc = reader.result;
      this.qrSrc = this.domSanitizer.bypassSecurityTrustUrl(this.qrSrc);
    }, false);
    if (image) {
      reader.readAsDataURL(image);
    }
  }

  private feedDataTable() {

    this.noData = false;
    this.lineItemsService.getLineItems(this.stockItemId, this.partId)
      .then(
        (data: any) => {
          if (data[0]) {
            this.columns = Object.keys(data[0]);
            setTimeout(() => {
              this.data = [...data];
              this.dataVal = [...data];
              this.calculateTotal(this.dataVal);
            }, 200);
          } else {
            this.noData = true;
          }
        }, // success path
        error => this.error = error // error path
      );
  }

  public onLineItemNumSearchChange(event) {
    this.filterQuery = event;
    this.dataVal = this.lineItemNumDataFilterPipe.transform(this.data, event);
  }

  public onSearchClear() {
    this.filterQuery = null;
    this.dataVal = this.lineItemNumDataFilterPipe.transform(this.data, null);
  }

  public onLineItemNumExport() {
    this.excelService.exportAsExcelFile(this.dataVal, 'LineItems');
  }

  public lineItemId;
  public onLineItem(lineItemId: string) {
    this.lineItemId = null;
    this.lineItem = null;
    if (lineItemId) {
      setTimeout(() => {
        this.lineItemId = lineItemId;
        this.lineItemsService.getLineItemInfo(this.stockItemId, this.partId, parseInt(this.lineItemId))
          .then(
            (data) => {

              this.timeSinceNew = data['time_since_new_right'];
              this.cyclesSinceNew = data['cycles_since_new_right'];
              this.daysSinceNew = data['days_since_new_right'];

              this.timeSinceOverhaul = data['time_since_overhaul_right'];
              this.cyclesSinceOverhaul = data['cycles_since_overhaul_right'];
              this.daysSinceOverhaul = data['days_since_overhaul_right'];

              this.partNum = data['part_num_left'];

              this.lineItemNote = data['note'];
              this.lineItem = data;
              this.quantity = data['qty_balance_right'];
              this.isShelfLifeOk = data['is_shelf_life_ok'];
              this.shelfLife = data['shelf_life_diff'];
              this.shelfLifeAlarm = data['shelf_life_alarm_right'];
            }
          );
      }, 200);
    }
  }

  totalInputQty: number = 0;
  totalOutputQty: number = 0;
  totalQtyBalance: number = 0;


  private calculateTotal(dataVal: any) {
    this.totalInputQty = 0;
    this.totalOutputQty = 0;
    this.totalQtyBalance = 0;



    dataVal.forEach(
      (res) => {
        this.totalInputQty += parseInt(res.input_qty_right);
        this.totalOutputQty += parseInt(res.output_qty_right);
      }
    );

    this.totalQtyBalance = this.totalInputQty - this.totalOutputQty;

  }

  async onCreateLineItem(e, action) {
    e.preventDefault();

    await this.fetchLastLineItem(0);
    this.action = action;

    setTimeout(() => {
      this.lineItemId = null;
    }, 500);

    this.title = "Create " + (this.stockItem.component_type).replace('_', ' ') + " Component (init p/n:" + this.stockItem.init_part_num + ") - Line Item (" + (this.stockItem.component_type === 'expendable' ? 'B/N: ' + this.part.batch_num : 'S/N: ' + this.part.serial_num) + ")";
    this.lineItemModal.show();
    this.createUpdateLineItemComponent.init(true);
  }


  async onEditLineItem(e, lineItemId, action, lineItem) {
    e.preventDefault();

    await this.fetchLastLineItem(lineItemId);
    this.action = action;

    setTimeout(() => {
      this.lineItemId = lineItemId;
    }, 500);

    this.title = "Edit " + (this.stockItem.component_type).replace('_', ' ') + " Component (init p/n:" + this.stockItem.init_part_num + ") - Line Item (" + (this.stockItem.component_type === 'expendable' ? 'B/N: ' + this.part.batch_num : 'S/N: ' + this.part.serial_num) + ")";
    this.lineItemModal.show();
    this.createUpdateLineItemComponent.init(true);
  }

  async onRemoveLineItem(e, lineItemId) {
    e.preventDefault();
    this.lineItemId = lineItemId;

    this.dangerModal.show();
  }


  async onSave(bin) {
    await this.fetchLastLineItem(0);
    if (bin) {
      this.lineItemModal.hide();
      this.feedDataTable();

      setTimeout(() => {
        this.lineItemsService.findLineItemByBIN(this.stockItemId, this.partId, bin)
          .then(
            async (lineItem: any) => {
              this.onLineItem(lineItem.id);
              this.onLineItemNumSearchChange(bin);
              await this.fetchLastLineItem(0);
            });
      }, 500);
    }
  }

  onCancel(e) {
    if (e) {
      this.lineItemModal.hide();
      this.fetchLastLineItem(0);
    }
  }


  public async deleteAction() {
    this.dangerModal.hide();

    if (this.lineItemId) {
      this.lineItemsService.removeItem(this.stockItemId, this.partId, this.lineItemId)
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

      this.lineItemId = null;
    }
    await this.fetchLastLineItem(0);
  }


  ngOnDestroy() {
    this.isAdvancedSearchPanelActiveSubscription.unsubscribe();
  }


}
