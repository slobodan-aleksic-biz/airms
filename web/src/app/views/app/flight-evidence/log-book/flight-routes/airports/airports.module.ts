import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { AirportsComponent } from './airports.component';

// Routing
import { AirportsRoutingModule } from './airports-routing.module';

import { DatatableInitModule } from '../../../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { AirportsService } from './airports.service';

import { SelectModule } from 'ng-select';
import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    AirportsRoutingModule,
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    SelectModule,
    DatatableInitModule,
    ToasterModule,
  ],
  declarations: [
    AirportsComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    AirportsService,
    ToasterService
  ]
})
export class AirportsModule { }
