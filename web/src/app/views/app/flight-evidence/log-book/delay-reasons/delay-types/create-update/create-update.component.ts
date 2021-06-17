import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { DelayTypesService } from '../delay-types.service';

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
    private delayTypesService: DelayTypesService,
    private toasterService: ToasterService,
  ) { }

  ngOnInit(): void {

    this.errorMessages = {
      delay_type: {
        required: 'Delay Type is required',
      },
    };

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe((paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();

        if (this.id) {
          this.title = "Edit Delay Type";
          this.delayTypesService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;
                this.formGroup.patchValue({
                  delay_type: item.delay_type.toString(),
                });
              });
          this.delayTypesService.feedActivityBox(this.id);
        } else {
          this.title = "Create Delay Type";
        }

      });

  }

  createForm() {

    this.formGroup = this.formBuilder.group({
      delay_type: [
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
    this.delayTypesService.feedActivityBox();
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
      this.delayTypesService.update(this.id, this.formGroup.value);
    } else {
      this.delayTypesService.create(this.formGroup.value);
    }
  }

}
