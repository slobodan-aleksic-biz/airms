import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { DelayTypesComponent } from './delay-types.component';

// Routing
import { DelayTypesRoutingModule } from './delay-types-routing.module';

import { DatatableInitModule } from '../../../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { DelayTypesService } from './delay-types.service';

import { SelectModule } from 'ng-select';
import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    DelayTypesRoutingModule,
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    SelectModule,
    DatatableInitModule,
    ToasterModule,
  ],
  declarations: [
    DelayTypesComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    DelayTypesService,
    ToasterService
  ]
})
export class DelayTypesModule { }
