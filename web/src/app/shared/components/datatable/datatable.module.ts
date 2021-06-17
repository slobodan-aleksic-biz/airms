import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

// Toastr
import { ToasterModule } from 'angular2-toaster/angular2-toaster';

// DataTable
import { DataTableModule } from 'angular2-datatable';
import { DataFilterPipe } from './datafilterpipe';
import { FormsModule } from '@angular/forms';

import { DataTableComponent } from './datatable.component';
import { UnderscorelessPipe } from '../../pipes/underscorlesspipe';
import { RouterModule } from '@angular/router';

import { ModalModule } from 'ngx-bootstrap/modal';

//
@NgModule({
  imports: [
    CommonModule,
    RouterModule,
    DataTableModule,
    FormsModule,
    ToasterModule,
    ModalModule.forRoot()
  ],
  declarations: [
    DataTableComponent,
    DataFilterPipe,
    UnderscorelessPipe
  ],
  exports: [
    DataTableComponent
  ],
})
export class DatatableInitModule { }
