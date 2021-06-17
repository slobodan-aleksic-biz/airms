import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { StatesService } from '../states.service';

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

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private statesService: StatesService,
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

        if (this.id) {
          this.title = "Edit State";
          this.statesService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;
                this.formGroup.patchValue({
                  name: item.name.toString(),
                  code: item.code,
                  country_id: item.country_id.toString(),
                });
              });
          this.statesService.feedActivityBox(this.id);
        } else {
          this.title = "Create State";
        }

      });

    this.statesService.feedCountriesDropDown()
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

          this.countries =  countries;
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
      code: [
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
    });

  }

  // convenience getter for easy access to form fields
  get f() { return this.formGroup.controls; }

  onReset() {

    this.submitted = false;
    this.formGroup.reset();

  }

  onCancel() {
    this.statesService.feedActivityBox();
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
      this.statesService.update(this.id, this.formGroup.value);
    } else {
      this.statesService.create(this.formGroup.value);
    }
  }

}
