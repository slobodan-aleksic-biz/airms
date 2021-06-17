import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { InventoryComponent } from './inventory.component';

// Routing
import { InventoryRoutingModule } from './inventory-routing.module';

import { RouterModule } from '@angular/router';

//
@NgModule({
  imports: [
    InventoryRoutingModule,
    RouterModule
  ],
  declarations: [
    InventoryComponent,
  ],
})
export class InventoryModule { }
