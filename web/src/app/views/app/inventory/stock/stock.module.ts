import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';


// Routing
import { RouterModule } from '@angular/router';

import { StockRoutingModule } from './stock-routing.module';
import { StockComponent } from './stock.component';

//
@NgModule({
  imports: [
    StockRoutingModule,
    RouterModule
  ],
  declarations: [
    StockComponent,
  ],
})
export class StockModule { }
