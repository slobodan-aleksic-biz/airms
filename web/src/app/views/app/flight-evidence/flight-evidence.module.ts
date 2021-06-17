import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { FlightEvidenceComponent } from './flight-evidence.component';

// Routing
import { FlightEvidenceRoutingModule } from './flight-evidence-routing.module';

import { RouterModule } from '@angular/router';

//
@NgModule({
  imports: [
    FlightEvidenceRoutingModule,
    RouterModule
  ],
  declarations: [
    FlightEvidenceComponent,
  ],
})
export class FlightEvidenceModule { }
