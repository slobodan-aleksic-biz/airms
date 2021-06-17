import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { AircraftTypesComponent } from './aircraft-types.component';

// Routing
import { AircraftTypesRoutingModule } from './aircraft-types-routing.module';

import { DatatableInitModule } from '../../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { AircraftTypesService } from './aircraft-types.service';

import { SelectModule } from 'ng-select';
import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    AircraftTypesRoutingModule,
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    SelectModule,
    DatatableInitModule,
    ToasterModule,
  ],
  declarations: [
    AircraftTypesComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    AircraftTypesService,
    ToasterService
  ]
})
export class AircraftTypesModule { }
