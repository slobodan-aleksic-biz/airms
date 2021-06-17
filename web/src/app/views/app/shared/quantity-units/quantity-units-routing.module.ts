import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { QuantityUnitsComponent } from './quantity-units.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';

const routes: Routes = [
  {
    path: '',
    component: QuantityUnitsComponent,
    data: {
      title: 'Quantity Units'
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
          title: 'Add or Edit Quantity Unit'
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
export class QuantityUnitsRoutingModule {}
