import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';


import { AuthGuard } from '../../../../auth/auth.guard';
import { CAMOComponent } from './c-a-m-o.component';

const routes: Routes = [
  {
    path: '',
    component: CAMOComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'CAMO'
    },
    children: [
      {
        path: 'aircraft-parts',
        canActivate: [AuthGuard],
        loadChildren: () => import('./aircraft-parts/aircraft-parts.module').then(m => m.AircraftPartsModule)
      },
      {
        path: '',
        redirectTo: 'aircraft-parts',
        pathMatch: 'full',
      },
    ]
  },

];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class CAMORoutingModule { }
