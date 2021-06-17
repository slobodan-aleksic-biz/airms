import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { InventoryComponent } from './inventory.component';
import { AuthGuard } from '../../../auth/auth.guard';

const routes: Routes = [
  {
    path: '',
    component: InventoryComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Inventory'
    },
    children: [
      {
        path: 'dashboard',
        canActivate: [AuthGuard],
        loadChildren: () => import('./dashboard/dashboard.module').then(m => m.DashboardModule)
      },
      {
        path: 'stock',
        canActivate: [AuthGuard],
        loadChildren: () => import('./stock/stock.module').then(m => m.StockModule)
      },
      {
        path: 'c-a-m-o',
        canActivate: [AuthGuard],
        loadChildren: () => import('./c-a-m-o/c-a-m-o.module').then(m => m.CamoModule)
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
export class InventoryRoutingModule { }
