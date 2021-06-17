import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ReportsComponent } from './reports.component';
import { AuthGuard } from '../../../../auth/auth.guard';


const routes: Routes = [
  {
    path: '',
    component: ReportsComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Reports'
    },
    children: [
      {
        path: 'aircraft-statistics',
        canActivate: [AuthGuard],
        loadChildren: () => import('./aircraft-statistics/aircraft-statistics.module').then(m => m.AircraftStatisticsModule)
      },
      {
        path: '',
        redirectTo: 'aircraft-statistics',
        pathMatch: 'full',
      },
    ]
  },

];


@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ReportsRoutingModule { }
