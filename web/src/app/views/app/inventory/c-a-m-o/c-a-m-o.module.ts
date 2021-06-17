import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


// Routing
import { RouterModule } from '@angular/router';

import { CAMORoutingModule } from './c-a-m-o-routing.module';
import { CAMOComponent } from './c-a-m-o.component';

//
@NgModule({
  imports: [
    CAMORoutingModule,
    RouterModule
  ],
  declarations: [
    CAMOComponent,
  ],
})
export class CamoModule { }
