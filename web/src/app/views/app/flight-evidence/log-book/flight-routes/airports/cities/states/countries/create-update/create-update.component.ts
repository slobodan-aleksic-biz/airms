import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { CountriesService } from '../countries.service';

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
    private countriesService: CountriesService,
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
          this.title = "Edit Country";
          this.countriesService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;
                this.formGroup.patchValue({
                  name: item.name.toString(),
                  iso_code_2: item.iso_code_2.toString(),
                  iso_code_3: item.iso_code_3.toString(),
                  phone_code: item.phone_code.toString(),
                });
              });
          this.countriesService.feedActivityBox(this.id);
        } else {
          this.title = "Create Country";
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
      iso_code_2: [
        null,
        [
          Validators.required,
          Validators.maxLength(2),
          Validators.minLength(2),
        ]
      ],
      iso_code_3: [
        null,
        [
          Validators.required,
          Validators.maxLength(3),
          Validators.minLength(3),
        ]
      ],
      phone_code: [
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
    this.countriesService.feedActivityBox();
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
      this.countriesService.update(this.id, this.formGroup.value);
    } else {
      this.countriesService.create(this.formGroup.value);
    }
  }

}
