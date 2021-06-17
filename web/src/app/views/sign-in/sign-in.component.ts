import { Component, OnInit } from "@angular/core";
import { FormGroup, FormBuilder, Validators } from "@angular/forms";
import { Router } from "@angular/router";

import { AuthService } from "../../auth/auth.service";

@Component({
  selector: "app-dashboard",
  templateUrl: "sign-in.component.html"
})
export class SignInComponent implements OnInit {
  loginFormGroup: FormGroup;

  errorMessage: string;

  error_messages = {
    email: [
      { type: "required", message: "Please enter an email" },
      { type: "pattern", message: "Must be an email!" },
      {
        type: "minlength",
        message: "The length must be grater than 5 characters"
      },
      {
        type: "maxlength",
        message: "The lenght must be lower than 70 characters"
      }
    ],
    password: [
      { type: "required", message: "Please enter a password" },
      { type: "pattern", message: "Password too week!" },
      {
        type: "minlength",
        message: "The length must be grater than 7 characters"
      },
      {
        type: "maxlength",
        message: "The lenght must be lower than 20 characters"
      }
    ]
  };

  formRules = {
    emailMin: 5,
    emailMax: 70,
    passwordMin: 6,
    passwordMax: 20,
    passwordPattern: '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}'
  };


  constructor(
    private formBuilder: FormBuilder,
    private authService: AuthService,
    private readonly router: Router
  ) { }

  ngOnInit() {

    this.loginFormGroup = this.formBuilder.group({
      email: [
        'slobodan.aleksic.mne@gmail.com',
        [
          Validators.required,
          Validators.email,
          Validators.minLength(this.formRules.emailMin),
          Validators.maxLength(this.formRules.emailMax)
        ]
      ],
      password: [
        'Password123',
        [
          Validators.required,
          Validators.minLength(this.formRules.passwordMin),
          Validators.maxLength(this.formRules.passwordMax),
          Validators.pattern(this.formRules.passwordPattern)
        ]
      ]
    });
  }

  signIn() {

    this.authService.signIn(this.loginFormGroup.value).subscribe(
      (value) => {
        let role =
          JSON.parse(
            JSON.stringify(
              JSON.parse(
                JSON.stringify(value)
              )['user']
            )
          )['role'];

        if (value) {

          switch (role) {
            case 'admin':
              this.router.navigate(['/home']);
              break;
            case 'part_145':
              this.router.navigate(['/home']);
              break;
            case 'camo':
              this.router.navigate(['/home']);
              break;
            case 'qa':
              this.router.navigate(['/home']);
              break;
            case 'mcc':
              this.router.navigate(['/home']);
              break;
            case 'stock':
              this.router.navigate(['/home']);
              break;
            case 'school':
              this.router.navigate(['/home']);
              break;
            case 'crew_member':
              this.router.navigate(['/home']);
              break;
            default:
              this.router.navigate(['/']);
              break;
          }

        }

      },
      (error) => {
        localStorage.clear();
        if (error && error.error && error.error.error) {
          this.errorMessage = error.error.error;
          setTimeout(() => {
            this.errorMessage = null;
          }, 2000);
        }
      }
    );
  }
}
