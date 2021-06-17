import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AuthGuard } from '../../../../../auth/auth.guard';
import { AircraftPartsMainFormComponent } from './aircraft-parts-main-form/aircraft-parts-main-form.component';
import { AircraftPartsComponent } from './aircraft-parts.component';


const routes: Routes = [
  {
    path: '',
    component: AircraftPartsComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Aircraft Parts'
    },
    children: [
      {
        path: '',
        data: {
          title: ''
        },
        component: AircraftPartsMainFormComponent,
        canActivate: [AuthGuard],
      },
      {
        path: '',
        canActivate: [AuthGuard],
        data: {
          title: ''
        },
        children: [
          {
            path: 'ata-chapters',
            canActivate: [AuthGuard],
            loadChildren: () => import('../../../shared/a-t-a-chapters/a-t-a-chapters.module').then(m => m.ATAChaptersModule),
          },
          {
            path: 'aircrafts',
            canActivate: [AuthGuard],
            loadChildren: () => import('../../../shared/aircrafts/aircrafts.module').then(m => m.AircraftsModule)
          },
          {
            path: 'owners',
            canActivate: [AuthGuard],
            loadChildren: () => import('../../../shared/owners/owners.module').then(m => m.OwnersModule)
          },
          {
            path: 'stocks',
            canActivate: [AuthGuard],
            loadChildren: () => import('../../../shared/stocks/stocks.module').then(m => m.StocksModule)
          },
          {
            path: 'quantity-units',
            canActivate: [AuthGuard],
            loadChildren: () => import('../../../shared/quantity-units/quantity-units.module').then(m => m.QuantityUnitsModule)
          },
          {
            path: 'shops',
            canActivate: [AuthGuard],
            loadChildren: () => import('../../../shared/shops/shops.module').then(m => m.ShopsModule)
          },
        ]
      },
      {
        path: '',
        redirectTo: '',
        pathMatch: 'full',
      },
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AircraftPartsRoutingModule {}
