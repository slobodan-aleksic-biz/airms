import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { QuantityUnitsComponent } from './quantity-units.component';

// Routing
import { QuantityUnitsRoutingModule } from './quantity-units-routing.module';

import { DatatableInitModule } from '../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule } from '@angular/forms';
import { QuantityUnitsService } from './quantity-units.service';

import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';
import { SelectModule } from 'ng-select';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    QuantityUnitsRoutingModule,
    CommonModule,
    DatatableInitModule,
    ReactiveFormsModule,
    ToasterModule,
    SelectModule,
  ],
  declarations: [
    QuantityUnitsComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    QuantityUnitsService,
    ToasterService
  ]
})
export class QuantityUnitsModule { }
