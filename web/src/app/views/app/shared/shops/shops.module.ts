import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { ShopsComponent } from './shops.component';

// Routing
import { ShopsRoutingModule } from './shops-routing.module';

import { DatatableInitModule } from '../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule } from '@angular/forms';
import { ShopsService } from './shops.service';

import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';
import { SelectModule } from 'ng-select';

//
@NgModule({
  imports: [
    ShopsRoutingModule,
    CommonModule,
    DatatableInitModule,
    ReactiveFormsModule,
    ToasterModule,
    SelectModule,
  ],
  declarations: [
    ShopsComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    ShopsService,
    ToasterService
  ]
})
export class ShopsModule { }
