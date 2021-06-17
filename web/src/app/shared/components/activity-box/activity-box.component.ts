import { Component, OnInit, Input, OnDestroy } from '@angular/core';
import { ActivityBoxService } from './activity-box-service.service';
import { Subscription } from 'rxjs';
import { formatDate } from '@angular/common';
import * as d3 from "d3";


@Component({
  selector: 'app-activity-box',
  templateUrl: './activity-box.component.html',
  styleUrls: ['./activity-box.component.css']
})
export class ActivityBoxComponent implements OnInit, OnDestroy {

  data: any = [];
  private activityBoxDataSubscription: Subscription;
  url: any = null;
  private activityBoxUrlSubscription: Subscription;

  activityBoxVisibility: boolean = false;

  constructor(
    private activityBoxService: ActivityBoxService
  ) { }

  ngOnInit(): void {

      this.activityBoxDataSubscription = this.activityBoxService.data
        .subscribe(
          (data) => {
            this.activityBoxVisibility = false;
            this.activityFunc(data);
            this.activityBoxVisibility = true;
          }
        );
      this.activityBoxUrlSubscription = this.activityBoxService.url
        .subscribe(
          (url) => {
            this.url = url;
          }
        );

  }


  activityFunc(data) {
    const format1 = 'MMM, y';
    const format2 = 'd, EEEE';
    const format3 = 'H:mm:ss';
    const locale = 'en-US';

    setTimeout(() => {

      let logsArr: any = [];

      for (let d of data) {
        d3.map();

        let formattedDate1 = formatDate(d.created_at, format1, locale);
        let formattedDate2 = formatDate(d.created_at, format2, locale);
        let formattedDate3 = formatDate(d.created_at, format3, locale);

        logsArr.push({
          date1: formattedDate1,
          date2: formattedDate2,
          date3: formattedDate3,
          data: d
        });

      }

      let transformedData = d3.nest()
        .key(function (d) { return d.date1; })
        .key(function (d) { return d.date2; })
        .key(function (d) { return d.date3; })
        .entries(logsArr);
        this.data = transformedData;
    }, 1000);

  }

  ngOnDestroy() {
    this.activityBoxDataSubscription.unsubscribe();
    this.activityBoxUrlSubscription.unsubscribe();
  }

}
