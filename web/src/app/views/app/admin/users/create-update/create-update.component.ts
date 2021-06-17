import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { UsersService } from '../users.service';
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

  formGroup: FormGroup;
  submitted = false;

  errorMessages: any;

  formRules = {
    nonEmpty: '^[a-zA-Z0-9]+([_ -]?[a-zA-Z0-9])*$',
    emailMin: 5,
    emailMax: 70,
    passwordMin: 6,
    passwordMax: 20,
    passwordPattern: '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}'
  };


  error_messages = {
    name: {
      required: 'First name is required',
    },
    lastName: {
      required: 'Last name is required',
    },
    email: {
      required: 'required',
      email: 'Invalid email address',
    },
    entity: {
      required: 'Entity is required'
    },
    role: {
      required: 'Role is required'
    },
    password: {
      required: 'Password is required',
      pattern: 'Password must contain: numbers, uppercase and lowercase letters',
      minLength: `Password must be at least ${this.formRules.passwordMin} characters`
    },
    password_confirmation: {
      required: 'Password confirmation is required',
      passwordMismatch: 'Passwords must match'
    },
    is_active: {
      requiredTrue: 'User is disabled'
    },
  };

  // ng2-select
  public entities: Array<IOption> = [];
  public roles: Array<IOption> = [];
  public timezones: Array<IOption> = [];

  /** passwords must match - custom validator */
  confirmPasswordValidator: ValidatorFn = (control: FormGroup): ValidationErrors | null => {
    const password = control.get('password');
    const confirm = control.get('password_confirmation');
    return password && confirm && password.value === confirm.value ? null : { 'passwordMismatch': true };
  };

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private usersService: UsersService,
    private toasterService: ToasterService,
  ) { }

  async ngOnInit(): Promise<void> {

    await this.usersService.feedEntitiesDropDown()
    .then(
      (res: []) => {
        let entitiesArr = [];
        res.forEach((r: any) => {
          entitiesArr.push({
            label: r.label,
            value: r.value,
          });
        });
        this.entities = entitiesArr;
      }
    );

    await this.usersService.feedRolesDropDown(null)
    .then(
      (res: []) => {
        let rolesArr = [];
        res.forEach((r: any) => {
          rolesArr.push({
            label: r.label,
            value: r.value,
          });
        });
        this.roles = rolesArr;
      }
    );

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe((paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();

        if (this.id) {
          this.title = "Edit User";
          this.usersService.get(this.id)
            .subscribe(
              async (data) => {
                let item = data;

                await this.usersService.feedRolesDropDown(item.entity)
                .then(
                  (res: []) => {
                    let rolesArr = [];
                    res.forEach((r: any) => {
                      rolesArr.push({
                        label: r.label,
                        value: r.value,
                      });
                    });
                    this.roles = rolesArr;
                  }
                );

                this.formGroup.patchValue({
                  name: item.name,
                  email: item.email,
                  entity: item.entity,
                  role: item.role,
                  timezone: item.timezone,
                  is_active: item.is_active,
                });
              });
          this.usersService.feedActivityBox(this.id);
        } else {
          this.title = "Create User";
        }

      });


      this.usersService.feedTimezonesDropDown()
        .then(
          (res: []) => {
            let timezonesArr = [];
            res.forEach((r: any) => {
              timezonesArr.push({
                label: r,
                value: r,
              });
            });
            this.timezones = timezonesArr;
          }
        );
  }

  createForm() {

    this.formGroup = this.formBuilder.group({
      name: [
        null,
        [
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(70),
        ]
      ],
      email: [
        null,
        [
          Validators.required,
          Validators.email,
          Validators.minLength(this.formRules.emailMin),
          Validators.maxLength(this.formRules.emailMax),
        ]
      ],
      entity: [
        null,
        [
          Validators.required
        ]
      ],
      role: [
        null,
        [
          Validators.required
        ]
      ],
      timezone: [
        null,
        [
          Validators.required
        ]
      ],
      password: [
        null,
        [
          this.id ? Validators.nullValidator : Validators.required,
          Validators.minLength(this.formRules.passwordMin),
          Validators.pattern(this.formRules.passwordPattern)
        ]
      ],
      password_confirmation: [
        null,
        [
          this.id ? Validators.nullValidator : Validators.required,
        ]
      ],
      is_active: [
        true,
        [
          Validators.nullValidator
        ]
      ]
    }, { validator: this.confirmPasswordValidator });

  }

  // convenience getter for easy access to form fields
  get f() { return this.formGroup.controls; }

  onReset() {

    this.submitted = false;
    this.formGroup.reset();

  }

  onCancel() {
    this.usersService.feedActivityBox();
    this.router.navigate(['../../'], { relativeTo: this.activeRoute });
  }

  async selectEntity(e) {
    await this.usersService.feedRolesDropDown(e.value)
    .then(
      (res: []) => {
        let rolesArr = [];
        res.forEach((r: any) => {
          rolesArr.push({
            label: r.label,
            value: r.value,
          });
        });
        this.roles = rolesArr;
      }
    );
  }

  async deselectEntity(e) {
    this.roles = [];
  }

  onSubmit() {
    this.submitted = true;

    // stop here if form is invalid
    if (this.formGroup.invalid) {
      return;
    }

    if (this.id) {

      this.usersService.update(this.id, this.formGroup.value);

    } else {
      this.usersService.create(this.formGroup.value);
    }
  }

}
