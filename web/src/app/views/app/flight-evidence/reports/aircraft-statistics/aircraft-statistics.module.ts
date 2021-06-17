import { NgModule, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { ChartsModule } from 'ng2-charts';
import { BsDropdownModule } from 'ngx-bootstrap/dropdown';
import { ButtonsModule } from 'ngx-bootstrap/buttons';

import { AircraftStatisticsComponent } from './aircraft-statistics.component';
import { AircraftStatisticsRoutingModule } from './aircraft-statistics-routing.module';
import { AircraftStatisticsService } from './aircraft-statistics.service';
import { CommonModule } from '@angular/common';
import { BsDatepickerModule, TabsModule } from 'ngx-bootstrap';
import { UiReportComponent } from './ui-report/ui-report.component';
import { PdfReportComponent } from './pdf-report/pdf-report.component';
import { PdfJsViewerModule } from 'ng2-pdfjs-viewer';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    AircraftStatisticsRoutingModule,
    ChartsModule,
    BsDropdownModule,
    ButtonsModule.forRoot(),
    BsDatepickerModule.forRoot(),
    TabsModule,
    ChartsModule,
    PdfJsViewerModule,
  ],
  declarations: [
    AircraftStatisticsComponent,
    UiReportComponent,
    PdfReportComponent,
  ],
  providers: [AircraftStatisticsService]
})
export class AircraftStatisticsModule { }
