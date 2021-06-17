import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { DelayReasonsComponent } from './delay-reasons.component';

// Routing
import { DelayReasonsRoutingModule } from './delay-reasons-routing.module';

import { DatatableInitModule } from '../../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { DelayReasonsService } from './delay-reasons.service';

import { SelectModule } from 'ng-select';
import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    DelayReasonsRoutingModule,
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    SelectModule,
    DatatableInitModule,
    ToasterModule,
  ],
  declarations: [
    DelayReasonsComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    DelayReasonsService,
    ToasterService
  ]
})
export class DelayReasonsModule { }
