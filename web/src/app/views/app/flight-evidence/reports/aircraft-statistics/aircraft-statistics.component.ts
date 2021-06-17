import { Component, OnInit, OnDestroy } from '@angular/core';
import { BsDaterangepickerConfig } from 'ngx-bootstrap';
import { AircraftStatisticsService } from './aircraft-statistics.service';
import { BreadcrumbMenuService } from '../../../../../shared/services/breadcrumb-menu-service.service';

@Component({
  templateUrl: './aircraft-statistics.component.html',
  styleUrls: ['./aircraft-statistics.component.css']
})
export class AircraftStatisticsComponent implements OnInit {

  pdf: any;

  bsRangeValue: any;

  bsConfig: Partial<BsDaterangepickerConfig> = new BsDaterangepickerConfig();

  data: any;
  fromDate: any;
  toDate: any;


  isGenerateReportPressed: boolean = false;

  constructor(
    private aircraftStatisticService: AircraftStatisticsService,
    private breadcrumbMenuService: BreadcrumbMenuService,
  ) { }

  ngOnInit(): void {
    let dat = new Date();
    this.bsRangeValue = [new Date(dat.getUTCFullYear(), dat.getUTCMonth(), 1), new Date(dat.getUTCFullYear(), dat.getUTCMonth(), dat.getUTCDate() == 1 ? 1 : dat.getUTCDate() - 1)];
    this.bsConfig.rangeInputFormat = 'Y/MM/DD';
    this.breadcrumbMenuService.settingsItems.next([]);
  }

  generateReport() {
    if(this.bsRangeValue[0] && this.bsRangeValue[1]) {
      this.isGenerateReportPressed = true;
      this.fromDate = this.formatDate(this.bsRangeValue[0]);
      this.toDate = this.formatDate(this.bsRangeValue[1]);
      this.aircraftStatisticService.getAircraftStatisticsUI(this.fromDate, this.toDate)
        .then(
          (res) => {
            // setTimeout(()=>{
              this.data = res;
              this.isGenerateReportPressed = false;
            // }, 2000);
          }
        );
      // this.aircraftStatisticService.getAircraftStatisticsPDF(this.fromDate, this.toDate)
      //   .then(
      //     (res) => {
      //     }
      //   );
    }
  }

  formatDate(date) {
    let d = new Date(date),
      month = '' + (d.getMonth() + 1),
      day = '' + d.getDate(),
      year = d.getFullYear();

    if (month.length < 2)
      month = '0' + month;
    if (day.length < 2)
      day = '0' + day;
    return [year, month, day].join('/');
  }
}
