import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { FlightRoutesService } from '../flight-routes.service';
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
    private flightRoutesService: FlightRoutesService,
    private toasterService: ToasterService,
  ) { }

  ngOnInit(): void {

    this.errorMessages = {
      flight_no: {
        required: 'Flight No is required',
      },
      origin: {
        required: 'Origin is required',
      },
      destination: {
        required: 'Destination is required',
      },
    };

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe((paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();

        if (this.id) {
          this.title = "Edit Flight Route";
          this.flightRoutesService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;
                this.formGroup.patchValue({
                  flight_no: item.flight_no.toString(),
                  origin: item.origin.toString(),
                  destination: item.destination.toString(),
                });
              });
          this.flightRoutesService.feedActivityBox(this.id);
        } else {
          this.title = "Create Flight Route";
        }

      });

    this.flightRoutesService.feedAirportsDropDown()
      .then(
        (data) => {
          let destinations = [];

          data.forEach(
            (res: any) => {
              destinations.push({
                label: res.iata_code_center + '   (' + res.name_left + ')',
                value: res.id.toString(),
              });
            }
          );

          this.origins = destinations;
          this.destinations = destinations;
        }
      );

  }

  createForm() {

    this.formGroup = this.formBuilder.group({
      flight_no: [
        null,
        [
          Validators.required,
        ]
      ],
      origin: [
        null,
        [
          Validators.required,
        ]
      ],
      destination: [
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
    this.flightRoutesService.feedActivityBox();
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
      this.flightRoutesService.update(this.id, this.formGroup.value);
    } else {
      this.flightRoutesService.create(this.formGroup.value);
    }
  }

}
