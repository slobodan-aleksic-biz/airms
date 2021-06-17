import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { StatesComponent } from './states.component';

// Routing
import { StatesRoutingModule } from './states-routing.module';

import { DatatableInitModule } from '../../../../../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { StatesService } from './states.service';

import { SelectModule } from 'ng-select';
import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    StatesRoutingModule,
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    SelectModule,
    DatatableInitModule,
    ToasterModule,
  ],
  declarations: [
    StatesComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    StatesService,
    ToasterService
  ]
})
export class StatesModule { }
