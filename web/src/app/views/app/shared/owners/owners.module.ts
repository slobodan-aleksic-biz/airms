import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { OwnersComponent } from './owners.component';

// Routing
import { OwnersRoutingModule } from './owners-routing.module';

import { DatatableInitModule } from '../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule } from '@angular/forms';
import { OwnersService } from './owners.service';

import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    OwnersRoutingModule,
    CommonModule,
    DatatableInitModule,
    ReactiveFormsModule,
    ToasterModule,
  ],
  declarations: [
    OwnersComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    OwnersService,
    ToasterService
  ]
})
export class OwnersModule { }
