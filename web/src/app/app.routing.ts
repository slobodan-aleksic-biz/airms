import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

// Import Containers
import { DefaultLayoutComponent } from './containers';
import { P404Component } from './views/error/404.component';
import { P500Component } from './views/error/500.component';
import { SignInComponent } from './views/sign-in/sign-in.component';
import { AuthGuard } from './auth/auth.guard';

export const routes: Routes = [
  {
    path: '',
    redirectTo: 'signin',
    pathMatch: 'full',
  },
  {
    path: '404',
    component: P404Component,
    data: {
      title: 'Page 404'
    }
  },
  {
    path: '500',
    component: P500Component,
    data: {
      title: 'Page 500'
    }
  },
  {
    path: 'signin',
    component: SignInComponent,
    data: {
      title: 'Sign In Page'
    }
  },
  {
    path: 'home',
    component: DefaultLayoutComponent,
    canActivate: [AuthGuard],
    children: [
      {
        path: '',
        canActivate: [AuthGuard],
        loadChildren: () => import('./views/app/home/home.module').then(m => m.HomeModule)
      }
    ]
  },
  {
    path: 'flight-evidence',
    component: DefaultLayoutComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Flight Evidence'
    },
    loadChildren: () => import('./views/app/flight-evidence/flight-evidence.module').then(m => m.FlightEvidenceModule)
  },
  {
    path: 'inventory',
    component: DefaultLayoutComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'inventory'
    },
    loadChildren: () => import('./views/app/inventory/inventory.module').then(m => m.InventoryModule)
  },
  {
    path: 'admin',
    component: DefaultLayoutComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Admin'
    },
    children: [
      {
        path: 'users',
        canActivate: [AuthGuard],
        loadChildren: () => import('./views/app/admin/users/users.module').then(m => m.UsersModule)
      },
      {
        path: '',
        redirectTo: 'users',
        pathMatch: 'full',
      },
    ]
  },
  {
    path: 'maintenance',
    component: DefaultLayoutComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Maintenance'
    },
    children: [
      {
        path: 'dashboard',
        canActivate: [AuthGuard],
        loadChildren: () => import('./views/app/maintenance/dashboard/dashboard.module').then(m => m.DashboardModule)
      },
      {
        path: 'test',
        canActivate: [AuthGuard],
        loadChildren: () => import('./views/app/maintenance/test/dashboard.module').then(m => m.DashboardModule)
      },
      {
        path: '',
        redirectTo: 'dashboard',
        pathMatch: 'full',
      },
    ]
  },
  {
    path: 'inventory',
    component: DefaultLayoutComponent,
    canActivate: [AuthGuard],
    data: {
      title: 'Inventory'
    },
    children: [
      {
        path: 'dashboard',
        canActivate: [AuthGuard],
        loadChildren: () => import('./views/app/maintenance/dashboard/dashboard.module').then(m => m.DashboardModule)
      },
      {
        path: 'test',
        canActivate: [AuthGuard],
        loadChildren: () => import('./views/app/maintenance/test/dashboard.module').then(m => m.DashboardModule)
      },
      {
        path: '',
        redirectTo: 'dashboard',
        pathMatch: 'full',
      },
    ]
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
