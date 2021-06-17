import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { AircraftsService } from '../aircrafts.service';

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

  aircraftTypes: Array<IOption> = [];

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private aircraftsService: AircraftsService,
    private toasterService: ToasterService,
  ) { }

  ngOnInit(): void {

    this.errorMessages = {
      code: {
        required: 'Code is required',
      },
      name: {
        required: 'First name is required',
      },
      description: {
      },
    };

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe((paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();

        this.aircraftsService.feedAircraftTypesDropDown()
          .then(
            (data) => {
              let aircraftTypes = [];

              data.forEach(
                (res: any) => {
                  aircraftTypes.push({
                    label: res.icao_code_center.toString() + '  (' + res.manufacturer_left.toString() + ')',
                    value: res.id.toString(),
                  });
                }
              );

              this.aircraftTypes = aircraftTypes;
            }
          );

        if (this.id) {
          this.title = "Edit Aircraft";
          this.aircraftsService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;
                this.formGroup.patchValue({
                  name: item.name.toString(),
                  reg: item.reg.toString(),
                  serial_no: item.serial_no.toString(),
                  number_of_seats: item.number_of_seats.toString(),
                  aircraft_type_id: item.aircraft_type_id.toString(),
                  status: item.status,
                });
              });
          this.aircraftsService.feedActivityBox(this.id);
        } else {
          this.title = "Create Aircraft";
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
      reg: [
        null,
        [
          Validators.required,
        ]
      ],
      serial_no: [
        null,
        [
          Validators.required,
        ]
      ],
      number_of_seats: [
        null,
        [
          Validators.required,
        ]
      ],
      aircraft_type_id: [
        null,
        [
          Validators.required,
        ]
      ],
      status: [
        true,
        [
          Validators.nullValidator
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
    this.aircraftsService.feedActivityBox();
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
      this.aircraftsService.update(this.id, this.formGroup.value);
    } else {
      this.aircraftsService.create(this.formGroup.value);
    }
  }

}
