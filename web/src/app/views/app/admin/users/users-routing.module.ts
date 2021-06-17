import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { UsersComponent } from './users.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';

const routes: Routes = [
  {
    path: '',
    component: UsersComponent,
    data: {
      title: 'Users'
    },
    children: [
      {
        path: 'datatable',
        component: DatatableComponent,
      },
      {
        path: ':id/create-update',
        component: CreateUpdateComponent,
        data: {
          title: 'Add or Edit User'
        }
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
export class UsersRoutingModule {}
