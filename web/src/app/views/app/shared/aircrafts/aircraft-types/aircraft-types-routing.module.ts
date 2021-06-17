import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AircraftTypesComponent } from './aircraft-types.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';
import { AuthGuard } from '../../../../../auth/auth.guard';

const routes: Routes = [
  {
    path: '',
    component: AircraftTypesComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Aircraft Types'
    },
    children: [
      {
        path: 'datatable',
        component: DatatableComponent,
        canActivate: [AuthGuard],
      },
      {
        path: ':id/create-update',
        component: CreateUpdateComponent,
        canActivate: [AuthGuard],
        data: {
          title: 'Add or Edit Aircraft Types'
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
export class AircraftTypesRoutingModule {}
