import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { OwnersService } from '../owners.service';
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
    description: null
  };


  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private ownersService: OwnersService,
    private toasterService: ToasterService,
  ) { }

  ngOnInit(): void {

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe((paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();

        if (this.id) {
          this.title = "Edit Owner";
          this.ownersService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;
                this.formGroup.patchValue({
                  name: item.name,
                  description: item.description,
                });
              });
          this.ownersService.feedActivityBox(this.id);
        } else {
          this.title = "Create Owner";
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
    this.ownersService.feedActivityBox();
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

      this.ownersService.update(this.id, this.formGroup.value);

    } else {
      this.ownersService.create(this.formGroup.value);
    }
  }

}
