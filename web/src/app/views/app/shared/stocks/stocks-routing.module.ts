import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { StocksComponent } from './stocks.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';

const routes: Routes = [
  {
    path: '',
    component: StocksComponent,
    data: {
      title: 'Stocks'
    },
    children: [
      {
        path: 'datatable',
        component: DatatableComponent,
      },
      {
        path: ':id/create-update',
        component: CreateUpdateComponent,
        data: {
          title: 'Add or Edit Stock'
        }
      },
      {
        path: '',
        redirectTo: 'datatable',
        pathMatch: 'full',
      },
    ]
  },

];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class StocksRoutingModule {}
