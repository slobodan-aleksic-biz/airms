import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { DelayReasonsComponent } from './delay-reasons.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';
import { AuthGuard } from '../../../../../auth/auth.guard';

const routes: Routes = [
  {
    path: '',
    component: DelayReasonsComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Delay Reasons'
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
          title: 'Add or Edit Delay Reasons'
        }
      },
      {
        path: 'delay-types',
        canActivate: [AuthGuard],
        loadChildren: () => import('./delay-types/delay-types.module').then(m => m.DelayTypesModule)
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
export class DelayReasonsRoutingModule { }
