import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { StocksComponent } from './stocks.component';

// Routing
import { StocksRoutingModule } from './stocks-routing.module';

import { DatatableInitModule } from '../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule } from '@angular/forms';
import { StocksService } from './stocks.service';

import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';
import { SelectModule } from 'ng-select';

//
@NgModule({
  imports: [
    StocksRoutingModule,
    CommonModule,
    DatatableInitModule,
    ReactiveFormsModule,
    ToasterModule,
    SelectModule,
  ],
  declarations: [
    StocksComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    StocksService,
    ToasterService
  ]
})
export class StocksModule { }
