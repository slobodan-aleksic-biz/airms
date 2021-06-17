import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { AircraftsComponent } from './aircrafts.component';

// Routing
import { AircraftsRoutingModule } from './aircrafts-routing.module';

import { DatatableInitModule } from '../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { AircraftsService } from './aircrafts.service';

import { SelectModule } from 'ng-select';
import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    AircraftsRoutingModule,
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    SelectModule,
    DatatableInitModule,
    ToasterModule,
  ],
  declarations: [
    AircraftsComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    AircraftsService,
    ToasterService
  ]
})
export class AircraftsModule { }
