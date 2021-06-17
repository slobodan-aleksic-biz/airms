import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { CountriesComponent } from './countries.component';

// Routing
import { CountriesRoutingModule } from './countries-routing.module';

import { DatatableInitModule } from '../../../../../../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { CountriesService } from './countries.service';

import { SelectModule } from 'ng-select';
import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    CountriesRoutingModule,
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    SelectModule,
    DatatableInitModule,
    ToasterModule,
  ],
  declarations: [
    CountriesComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    CountriesService,
    ToasterService
  ]
})
export class CountriesModule { }
