import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AircraftsComponent } from './aircrafts.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';
import { AuthGuard } from '../../../../auth/auth.guard';

const routes: Routes = [
  {
    path: '',
    component: AircraftsComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Aircrafts'
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
          title: 'Add or Edit Aircrafts'
        }
      },
      {
        path: 'aircraft-types',
        canActivate: [AuthGuard],
        loadChildren: () => import('./aircraft-types/aircraft-types.module').then(m => m.AircraftTypesModule)
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
export class AircraftsRoutingModule { }
