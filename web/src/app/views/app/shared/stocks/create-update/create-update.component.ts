import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';
import { StocksService } from '../stocks.service';
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

  airports: Array<IOption> = [];

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
    airport_id: {
      required: 'Airport is required',
    },
    description: null
  };


  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private stocksService: StocksService,
    private toasterService: ToasterService,
  ) { }

  ngOnInit(): void {


    this.stocksService.feedAirportsDropDown()
      .then(
        (data) => {
          let airports = [];

          data.forEach(
            (res: any) => {
              airports.push({
                label: res.iata_code_center + '   (' + res.name_left + ')',
                value: res.id.toString(),
              });
            }
          );

          this.airports = airports;
        }
      );

    this.id = parseInt(this.activeRoute.snapshot.paramMap.get('id'));
    this.activeRoute.paramMap
      .subscribe((paramMap: ParamMap) => {

        this.id = parseInt(paramMap.get('id'));

        this.createForm();

        if (this.id) {
          this.title = "Edit Stock";
          this.stocksService.get(this.id)
            .subscribe(
              (data) => {
                let item = data;

                this.formGroup.patchValue({
                  name: item.name,
                  airport_id: item.airport_id.toString(),
                  description: item.description,
                });
              });

          this.stocksService.feedActivityBox(this.id);
        } else {
          this.title = "Create Stock";
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
      airport_id: [
        null,
        [
          Validators.required,
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
    this.stocksService.feedActivityBox();
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

      this.stocksService.update(this.id, this.formGroup.value);

    } else {
      this.stocksService.create(this.formGroup.value);
    }
  }

}
