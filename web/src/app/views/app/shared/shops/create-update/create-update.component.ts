import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { ShopsService } from '../shops.service';
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

  countries: Array<IOption> = [];
  states: Array<IOption> = [];
  cities: Array<IOption> = [];


  formRules = {
    nameMaxLength: 120,
    nameMinLength: 5,
    // passwordPattern: '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}'
  };

  error_messages = {
    name: [
      { type: "required", message: "Name is required" },
      { type: "pattern", message: "Must be a name!" },
      {
        type: "maxlength",
        message: "The lenght must be lower than " + (this.formRules.nameMaxLength - 1) + " characters"
      },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.nameMinLength - 1) + " characters"
      },
    ],
    country_id: {
      required: 'Country is required',
    },
    state_id: {
      required: 'State is required',
    },
    city_id: {
      required: 'City is required',
    },
    address: {
      required: 'Address is required',
    },
    phone: {
      required: 'Phone is required',
    },
    email: {
      required: 'Email is required',
    },
    description: null
  };


  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private shopsService: ShopsService,
    private toasterService: ToasterService,
  ) { }

  ngOnInit(): void {

    this.shopsService.feedCountriesDropDown()
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

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe((paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();

        if (this.id) {
          this.title = "Edit Shop";
          this.shopsService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;

                this.shopsService.feedStatesDropDown(item.country_id.toString())
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

              this.shopsService.feedCitiesDropDown(item.state_id.toString())
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
                  name: item.name_left.toString(),
                  phone: item.phone_left.toString(),
                  email: item.email_left.toString(),
                  country_id: item.country_id.toString(),
                  state_id: item.state_id.toString(),
                  city_id: item.city_id.toString(),
                  address: item.address_left.toString(),
                  description: item.description_left.toString(),
                });
              });
          this.shopsService.feedActivityBox(this.id);
        } else {
          this.title = "Create Shop";
        }

      });

  }

  createForm() {

    this.formGroup = this.formBuilder.group({
      name: [
        null,
        [
          Validators.required,
          Validators.maxLength(this.formRules.nameMaxLength),
          Validators.minLength(this.formRules.nameMinLength),
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
      address: [
        null,
        [
          Validators.required,
        ]
      ],
      phone: [
        null,
        [
          Validators.required,
        ]
      ],
      email: [
        null,
        [
          Validators.required,
          Validators.email,
        ]
      ],
      description: [
        null,
        [
          Validators.nullValidator,
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
    this.shopsService.feedActivityBox();
    this.router.navigate(['../../'], { relativeTo: this.activeRoute });
  }

  changeRole(e) {

  }




  selectCountry(e) {

    this.shopsService.feedStatesDropDown(e.value)
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

    this.shopsService.feedCitiesDropDown(e.value)
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



  onSubmit() {
    this.submitted = true;

    // stop here if form is invalid
    if (this.formGroup.invalid) {
      return;
    }

    if (this.id) {
      this.shopsService.update(this.id, this.formGroup.value);
    } else {
      this.shopsService.create(this.formGroup.value);
    }
  }

}
