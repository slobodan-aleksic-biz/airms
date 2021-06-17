import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { LogBookService } from '../log-book.service';
import { IOption } from 'ng-select';
import { ToasterService, ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { BsDatepickerConfig } from 'ngx-bootstrap';


@Component({
  selector: 'app-create-update',
  templateUrl: './create-update.component.html',
  styleUrls: ['./create-update.component.css'],
  encapsulation: ViewEncapsulation.None,
  providers: [ToasterService]
})
export class CreateUpdateComponent implements OnInit {

  id: number;
  title: string;

  bsConfig: Partial<BsDatepickerConfig> = new BsDatepickerConfig();

  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000,
  });

  formGroup: FormGroup;
  submitted = false;

  errorMessages: any;


  captains: Array<IOption> = [];
  //
  flightRoutes: Array<IOption> = [];
  origin = null;
  destination = null;
  aircraft: string;

  flightNoStr: string;
  originStr: string;
  flightTimeStartStr: string;
  destinationStr: string;
  flightTimeEndStr: string;

  currentTotalHoursStr: string;
  currentTotalCyclesStr: string;
  totalHoursStr: string;
  totalCyclesStr: string;
  lastUpdateStr: string;

  flightTimeStart: any;
  flightTimeEnd: any;

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private logBookService: LogBookService,
    private toasterService: ToasterService,
  ) { }

  async ngOnInit() {
    this.bsConfig.dateInputFormat = 'Y/MM/DD';

    // this.captains.push({
    //   label: 'N/A',
    //   value: '0',
    // });

    if (this.logBookService.aircraft) {
      this.aircraft = this.logBookService.aircraft.label;
    }

    this.errorMessages = {
      flight_route: {
        required: 'Flight route is required',
      },
      name: {
        required: 'First name is required',
      },
      description: {
      },
    };

    await this.logBookService.feedFlightRouteDropDown()
      .then(
        (data) => {
          data.forEach(
            (res: any) => {
              this.flightRoutes.push({
                label: res.flight_no_left,
                value: res.id.toString(),
              });
            }
          );
        }
      );

    await this.logBookService.feedCaptainsDropDown()
      .then(
        (data) => {
          data.forEach(
            (res: any) => {
              this.captains.push({
                label: res.name,
                value: res.id.toString(),
              });
            }
          );
        }
      );

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe(
        async (paramMap: ParamMap) => {

          this.id = parseInt(paramMap.get('id'));

          this.createForm();

          if (this.id) {
            this.title = "Edit Flight";

            this.logBookService.getAircraftInto(this.id)
            .then(
              (res: any) => {
                if (res) {
                  this.flightNoStr = res.flight_no_left;
                  this.originStr = res.origin_left;
                  this.flightTimeStartStr = res.flight_time_start_left;
                  this.destinationStr = res.destination_left;
                  this.flightTimeEndStr = res.flight_time_end_left;

                  this.currentTotalHoursStr = res.total_hours_right;
                  this.currentTotalCyclesStr = res.total_cycles_right;
                  this.lastUpdateStr = res.updated_at_left;
                }
              }
            );


            await this.logBookService.get(this.id)
              .subscribe(
                async (data) => {

                  let item = data;

                  this.origin = item.origin;
                  this.destination = item.destination;

                  this.flightTimeStart = new Date(item.flight_time_start);
                  this.flightTimeEnd = new Date(item.flight_time_end);

                  await this.formGroup.patchValue({
                    flight_route: item.flight_route_id.toString(),
                    flight_time_start_date: item.flight_time_start,
                    flight_time_start_time: item.flight_time_start,
                    flight_time_end_date: item.flight_time_end,
                    flight_time_end_time: item.flight_time_end,
                    flight_cycles: item.flight_cycles,
                    captain: item.captain_id.toString(),
                  });
                  this.totalHoursStr = this.getFlightHours();
                  this.totalCyclesStr = item.flight_cycles;
                  this.defaultFlightHoursData();
                  this.defaultFlightCyclesData();
                });
            this.logBookService.feedActivityBox(this.id);
          } else {
            this.title = "Create Flight";

            this.logBookService.getAircraftInto()
            .then(
              (res: any) => {
                if (res) {
                  this.flightNoStr = res.flight_no_left;
                  this.originStr = res.origin_left;
                  this.flightTimeStartStr = res.flight_time_start_left;
                  this.destinationStr = res.destination_left;
                  this.flightTimeEndStr = res.flight_time_end_left;

                  this.currentTotalHoursStr = res.total_hours_right;
                  this.currentTotalCyclesStr = res.total_cycles_right;
                  this.lastUpdateStr = res.updated_at_left;

                  this.defaultFlightHoursData();
                  this.defaultFlightCyclesData();
                }
              }
            );

          }

        });
  }

  createForm() {

    this.formGroup = this.formBuilder.group({
      flight_route: [
        null,
        [
          Validators.required,
        ]
      ],
      flight_time_start_date: [
        null,
        [
          Validators.required,
        ]
      ],
      flight_time_start_time: [
        null,
        [
          Validators.required,
        ]
      ],
      flight_time_end_date: [
        null,
        [
          Validators.required,
        ]
      ],
      flight_time_end_time: [
        null,
        [
          Validators.required,
        ]
      ],
      flight_cycles: [
        1,
        [
          Validators.required,
        ]
      ],
      captain: [
        null,
        [
          Validators.nullValidator,
        ]
      ],
    });
    this.defaultFlightCyclesData();
  }

  // convenience getter for easy access to form fields
  get f() { return this.formGroup.controls; }

  onReset() {
    this.origin = null;
    this.destination = null;

    this.submitted = false;
    this.formGroup.reset();
  }

  onCancel() {
    this.logBookService.feedActivityBox();
    this.router.navigate(['../../datatable'], { relativeTo: this.activeRoute });
  }

  selectFlightNo(e) {
    this.logBookService.findOriginDestinationFromFlightNo(e)
      .then(
        (res: any) => {
          if (res) {
            this.origin = res[0].origin_left;
            this.destination = res[0].destination_left;
          }
        }
      );
  }

  deselectFlightNo(e) {
    this.origin = null;
    this.destination = null;
  }

  getFlightHours() {

    let f = this.formGroup.value;

    let flightTimeStartDate = new Date(f['flight_time_start_date']);
    let flightTimeStartTime = new Date(f['flight_time_start_time']);

    this.flightTimeStart = new Date(Date.UTC(
      flightTimeStartDate.getFullYear(),
      flightTimeStartDate.getMonth(),
      flightTimeStartDate.getDate(),
      flightTimeStartTime.getHours(),
      flightTimeStartTime.getMinutes()
    ));

    let flightTimeEndDate = new Date(f['flight_time_end_date']);
    let flightTimeEndTime = new Date(f['flight_time_end_time']);

    this.flightTimeEnd = new Date(Date.UTC(
      flightTimeEndDate.getFullYear(),
      flightTimeEndDate.getMonth(),
      flightTimeEndDate.getDate(),
      flightTimeEndTime.getHours(),
      flightTimeEndTime.getMinutes()
    ));

    let flightHours = (this.diffMinutes(this.flightTimeStart, this.flightTimeEnd) / 60).toFixed(2);

    return flightHours;
  }

  minDate: any;
  maxDate: any;

  flightTimeEndDate_;
  calculatedFlightHoursStr: string;
  flightTimeStartDateFunc(e) {
    let date_ = this.formGroup.value['flight_time_start_date'];
    this.minDate = date_;
    this.flightTimeEndDate_ = date_;
    this.defaultFlightHoursData();
  }
  flightTimeEndTime_;
  flightTimeStartTimeFunc(e) {
    let time_ = this.formGroup.value['flight_time_start_time'];
    this.flightTimeEndTime_ = time_;
    this.defaultFlightHoursData();
  }

  flightTimeEndDateFunc(e) {
    let date_ = this.formGroup.value['flight_time_end_date'];
    this.maxDate = date_;
    this.defaultFlightHoursData();
  }

  flightTimeEndTimeFunc(e) {
    this.defaultFlightHoursData();
  }

  totalFlightHoursStr: string;
  defaultFlightHoursData() {
    if (this.id) {
      this.calculatedFlightHoursStr = (parseFloat(this.getFlightHours()) + parseFloat(this.currentTotalHoursStr ? this.currentTotalHoursStr : '0')).toFixed(2).toString();
    } else {
      this.calculatedFlightHoursStr = (parseFloat(this.getFlightHours()) + parseFloat(this.currentTotalHoursStr ? this.currentTotalHoursStr : '0')).toFixed(2).toString();
    }
    this.totalFlightHoursStr = (parseFloat(this.getFlightHours())).toFixed(2).toString();
  }


  calculatedFlightCyclesStr: string;
  totalFlightCyclesStr: string;
  flightCyclesFunc(e) {
    this.defaultFlightCyclesData();
  }
  defaultFlightCyclesData() {
    if (this.id) {
      this.calculatedFlightCyclesStr = (parseInt(this.formGroup.value['flight_cycles']) + parseInt(this.currentTotalCyclesStr ? this.currentTotalCyclesStr : '0')).toString();
    } else {
      this.calculatedFlightCyclesStr = (parseInt(this.formGroup.value['flight_cycles']) + parseInt(this.currentTotalCyclesStr ? this.currentTotalCyclesStr : '0')).toString();
    }
    this.totalFlightCyclesStr = parseInt(this.formGroup.value['flight_cycles']).toString();
  }



  onSubmit() {
    this.submitted = true;

    // stop here if form is invalid
    if (this.formGroup.invalid) {
      return;
    }

    if (this.flightTimeStart > this.flightTimeEnd) {
      this.toasterService.pop('error', 'The date time issue', 'The flight time end must be greater than the flight time start!');
      return;
    }

    if (this.destinationStr !== this.origin && !this.id && this.destinationStr) {
      this.toasterService.pop('error', 'The aircraft positioning issue', 'The current aircraft\'s origin is not equal as the last aircraft\'s destination!');
      return;
    }

    let n = (new Date(this.flightTimeEndStr).getTime());
    let m = parseInt(this.flightTimeStart.getTime().toString());

    if (n >= m && !this.id && this.flightTimeEndStr) {
      this.toasterService.pop('error', 'The aircraft take off date time issue', 'The current aircraft flight date time start is less equal than the last one!');
      return;
    }

    let aircraftId = this.logBookService.aircraft.value;

    let logBookVal: any = {
      'flight_route_id': this.formGroup.value['flight_route'],
      'flight_cycles': this.formGroup.value['flight_cycles'],
      'aircraft_id': aircraftId,
      'captain_id': this.formGroup.value['captain'],
      'flight_time_start': this.formatDateTime(this.flightTimeStart),
      'flight_time_end': this.formatDateTime(this.flightTimeEnd),
    }

    if (this.id) {
      this.logBookService.update(this.id, logBookVal);
    } else {
      this.logBookService.create(logBookVal);
    }
  }


  diffMinutes(dt1str, dt2str) {

    let dt1 = new Date(dt1str);
    let dt2 = new Date(dt2str);

    if (dt1 > dt2) {
      return 0;
    }

    let diff = (dt2.getTime() - dt1.getTime()) / 1000;
    diff /= 60;
    return Math.abs(Math.round(diff));
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

  formatDateTime(date) {
    let d = new Date(date),
      month = '' + (d.getUTCMonth() + 1),
      day = '' + d.getUTCDate(),
      year = d.getUTCFullYear(),
      hours = '' + d.getUTCHours(),
      minutes = '' + d.getUTCMinutes();

    if (month.length < 2)
      month = '0' + month;
    if (day.length < 2)
      day = '0' + day;
    if (hours.length < 2)
      hours = '0' + hours;
    if (minutes.length < 2)
      minutes = '0' + minutes;
    return [year, month, day].join('/') + " " + [hours, minutes].join(':');
  }
}
