import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { LogBookComponent } from './log-book.component';

// Routing
import { LogBookRoutingModule } from './log-book-routing.module';

// import { DatatableInitModule } from './datatable/datatable/datatable.module';
import { DatatableInitModule } from '../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { LogBookService } from './log-book.service';

import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

// Ng2-select
import { SelectModule } from 'ng-select';

// Timepicker
import { TimepickerModule } from 'ngx-bootstrap';

// Datepicker
import { BsDatepickerModule } from 'ngx-bootstrap/datepicker';

//
@NgModule({
  imports: [
    LogBookRoutingModule,
    CommonModule,
    DatatableInitModule,
    FormsModule,
    ReactiveFormsModule,
    ToasterModule,
    TimepickerModule.forRoot(),
    BsDatepickerModule.forRoot(),
    SelectModule,
  ],
  declarations: [
    LogBookComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    LogBookService,
    ToasterService
  ]
})
export class LogBookModule { }
