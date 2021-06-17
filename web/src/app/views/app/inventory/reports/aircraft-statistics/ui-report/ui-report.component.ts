import { Component, OnInit, Input, OnChanges } from '@angular/core';
import { BreadcrumbMenuService } from '../../../../../../shared/services/breadcrumb-menu-service.service';
import { AircraftStatisticsService } from '../aircraft-statistics.service';

@Component({
  selector: 'app-ui-report',
  templateUrl: './ui-report.component.html',
  styleUrls: ['./ui-report.component.css'],
})
export class UiReportComponent implements OnInit, OnChanges {

  @Input('fromDate')
  fromDate: string;
  @Input('toDate')
  toDate: string;
  @Input('data')
  data: any;


  totalHours:number = 0;
  totalCycles:number = 0;

  // barChart
  public barChartOptions: any = {
    scaleShowVerticalLines: false,
    responsive: true
  };
  public barChartLabelsCycles: string[] = ['Flight Cycles'];
  public barChartLabelsHours: string[] = ['Flight Hours'];
  public barChartType = 'bar';
  public barChartLegend = true;

  public barChartDataCycles: any[] = [];
  public barChartDataHours: any[] = [];

  constructor(
    private aircraftStatisticService: AircraftStatisticsService
  ) { }

  ngOnInit() {

    }

  ngOnChanges() {

    if(this.data) {
      this.totalCycles = 0;
      this.totalHours = 0;
      this.barChartDataCycles = [];
      this.barChartDataHours = [];
      this.data.forEach(element => {

        this.barChartDataCycles.push({
          data: [parseInt(element.total_cycles)],
          label: element.aircraft_reg });

        this.barChartDataHours.push({
          data: [ parseFloat(element.total_hours)],
          label: element.aircraft_reg });

        this.totalCycles += parseInt(element.total_cycles);
        this.totalHours += parseFloat(element.total_hours);
      });
    }
  }

  onPrint(e) {
    e.preventDefault();
    window.print();
  }
  onSave(e) {
    e.preventDefault();
      this.aircraftStatisticService.getAircraftStatisticsPDF(this.fromDate, this.toDate)
        .then(
          (res) => {
          }
        );
  }
}
