import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { AircraftTypesService } from '../aircraft-types.service';

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

  origins: Array<IOption> = [];
  destinations: Array<IOption> = [];

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private aircraftTypesService: AircraftTypesService,
    private toasterService: ToasterService,
  ) { }

  ngOnInit(): void {

    this.errorMessages = {
      name: {
        required: 'Name is required',
      },
      iso_code_2: {
        required: 'ISO Code 2 is required',
        max: 'Max length is 2',
        min: 'Max length is 2',
      },
      iso_code_3: {
        required: 'ISO Code 2 is required',
        max: 'Max length is 3',
        min: 'Max length is 3',
      },
      phone_code: {
        required: 'Phone Code is required',
      },
    };

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe((paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();

        if (this.id) {
          this.title = "Edit Aircraft Type";
          this.aircraftTypesService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;
                this.formGroup.patchValue({
                  name: item.name.toString(),
                  max_seats: item.max_seats.toString(),
                  manufacturer: item.manufacturer.toString(),
                  iata_code: item.iata_code.toString(),
                  icao_code: item.icao_code.toString(),
                  wake: item.wake.toString(),
                  max_range: item.max_range.toString(),
                  max_flight_time_in_min: item.max_flight_time_in_min.toString(),
                });
              });
          this.aircraftTypesService.feedActivityBox(this.id);
        } else {
          this.title = "Create Aircraft Type";
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
      max_seats: [
        null,
        [
          Validators.required,
        ]
      ],
      manufacturer: [
        null,
        [
          Validators.required,
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
      wake: [
        null,
        [
          Validators.required,
        ]
      ],
      max_range: [
        null,
        [
          Validators.required,
        ]
      ],
      max_flight_time_in_min: [
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
    this.aircraftTypesService.feedActivityBox();
    this.router.navigate(['../../'], { relativeTo: this.activeRoute });
  }

  changeRole(e) {

  }



  onSubmit() {
    this.submitted = true;

    // stop here if form is invalid
    if (this.formGroup.invalid) {
      return;
    }

    if (this.id) {
      this.aircraftTypesService.update(this.id, this.formGroup.value);
    } else {
      this.aircraftTypesService.create(this.formGroup.value);
    }
  }

}
