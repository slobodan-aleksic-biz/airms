import { Component, OnInit, ViewEncapsulation, Output, EventEmitter, Input, OnDestroy } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';

import { IOption } from 'ng-select';
import { ToasterService, ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { ATAChaptersService } from '../../../../shared/a-t-a-chapters/a-t-a-chapters.service';
import { AircraftPartsMainFormService } from '../aircraft-parts-main-form/aircraft-parts-main-form.service';
import { ComponentTypesService } from '../../../../shared/component-types/component-types.service';
import { ComponentCategoriesService } from '../../../../shared/component-categories/component-categories.service';



@Component({
  selector: 'app-create-update-stock-item',
  templateUrl: './create-update-stock-item.component.html',
  // styleUrls: ['../../../../../../scss/vendors/toastr/toastr.scss'],
  // encapsulation: ViewEncapsulation.None,
  // encapsulation: ViewEncapsulation.None,
  providers: [
    ATAChaptersService,
    ComponentTypesService,
    ComponentCategoriesService,
  ]
})
export class CreateUpdateStockItemComponent implements OnInit, OnDestroy {

  @Input('stockItemId') id: number;

  @Output('onSave') onSaveEventEmitter = new EventEmitter<string>();
  @Output('onCancel') onCancelEventEmitter = new EventEmitter<boolean>();

  title: string;

  formGroup: FormGroup;
  submitted = false;

  errorMessages: any;

  aTAChapters: Array<IOption> = [];
  componentCategories: Array<IOption> = [];
  componentTypes: Array<IOption> = [];


  formRules = {
    nameMaxLength: 120,
    nameMinLength: 4,
    partNumMaxLength: 120,
    partNumMinLength: 2,
    // passwordPattern: '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}'
  };

  error_messages = {
    init_part_num: [
      { type: "required", message: "Initial Part Num is required" },
      { type: "pattern", message: "Must be an Initial Part Num!" },
      {
        type: "maxlength",
        message: "The lenght must be lower than " + (this.formRules.partNumMaxLength - 1) + " characters"
      },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.partNumMinLength - 1) + " characters"
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
    a_t_a_chapter_id: [
      { type: "required", message: "ATA Chapter is required" },
    ],
    component_category: [
      { type: "required", message: "Component Category is required" },
    ],
    component_type: [
      { type: "required", message: "Component Type is required" },
    ],
    description: null
  };

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private aircraftPartsMainFormService: AircraftPartsMainFormService,
    private toasterService: ToasterService,
    private aTAChaptersService: ATAChaptersService,
    private componentCategoriesService: ComponentCategoriesService,
    private componentTypeService: ComponentTypesService,
  ) { }

  async ngOnInit(): Promise<void> {

    await this.aTAChaptersService.feedATAChaptersDropDown()
      .then(
        (data) => {
          const aTAChapters = [];

          data.forEach(
            (res: any) => {
              aTAChapters.push({
                label: res.code_left.toString() + ' - ' + res.name_left.toString(),
                value: res.id.toString(),
              });
            }
          );

          this.aTAChapters = aTAChapters;
        }
      );

    await this.componentCategoriesService.feedComponentCategoriesDropDown()
      .then(
        (data) => {
          const componentCategories = [];

          data.forEach(
            (res: any) => {
              componentCategories.push({
                label: res.toString().replaceAll('_', ' ').toUpperCase(),
                value: res.toString(),
              });
            }
          );

          this.componentCategories = componentCategories;
        }
      );

    this.createForm();
    this.init();
  }


  public init() {
    this.formGroup.reset();
    if (this.id) {

      this.aircraftPartsMainFormService.findStockItemById(this.id)
        .then(
          (data: any) => {
            let item = data;

            this.selectComponentCategory({value: item.component_category.toString()});

            this.formGroup.patchValue({
              init_part_num: item.init_part_num.toString(),
              name: item.name.toString(),
              description: item.description ? item.description.toString() : null,
              a_t_a_chapter_id: item.a_t_a_chapter_id.toString(),
              component_category: item.component_category.toString(),
              component_type: item.component_type.toString(),
              is_consumable: item.is_consumable,
              is_recoverable: item.is_recoverable,
              is_dangerous_goods: item.is_dangerous_goods,
              is_shelf_life_applicable: item.is_shelf_life_applicable,
            });
          });

      this.aircraftPartsMainFormService.feedActivityBox(this.id);
    }

  }

  public selectComponentCategory(e) {
    this.feedComponentTypesDropDown(e.value);
  }

  private async feedComponentTypesDropDown(componentCategory: string) {
    await this.componentTypeService.feedComponentTypesDropDown(componentCategory)
      .then(
        (data) => {
          const componentTypes = [];

          data.forEach(
            (res: any) => {
              componentTypes.push({
                label: res.toString().replaceAll('_', ' ').toUpperCase(),
                value: res.toString(),
              });
            }
          );

          this.componentTypes = componentTypes;
        }
      );
  }

  createForm() {

    this.formGroup = this.formBuilder.group({
      init_part_num: [
        null,
        [
          Validators.required,
          Validators.maxLength(this.formRules.partNumMaxLength),
          Validators.minLength(this.formRules.partNumMinLength),
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
      a_t_a_chapter_id: [
        null,
        [
          Validators.required,
        ]
      ],
      component_category: [
        null,
        [
          Validators.required,
        ]
      ],
      component_type: [
        null,
        [
          Validators.required,
        ]
      ],
      is_consumable: [
        false,
        [
          Validators.nullValidator,
        ]
      ],
      is_recoverable: [
        false,
        [
          Validators.nullValidator,
        ]
      ],
      is_dangerous_goods: [
        false,
        [
          Validators.nullValidator,
        ]
      ],
      is_shelf_life_applicable: [
        false,
        [
          Validators.nullValidator,
        ]
      ],
    });

  }

  public changeIsConsumable(e) {
    console.log();
  }

  // convenience getter for easy access to form fields
  get f() { return this.formGroup.controls; }

  onReset(e) {
    e.preventDefault();

    this.submitted = false;
    this.formGroup.reset();

  }

  onCancel(e) {
    e.preventDefault();

    this.aircraftPartsMainFormService.feedActivityBox();
    this.formGroup.reset();
    this.onCancelEventEmitter.emit(true);
  }

  onSubmit() {

    this.submitted = true;

    // stop here if form is invalid
    if (this.formGroup.invalid) {
      return;
    }

    if (this.id) {
      this.aircraftPartsMainFormService.update(this.id, this.formGroup.value, this.toasterService)
        .then((res) => {
          if (res) {
            let partNum = this.f.init_part_num.value;
            this.formGroup.reset();
            this.onSaveEventEmitter.emit(partNum);
          }
        });
    } else {
      this.aircraftPartsMainFormService.create(this.formGroup.value, this.toasterService)
        .then((res) => {
          if (res) {
            let partNum = this.f.init_part_num.value;
            this.formGroup.reset();
            this.onSaveEventEmitter.emit(partNum);
          }
        });
    }
  }

  ngOnDestroy() {
    this.formGroup.reset();
  }

}
