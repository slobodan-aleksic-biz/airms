import { NgModule } from '@angular/core';
import { ActivityBoxComponent } from './activity-box.component';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { ActivityBoxService } from './activity-box-service.service';

//
@NgModule({
  imports: [
    CommonModule,
    RouterModule
  ],
  declarations: [
    ActivityBoxComponent
  ],
  exports: [
    ActivityBoxComponent
  ],
  providers: [
    ActivityBoxService
  ]
})
export class ActivityBoxModule { }
