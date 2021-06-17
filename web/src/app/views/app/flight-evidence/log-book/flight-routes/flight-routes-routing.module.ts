import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { FlightRoutesComponent } from './flight-routes.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';
import { AuthGuard } from '../../../../../auth/auth.guard';

const routes: Routes = [
  {
    path: '',
    component: FlightRoutesComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Flight Routes'
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
          title: 'Add or Edit Flight Routes'
        }
      },
      {
        path: 'airports',
        canActivate: [AuthGuard],
        loadChildren: () => import('./airports/airports.module').then(m => m.AirportsModule)
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
export class FlightRoutesRoutingModule { }
