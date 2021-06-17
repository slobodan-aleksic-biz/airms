import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { FlightRoutesComponent } from './flight-routes.component';

// Routing
import { FlightRoutesRoutingModule } from './flight-routes-routing.module';

import { DatatableInitModule } from '../../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { FlightRoutesService } from './flight-routes.service';

import { SelectModule } from 'ng-select';
import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    FlightRoutesRoutingModule,
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    SelectModule,
    DatatableInitModule,
    ToasterModule,
  ],
  declarations: [
    FlightRoutesComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    FlightRoutesService,
    ToasterService
  ]
})
export class FlightRoutesModule { }
