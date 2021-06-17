import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AirportsComponent } from './airports.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';
import { AuthGuard } from '../../../../../../auth/auth.guard';

const routes: Routes = [
  {
    path: '',
    component: AirportsComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Airports'
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
          title: 'Add or Edit Airports'
        }
      },
      {
        path: 'cities',
        canActivate: [AuthGuard],
        loadChildren: () => import('./cities/cities.module').then(m => m.CitiesModule)
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
export class AirportsRoutingModule { }
