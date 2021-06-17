import { Component, OnInit } from '@angular/core';
import { LogBookService } from '../log-book.service';
import { IOption } from 'ng-select';
import { BreadcrumbMenuService } from '../../../../../shared/services/breadcrumb-menu-service.service';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';

@Component({
  selector: 'app-datatable',
  templateUrl: './datatable.component.html',
  styleUrls: ['./datatable.component.css']
})
export class DatatableComponent implements OnInit {

  title = 'Log Book';
  dataUrl = '/api/' + this.logBookService.getUserRole() + '/log-book/0';

  aircrafts: Array<IOption> = [];
  aircraftId: any;


  constructor(
    private logBookService: LogBookService,
    private breadcrumbMenuService: BreadcrumbMenuService,
    private activeRoute: ActivatedRoute,
    private router: Router
  ) { }

  async ngOnInit() {
    // this.aircraftId = parseInt(this.activeRoute.snapshot.paramMap.get('id')).toString();
    // this.activeRoute.paramMap
    //   .subscribe((paramMap: ParamMap) => {
    //     this.aircraftId = parseInt(paramMap.get('id')).toString();
    //     this.dataUrl = '/api/' + this.logBookService.getUserRole() + '/log-book/' + this.aircraftId;
    //   });

    this.breadcrumbMenuService.settingsItems.next([{
      name: 'Flight Routes',
      path: './log-book/flight-routes',
      icon: 'fa fa-paper-plane-o',
    },
    {
      name: 'Aircrafts',
      path: './log-book/aircrafts',
      icon: 'icon-plane',
    },
    {
      name: 'Delay Reasons',
      path: './log-book/delay-reasons',
      icon: 'icon-clock',
    }]);
    await this.logBookService.feedAircraftsDropDown()
      .then(
        (data) => {
          let aircraftsArr: Array<any> = [];
          data.forEach(
            (res: any) => {
              let ac = {
                label: res.reg_center + " (" + res.name_left + ")",
                value: res.id.toString(),
              };
              aircraftsArr.push(ac);

              if(res.id.toString() === parseInt(this.activeRoute.snapshot.paramMap.get('id')).toString()) {
                this.selectAircraft(ac);
                this.router.navigate(['../'], { relativeTo: this.activeRoute });
              }
            }
          );
          this.aircrafts = aircraftsArr;
        }
      );

    if (this.logBookService.aircraft.value) {
      this.aircraftId = this.logBookService.aircraft.value;
      this.dataUrl = '/api/' + this.logBookService.getUserRole() + '/log-book/' + this.aircraftId;
    }

    this.logBookService.feedActivityBox();
  }

  onTableEvent(e) {
    if (e) {
      this.logBookService.feedActivityBox();
    }
  }

  selectAircraft(e) {
    if (e) {
      this.aircraftId = e;
      this.logBookService.aircraft = e;
      this.dataUrl = null;
      setTimeout(() => {
        this.dataUrl = '/api/' + this.logBookService.getUserRole() + '/log-book/' + e.value;
      }, 500);
      this.logBookService.feedActivityBox();
    }
  }

  deselectAircraft(e) {
    this.aircraftId = null;
    this.logBookService.aircraft = null;
    this.logBookService.feedActivityBox();
  }

}
