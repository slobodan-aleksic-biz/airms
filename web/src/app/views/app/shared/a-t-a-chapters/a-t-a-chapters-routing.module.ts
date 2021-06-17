import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { ATAChaptersComponent } from './a-t-a-chapters.component';
import { CreateUpdateComponent } from './create-update/create-update.component';
import { DatatableComponent } from './datatable/datatable.component';

const routes: Routes = [
  {
    path: '',
    component: ATAChaptersComponent,
    data: {
      title: 'ATA Chapters'
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
          title: 'Add or Edit ATA Chapter'
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
export class ATAChaptersRoutingModule {}
