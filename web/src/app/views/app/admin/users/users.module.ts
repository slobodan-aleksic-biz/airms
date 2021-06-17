import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { UsersComponent } from './users.component';

// Routing
import { UsersRoutingModule } from './users-routing.module';

import { DatatableInitModule } from '../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule } from '@angular/forms';
import { UsersService } from './users.service';

import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

// Ng2-select
import { SelectModule } from 'ng-select';
import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    UsersRoutingModule,
    CommonModule,
    DatatableInitModule,
    ReactiveFormsModule,
    ToasterModule,
    SelectModule,
  ],
  declarations: [
    UsersComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    UsersService,
    ToasterService
  ]
})
export class UsersModule { }
