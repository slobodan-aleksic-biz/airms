import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { FlightEvidenceComponent } from './flight-evidence.component';
import { AuthGuard } from '../../../auth/auth.guard';

const routes: Routes = [
  {
    path: '',
    component: FlightEvidenceComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Flight Evidence'
    },
    children: [
      {
        path: 'dashboard',
        canActivate: [AuthGuard],
        loadChildren: () => import('./dashboard/dashboard.module').then(m => m.DashboardModule)
      },
      {
        path: 'log-book',
        canActivate: [AuthGuard],
        loadChildren: () => import('./log-book/log-book.module').then(m => m.LogBookModule)
      },
      {
        path: 'reports',
        canActivate: [AuthGuard],
        loadChildren: () => import('./reports/reports.module').then(m => m.ReportsModule)
      },
      {
        path: '',
        redirectTo: 'dashboard',
        pathMatch: 'full',
      },
    ]
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class FlightEvidenceRoutingModule { }
