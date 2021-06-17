import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { StatesComponent } from './states.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';
import { AuthGuard } from '../../../../../../../../auth/auth.guard';

const routes: Routes = [
  {
    path: '',
    component: StatesComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'States'
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
          title: 'Add or Edit States'
        }
      },
      {
        path: 'countries',
        canActivate: [AuthGuard],
        loadChildren: () => import('./countries/countries.module').then(m => m.CountriesModule)
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
export class StatesRoutingModule { }
