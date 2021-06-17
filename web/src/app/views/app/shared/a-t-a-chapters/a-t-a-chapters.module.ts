import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


import { ATAChaptersComponent } from './a-t-a-chapters.component';

// Routing
import { ATAChaptersRoutingModule } from './a-t-a-chapters-routing.module';

import { DatatableInitModule } from '../../../../shared/components/datatable/datatable.module';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { ReactiveFormsModule } from '@angular/forms';
import { ATAChaptersService } from './a-t-a-chapters.service';

import { ToasterModule, ToasterService } from 'angular2-toaster/angular2-toaster';

import { DatatableComponent } from './datatable/datatable.component';

//
@NgModule({
  imports: [
    ATAChaptersRoutingModule,
    CommonModule,
    DatatableInitModule,
    ReactiveFormsModule,
    ToasterModule,
  ],
  declarations: [
    ATAChaptersComponent,
    CreateUpdateComponent,
    DatatableComponent,
  ],
  providers: [
    ATAChaptersService,
    ToasterService
  ]
})
export class ATAChaptersModule { }
