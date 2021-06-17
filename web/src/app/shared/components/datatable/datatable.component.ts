import { Component, Input, OnInit, ViewEncapsulation, ViewChild, Output, EventEmitter, OnDestroy } from '@angular/core';
import { TableData, DataTableService } from './datatable.service';
import { Router, ActivatedRoute } from '@angular/router';
import { ToasterModule, ToasterService, ToasterConfig } from 'angular2-toaster/angular2-toaster';

import { ModalDirective } from 'ngx-bootstrap/modal';
import { DataFilterPipe } from './datafilterpipe';
import { ExcelService } from '../../services/excel-service.service';
import { Subscription } from 'rxjs';
import { AuthService } from '../../../auth/auth.service';

@Component({
  selector: 'airms-component-datatable',
  templateUrl: 'datatable.component.html',
  styleUrls: ['../../../../scss/vendors/toastr/toastr.scss'],
  encapsulation: ViewEncapsulation.None,
  providers: [DataTableService, ToasterService, DataFilterPipe],
})
export class DataTableComponent implements OnInit {
  error: any;
  columns: Array<any>;
  public data: TableData;
  public dataVal: TableData;
  public filterQuery = '';

  private itemId: number;

  @ViewChild('dangerModal', { static: false }) public dangerModal: ModalDirective;

  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000
  });

  @Input('title') title: string;
  singularTitle: string;

  @Input('dataUrl') dataUrl: string;

  @Output('tableEvent') tableEvent = new EventEmitter<boolean>();

  noData: boolean = false;

  constructor(
    private dataTableService: DataTableService,
    private toasterService: ToasterService,
    public router: Router,
    public activeRoute: ActivatedRoute,
    private dataFilterPipe: DataFilterPipe,
    private excelService: ExcelService,
    private authService: AuthService,
  ) { }

  ngOnInit(): void {
    setTimeout(() => {
      // this.noData = true;
    }, 3000);
    this.singularTitle = (this.title.substr(this.title.length - 1).toLocaleLowerCase() === 's' ? this.title.substr(0, this.title.length - 1) : this.title).toLocaleLowerCase();
    this.feedDataTable();
    // setTimeout(() => {
    //   this.feedDataTable();
    // }, 10000);
  }

  private feedDataTable() {

    this.noData = false;
    this.dataTableService.setDataUrl(this.dataUrl);
    this.dataTableService.getData()
      .subscribe(
        (data: TableData) => {
          if(data[0]) {
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

  public toInt(num: string) {
    return +num;
  }

  public sortByWordLength = (a: any) => {
    return a.name.length;
  }

  public getDate(regDate: string) {
    const date = new Date(regDate);
    return date.toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: '2-digit' });
  }

  public onAdd() {
    this.router.navigate(['../new/create-update'], { relativeTo: this.activeRoute });
  }

  public onEdit(id: number) {
    this.router.navigate(['../' + id + '/create-update'], { relativeTo: this.activeRoute });
  }

  public onDelete(id: number) {
    this.dangerModal.show();
    this.itemId = id;
  }

  public deleteAction() {
    this.dangerModal.hide();
    if (this.itemId) {
      this.dataTableService.removeItem(this.itemId)
        .subscribe(
          (data: any) => {

            this.data = null;
            this.dataVal = null;

            this.dataTableService.getData()
              .subscribe(
                (data: TableData) => {

                  this.columns = Object.keys(data[0]);

                  setTimeout(() => {
                    this.data = [...data];
                    this.dataVal = [...data];
                    this.tableEvent.emit(true);
                  }, 150);
                }, // success path
                error => this.error = error // error path
              );

            this.toasterService.pop('error',  data.message, 'The action will be tracked!');
          }, // success path
          async error => {
              let msg = 'Integrity constraint violation. Cannot delete or update a parent row: a foreign constraint fails!';
              this.toasterService.pop('error', 'Error', msg);
            this.error = error; // error path
            // this.toasterService.pop('error', 'Error', this.error);
          }
        );

      this.itemId = null;
    }
  }

  public onSearchChange(event) {
    this.dataVal = this.dataFilterPipe.transform(this.data, event);
  }

  public onExport() {
    this.excelService.exportAsExcelFile(this.dataVal, this.title);
  }
}
