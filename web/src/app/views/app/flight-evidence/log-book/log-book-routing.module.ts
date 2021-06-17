import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { LogBookComponent } from './log-book.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';
import { AuthGuard } from '../../../../auth/auth.guard';
import { DashboardComponent } from '../dashboard/dashboard.component';

const routes: Routes = [
  {
    path: '',
    component: LogBookComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Log Book'
    },
    children: [
      {
        path: 'datatable/:id',
        component: DatatableComponent,
        canActivate: [AuthGuard],
      },
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
          title: 'Add or Edit Log Book'
        }
      },
      {
        path: '',
        redirectTo: 'datatable',
        pathMatch: 'full',
      },
      {
        path: '',
        data: {
          title: ''
        },
        children: [
          {
            path: 'flight-routes',
            canActivate: [AuthGuard],
            loadChildren: () => import('./flight-routes/flight-routes.module').then(m => m.FlightRoutesModule)
          },
          {
            path: 'aircrafts',
            canActivate: [AuthGuard],
            loadChildren: () => import('../../shared/aircrafts/aircrafts.module').then(m => m.AircraftsModule)
          },
          {
            path: 'delay-reasons',
            canActivate: [AuthGuard],
            loadChildren: () => import('./delay-reasons/delay-reasons.module').then(m => m.DelayReasonsModule)
          },
        ]
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class LogBookRoutingModule { }
