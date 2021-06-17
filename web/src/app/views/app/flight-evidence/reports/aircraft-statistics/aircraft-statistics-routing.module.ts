import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AircraftStatisticsComponent } from './aircraft-statistics.component';


const routes: Routes = [
  {
    path: '',
    component: AircraftStatisticsComponent,
    data: {
      title: 'Aircrafts Statistics'
    }
  }
];
@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AircraftStatisticsRoutingModule { }
