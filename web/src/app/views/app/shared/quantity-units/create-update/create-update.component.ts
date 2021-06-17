import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { QuantityUnitsService } from '../quantity-units.service';
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


  formRules = {
    nameMaxLength: 120,
    nameMinLength: 1,
    // passwordPattern: '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}'
  };

  error_messages = {
    code: [
      { type: "required", message: "Code is required" },
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
    description: null
  };


  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private quantityUnitsService: QuantityUnitsService,
    private toasterService: ToasterService,
  ) { }

  ngOnInit(): void {

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe((paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();

        if (this.id) {
          this.title = "Edit Quantity Unit";
          this.quantityUnitsService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;
                this.formGroup.patchValue({
                  code: item.code.toString(),
                  name: item.name.toString(),
                  description: item.description.toString(),
                  is_consumable: item.is_consumable,
                });
              });
          this.quantityUnitsService.feedActivityBox(this.id);
        } else {
          this.title = "Create Quantity Unit";
        }

      });

  }

  createForm() {

    this.formGroup = this.formBuilder.group({
      code: [
        null,
        [
          Validators.required,
          Validators.maxLength(this.formRules.nameMaxLength),
          Validators.minLength(this.formRules.nameMinLength),
        ]
      ],
      name: [
        null,
        [
          Validators.required,
          Validators.maxLength(this.formRules.nameMaxLength),
          Validators.minLength(this.formRules.nameMinLength),
        ]
      ],
      description: [
        null,
        [
          Validators.nullValidator,
        ]
      ],
      is_consumable: [
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
    this.quantityUnitsService.feedActivityBox();
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

      this.quantityUnitsService.update(this.id, this.formGroup.value);

    } else {
      this.quantityUnitsService.create(this.formGroup.value);
    }
  }

}
