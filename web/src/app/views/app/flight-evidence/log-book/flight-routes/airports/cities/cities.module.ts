import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { CitiesComponent } from './cities.component';

// Routing
import { CitiesRoutingModule } from './cities-routing.module';

import { DatatableInitModule } from '../../../../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { CitiesService } from './cities.service';

import { SelectModule } from 'ng-select';
import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    CitiesRoutingModule,
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    SelectModule,
    DatatableInitModule,
    ToasterModule,
  ],
  declarations: [
    CitiesComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    CitiesService,
    ToasterService
  ]
})
export class CitiesModule { }
