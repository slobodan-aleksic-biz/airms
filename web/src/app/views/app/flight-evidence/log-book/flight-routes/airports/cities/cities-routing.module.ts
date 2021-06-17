import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { CitiesComponent } from './cities.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';
import { AuthGuard } from '../../../../../../../auth/auth.guard';

const routes: Routes = [
  {
    path: '',
    component: CitiesComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Cities'
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
          title: 'Add or Edit Cities'
        }
      },
      {
        path: 'states',
        canActivate: [AuthGuard],
        loadChildren: () => import('./states/states.module').then(m => m.StatesModule)
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
export class CitiesRoutingModule { }
