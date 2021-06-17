import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { CitiesService } from '../cities.service';

import { IOption } from 'ng-select';
import { ToasterService, ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { state } from '@angular/animations';


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

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private citiesService: CitiesService,
    private toasterService: ToasterService,
  ) { }

  ngOnInit(): void {

    this.errorMessages = {
      name: {
        required: 'Name is required',
      },
      zip_code: {
        required: 'Zip Code is required',
      },
      has_airport: {
        required: 'Has Airport is required',
      },
      country_id: {
        required: 'Country is required',
      },
      city_id: {
        required: 'City is required',
      },
    };

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe(async (paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();

        if (this.id) {

          this.title = "Edit City";
          this.citiesService.get(this.id)
            .subscribe(
              async (data) => {
                let item = data;
                await this.selectCountry({ value: item.country_id.toString() });
                this.formGroup.patchValue({
                  name: item.name,
                  zip_code: item.zip_code ? item.zip_code.toString() : '',
                  has_airport: item.has_airport.toString(),
                  country_id: item.country_id.toString(),
                  state_id: item.state_id.toString(),
                });
              });
          this.citiesService.feedActivityBox(this.id);
        } else {
          this.title = "Create City";
        }

      });

    this.citiesService.feedCountriesDropDown()
      .then(
        (data) => {
          let countries = [];

          data.forEach(
            (res: any) => {
              countries.push({
                label: res.country_name_left.toString(),
                value: res.id.toString(),
              });
            }
          );

          this.countries = countries;
        }
      );
  }

  createForm() {

    this.formGroup = this.formBuilder.group({
      name: [
        null,
        [
          Validators.required,
        ]
      ],
      zip_code: [
        null,
        [
          Validators.required,
        ]
      ],
      has_airport: [
        null,
        [

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
    });

  }

  // convenience getter for easy access to form fields
  get f() { return this.formGroup.controls; }

  onReset() {

    this.submitted = false;
    this.formGroup.reset();

  }

  onCancel() {
    this.citiesService.feedActivityBox();
    this.router.navigate(['../../'], { relativeTo: this.activeRoute });
  }

  selectCountry(e) {

    this.citiesService.feedStatesDropDown(e.value)
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
  }

  onSubmit() {
    this.submitted = true;

    // stop here if form is invalid
    if (this.formGroup.invalid) {
      return;
    }

    if (this.id) {
      this.citiesService.update(this.id, this.formGroup.value);
    } else {
      this.citiesService.create(this.formGroup.value);
    }
  }

}
