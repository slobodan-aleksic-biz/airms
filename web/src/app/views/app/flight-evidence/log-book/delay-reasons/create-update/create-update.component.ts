import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { DelayReasonsService } from '../delay-reasons.service';

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

  delayTypes: Array<IOption> = [];

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private delayReasonsService: DelayReasonsService,
    private toasterService: ToasterService,
  ) { }

  ngOnInit(): void {

    this.errorMessages = {
      code_id: {
        required: 'Code ID is required',
      },
      code_str: {
        required: 'Code is required',
      },
      reason: {
        required: 'Reason is required',
      },
      description: {
        required: 'Description is required',
      },
      delay_type_id: {
        required: 'Delay Type is required',
      },
    };

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe((paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();

        this.delayReasonsService.feedDelayTypesDropDown()
          .then(
            (data) => {
              let delayTypes = [];

              data.forEach(
                (res: any) => {
                  delayTypes.push({
                    label: res.delay_type_left.toString(),
                    value: res.id.toString(),
                  });
                }
              );

              this.delayTypes = delayTypes;
            }
          );

        if (this.id) {
          this.title = "Edit Delay Reason";
          this.delayReasonsService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;
                this.formGroup.patchValue({
                  code_id: item.code_id.toString(),
                  code_str: item.code_str.toString(),
                  reason: item.reason.toString(),
                  description: item.description.toString(),
                  delay_type_id: item.delay_type_id.toString(),
                });
              });
          this.delayReasonsService.feedActivityBox(this.id);
        } else {
          this.title = "Create Delay Reason";
        }

      });



  }

  createForm() {

    this.formGroup = this.formBuilder.group({
      code_id: [
        null,
        [
          Validators.required,
        ]
      ],
      code_str: [
        null,
        [
          Validators.required,
        ]
      ],
      reason: [
        null,
        [
          Validators.required,
        ]
      ],
      description: [
        null,
        [
          Validators.required,
        ]
      ],
      delay_type_id: [
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
    this.delayReasonsService.feedActivityBox();
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
      this.delayReasonsService.update(this.id, this.formGroup.value);
    } else {
      this.delayReasonsService.create(this.formGroup.value);
    }
  }

}
