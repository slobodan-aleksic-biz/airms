import { Component, OnInit, ViewEncapsulation, Input, OnDestroy, ViewChild } from '@angular/core';
import { BreadcrumbMenuService } from '../../../../../../../shared/services/breadcrumb-menu-service.service';
import { ActivityBoxService } from '../../../../../../../shared/components/activity-box/activity-box-service.service';
import { PartsService } from './parts.service';
import { Router } from '@angular/router';
import { DataFilterPipe } from '../../../../../../../shared/components/datatable/datafilterpipe';
import { UnderscorelessPipe } from '../../../../../../../shared/pipes/underscorlesspipe';
import { ExcelService } from '../../../../../../../shared/services/excel-service.service';
import { Subscription } from 'rxjs';
import { AdvancedSearchService } from '../advanced-search/advanced-search.service';
import { ModalDirective } from 'ngx-bootstrap';
import { CreateUpdatePartComponent } from './create-update-part/create-update-part.component';
import { ToasterService } from 'angular2-toaster';
import { AircraftPartsMainFormService } from '../aircraft-parts-main-form.service';

@Component({
  selector: 'app-parts',
  templateUrl: 'parts.component.html',
  providers: [
    DataFilterPipe,
    UnderscorelessPipe,
  ],
})
export class PartsComponent implements OnInit, OnDestroy {

  error: any;
  columns: Array<any>;
  public data: any;
  public dataVal: any;
  public filterQuery = '';

  public title;

  noData: boolean = true;

  private itemId: number;

  @Input('stockItemId')
  stockItemId: string;

  @Input('stockItem')
  stockItem: any;

  public partId;
  public part: any;

  private isAdvancedSearchPanelActiveSubscription: Subscription;

  @ViewChild(CreateUpdatePartComponent, { static: false }) public createUpdatePartComponent: CreateUpdatePartComponent;

  @ViewChild('partModal', { static: false }) public partModal: ModalDirective;

  @ViewChild('dangerModal', { static: false }) public dangerModal: ModalDirective;

  constructor(
    private breadcrumbMenuService: BreadcrumbMenuService,
    private activityBoxService: ActivityBoxService,
    private aircraftPartsMainFormService: AircraftPartsMainFormService,
    private partsService: PartsService,
    private advancedSearchService: AdvancedSearchService,
    private serialBatchNumDataFilterPipe: DataFilterPipe,
    private router: Router,
    private excelService: ExcelService,
    private toasterService: ToasterService,
  ) { }

  async ngOnInit() {
    await this.feedDataTable();

    this.isAdvancedSearchPanelActiveSubscription = this.advancedSearchService.isAdvancedSearchPanelActive
      .subscribe(
        (isActive: boolean) => {
          this.onPart(this.advancedSearchService.partId);
          setTimeout(
            () => {
              this.filterQuery = this.advancedSearchService.partSerialOrBatch;
              this.onSerialBatchNumSearchChange(this.advancedSearchService.partSerialOrBatch);
            }, 300
          );

        }
      );

  }

  private async feedDataTable() {

    this.noData = false;
    await this.partsService.getParts(parseInt(this.stockItemId))
      .then(
        (data: any) => {
          if (data[0]) {
            this.columns = Object.keys(data[0]);
            setTimeout(() => {
              this.data = [...data];
              this.dataVal = [...data];
            }, 200);
          } else {
            this.noData = true;
          }
        }, // success path
        error => this.error = error // error path
      );
  }

  public onSerialBatchNumSearchChange(event) {
    this.filterQuery = event;
    this.dataVal = this.serialBatchNumDataFilterPipe.transform(this.data, event);
  }

  public onSearchClear() {
    this.filterQuery = null;
    this.dataVal = this.serialBatchNumDataFilterPipe.transform(this.data, null);
  }

  public onPartNumExport() {
    this.excelService.exportAsExcelFile(this.dataVal, 'Parts');
  }


  public onPart(partId: string, fromBtn: boolean = false) {
    this.partId = null;
    if (fromBtn) {
      // this.advancedSearchService.lineItemId = null;
      this.advancedSearchService.lineItemBin = null;
    }
    setTimeout(() => {
      this.partId = partId;
      if( this.partId) {
        this.partsService.findPartById(this.stockItem.id, this.partId)
          .then((part: any) => {
            this.part = part;
          });
      }
    }, 200);
  }


  onCreatePart(e) {
    e.preventDefault();
    this.title = "Create " + (this.stockItem.component_type).replace('_', ' ') + " Component (init p/n:" + this.stockItem.init_part_num + ")";
    this.partId = null;
    this.partModal.show();
  }

  onPartEdit(e, partId) {
    e.preventDefault();
    this.partId = partId;
    this.title = "Edit " + (this.stockItem.component_type).replace('_', ' ') + " Component (init p/n:" + this.stockItem.init_part_num + ")";
    this.createUpdatePartComponent.init();
    this.partModal.show();
  }

  onPartRemove(e, partId) {
    e.preventDefault();
    this.dangerModal.show();
    this.partId = partId;
  }



  onSave(partSerialOrBatch) {
    if (partSerialOrBatch) {
      this.partModal.hide();
      this.feedDataTable();
      setTimeout(() => {
        this.partsService.findPartBySerialOrBatchNum(this.stockItemId, partSerialOrBatch)
          .then(
            (part: any) => {
              this.onPart(part.id, true);
              this.onSerialBatchNumSearchChange(partSerialOrBatch);
            });
      }, 500);
    }
  }

  onCancel(e) {
    if (e) {
      this.partModal.hide();
    }
  }

  public deleteAction() {
    this.dangerModal.hide();
    if (this.partId) {
      this.partsService.removeItem(this.stockItemId, this.partId)
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

      this.partId = null;
    }
  }


  ngOnDestroy() {
    this.isAdvancedSearchPanelActiveSubscription.unsubscribe();
  }

}
