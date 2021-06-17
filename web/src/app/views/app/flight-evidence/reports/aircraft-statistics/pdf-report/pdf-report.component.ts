import { Component, OnInit, OnDestroy, Input, OnChanges } from '@angular/core';
import { AircraftStatisticsService } from '../aircraft-statistics.service';

@Component({
  selector: 'app-pdf-report',
  templateUrl: './pdf-report.component.html',
  styleUrls: ['./pdf-report.component.css'],
})
export class PdfReportComponent implements OnInit, OnChanges, OnDestroy {

  @Input('fromDate')
  fromDate: string;
  @Input('toDate')
  toDate: string;
  downloadFileName: string;

  pdf: any;
  bsRangeValue: any = [new Date(2017, 7, 4), new Date(2017, 7, 20)];

  constructor(
    private report1Service: AircraftStatisticsService
  ) { }

  ngOnInit(): void {
    this.downloadFileName = 'aircraft-statistic-' + this.fromDate + '-' + this.toDate + '.pdf';
  }

  ngOnChanges(): void {
    this.report1Service.getAircraftStatisticsPDF(this.fromDate, this.toDate)
      .then(
        (blob: any) => {
          let bb: Blob = new Blob([blob], { type: 'application/pdf' });
          this.pdf = URL.createObjectURL(bb);
        }
      );
  }

  ngOnDestroy() {
    URL.revokeObjectURL(this.pdf);
  }
}
