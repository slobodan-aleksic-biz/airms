import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { AirportsService } from '../airports.service';
import { IOption } from 'ng-select';
import { ToasterService, ToasterConfig } from 'angular2-toaster/angular2-toaster';


@Component({
  selector: 'app-create-update',
  templateUrl: './create-update.component.html',
  styleUrls: ['./create-update.component.css'],
  // encapsulation: ViewEncapsulation.None,
  providers: [ToasterService]
})
export class CreateUpdateComponent implements OnInit {

  id: number;

  title: string;

  public toasterconfig: ToasterConfig = new ToasterConfig({
    tapToDismiss: true,
    timeout: 5000,
  });

  formGroup: FormGroup;
  submitted = false;

  errorMessages: any;

  countries: Array<IOption> = [];
  states: Array<IOption> = [];
  cities: Array<IOption> = [];
  timezones: Array<IOption> = [];

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private airportsService: AirportsService,
    private toasterService: ToasterService,
  ) { }

  ngOnInit(): void {

    this.errorMessages = {
      name: {
        required: 'Nameis required',
      },
      description: {
        required: 'Description is required',
      },
      iata_code: {
        required: 'IATA Code is required',
      },
      icao_code: {
        required: 'ICAO Code is required',
      },
      country_id: {
        required: 'Country is required',
      },
      state_id: {
        required: 'State is required',
      },
      city_id: {
        required: 'City is required',
      },
      latitude: {
        required: 'Latitude is required',
      },
      longitude: {
        required: 'Longitude is required',
      },
      altitude_m: {
        required: 'Altitude M is required',
      },
      time_zone_offset: {
        required: 'Time Zone Offset is required',
      },
      time_zone_letter: {
        required: 'Time Zone Letter is required',
      },
      time_zone_dst: {
        required: 'Time Zone DST is required',
      },
    };

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe((paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();


        this.airportsService.feedTimezonesDropDown()
          .then(
            (data) => {
              let timezones = [];

              data.forEach(
                (res: any) => {
                  timezones.push({
                    label: res.toString(),
                    value: res.toString(),
                  });
                }
              );

              this.timezones = timezones;
            }
          );

        this.airportsService.feedCountriesDropDown()
          .then(
            (data) => {
              let countries = [];

              data.forEach(
                (res: any) => {
                  countries.push({
                    label: res.country_name_left,
                    value: res.id.toString(),
                  });
                }
              );

              this.countries = countries;
            }
          );

        if (this.id) {
          this.title = "Edit Airport";
          this.airportsService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;


                this.airportsService.feedStatesDropDown(item.country_id.toString())
                  .then(
                    (data) => {
                      let states = [];

                      data.forEach(
                        (res: any) => {
                          states.push({
                            label: res.state_name_left,
                            value: res.id.toString(),
                          });
                        }
                      );

                      this.states = states;
                    }
                  );

                this.airportsService.feedCitiesDropDown(item.state_id.toString())
                  .then(
                    (data) => {
                      let cities = [];

                      data.forEach(
                        (res: any) => {
                          cities.push({
                            label: res.city_name_left,
                            value: res.id.toString(),
                          });
                        }
                      );

                      this.cities = cities;
                    }
                  );

                this.formGroup.patchValue({
                  name: item.name.toString(),
                  description: item.description ? item.description.toString() : '',
                  iata_code: item.iata_code.toString(),
                  icao_code: item.icao_code.toString(),
                  country_id: item.country_id.toString(),
                  state_id: item.state_id.toString(),
                  city_id: item.city_id.toString(),
                  latitude: item.latitude.toString(),
                  longitude: item.longitude.toString(),
                  altitude_m: item.altitude_m.toString(),
                  time_zone_offset: item.time_zone_offset.toString(),
                  time_zone_letter: item.time_zone_letter.toString(),
                  time_zone_dst: item.time_zone_dst.toString(),
                });
              });
          this.airportsService.feedActivityBox(this.id);
        } else {
          this.title = "Create Airport";
        }

      });


  }

  createForm() {

    this.formGroup = this.formBuilder.group({
      name: [
        null,
        [
          Validators.required,
        ]
      ],
      description: [
        null,
        [

        ]
      ],
      iata_code: [
        null,
        [
          Validators.required,
        ]
      ],
      icao_code: [
        null,
        [
          Validators.required,
        ]
      ],
      country_id: [
        null,
        [
          Validators.required,
        ]
      ],
      state_id: [
        null,
        [
          Validators.required,
        ]
      ],
      city_id: [
        null,
        [
          Validators.required,
        ]
      ],
      latitude: [
        null,
        [
          Validators.required,
        ]
      ],
      longitude: [
        null,
        [
          Validators.required,
        ]
      ],
      altitude_m: [
        null,
        [
          Validators.required,
        ]
      ],
      time_zone_offset: [
        null,
        [
          Validators.required,
        ]
      ],
      time_zone_letter: [
        null,
        [
          Validators.required,
        ]
      ],
      time_zone_dst: [
        null,
        [
          Validators.required,
        ]
      ],
    });

  }

  // convenience getter for easy access to form fields
  get f() { return this.formGroup.controls; }




  selectCountry(e) {

    this.airportsService.feedStatesDropDown(e.value)
      .then(
        (data) => {
          let states = [];

          data.forEach(
            (res: any) => {
              states.push({
                label: res.state_name_left.toString(),
                value: res.id.toString(),
              });
            }
          );

          this.states = states;
        }
      );
  }

  deselectCountry(e) {
    this.states = [];
    this.cities = [];
  }


  selectState(e) {

    this.airportsService.feedCitiesDropDown(e.value)
      .then(
        (data) => {
          let cities = [];

          data.forEach(
            (res: any) => {
              cities.push({
                label: res.city_name_left.toString(),
                value: res.id.toString(),
              });
            }
          );

          this.cities = cities;
        }
      );
  }

  deselectState(e) {
    this.cities = [];
  }





  onReset() {

    this.submitted = false;
    this.formGroup.reset();

  }

  onCancel() {
    this.airportsService.feedActivityBox();
    this.router.navigate(['../../'], { relativeTo: this.activeRoute });
  }


  onSubmit() {
    this.submitted = true;

    // stop here if form is invalid
    if (this.formGroup.invalid) {
      return;
    }

    if (this.id) {
      this.airportsService.update(this.id, this.formGroup.value);
    } else {
      this.airportsService.create(this.formGroup.value);
    }
  }

}
