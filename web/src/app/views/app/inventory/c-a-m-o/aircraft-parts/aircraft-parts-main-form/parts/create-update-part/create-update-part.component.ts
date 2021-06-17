import { Component, OnInit, ViewEncapsulation, Output, EventEmitter, Input, OnDestroy } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';

import { IOption } from 'ng-select';
import { ToasterService, ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { AircraftTypesService } from '../../../../../../shared/aircrafts/aircraft-types/aircraft-types.service';
import { OwnersService } from '../../../../../../shared/owners/owners.service';
import { PartsService } from '../parts.service';
import { QuantityUnitsService } from '../../../../../../shared/quantity-units/quantity-units.service';
import { BsDatepickerConfig } from 'ngx-bootstrap';
import { AircraftsService } from '../../../../../../shared/aircrafts/aircrafts.service';


@Component({
  selector: 'app-create-update-part',
  templateUrl: './create-update-part.component.html',
  styleUrls: ['../../../../../../../../../scss/vendors/toastr/toastr.scss'],
  encapsulation: ViewEncapsulation.None,
  // encapsulation: ViewEncapsulation.None,
  providers: [
    AircraftTypesService,
    AircraftsService,
    OwnersService,
    QuantityUnitsService
  ]
})
export class CreateUpdatePartComponent implements OnInit, OnDestroy {

  @Input('part') part: any;
  @Input('partId') id: number;
  @Input('stockItem') stockItem: any;
  @Input('stockItemId') stockItemId: number;

  @Output('onSave') onSaveEventEmitter = new EventEmitter<string>();
  @Output('onCancel') onCancelEventEmitter = new EventEmitter<boolean>();

  title: string;

  bsConfig: Partial<BsDatepickerConfig> = new BsDatepickerConfig();

  formGroup: FormGroup;
  submitted = false;

  errorMessages: any;

  aircraftTypes: Array<IOption> = [];
  aircrafts: Array<IOption> = [];
  aircraftParts: Array<IOption> = [];

  owners: Array<IOption> = [];
  quantityUnits: Array<IOption> = [];



  formRules = {
    serialNumMaxLength: 120,
    serialNumMinLength: 3,
    batchNumMaxLength: 120,
    batchNumMinLength: 3,
    noteMinLength: 2,
  };

  error_messages = {
    serial_num: [
      { type: "required", message: "Serial Num is required" },
      { type: "pattern", message: "Must be a Serial Num!" },
      {
        type: "maxlength",
        message: "The lenght must be lower than " + (this.formRules.serialNumMaxLength - 1) + " characters"
      },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.serialNumMinLength - 1) + " characters"
      },
    ],
    batch_num: [
      { type: "required", message: "Batch Num is required" },
      { type: "pattern", message: "Must be a Batch Num!" },
      {
        type: "maxlength",
        message: "The lenght must be lower than " + (this.formRules.batchNumMaxLength - 1) + " characters"
      },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.batchNumMinLength - 1) + " characters"
      },
    ],
    quantity_alarm: [
      { type: "required", message: "Quantity Alarm is required" },
      { type: "pattern", message: "Must be a number!" },
    ],
    quantity_unit_id: [
      { type: "required", message: "Quantity Unit is required" },
    ],

    note: [
      { type: "required", message: "Note is required" },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.noteMinLength - 1) + " characters"
      },
    ],
    aircraft_type_id: [
      { type: "required", message: "Aircraft Type is required" },
    ],
    aircraft_id: [
      { type: "required", message: "Aircraft is required" },
    ],
    owner_id: [
      { type: "required", message: "Owner is required" },
    ],

  };

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private partsService: PartsService,
    private toasterService: ToasterService,
    private aircraftTypesService: AircraftTypesService,
    private aircraftsService: AircraftsService,
    private ownersService: OwnersService,
    private quantityUnitsService: QuantityUnitsService,
  ) { }

  async ngOnInit(): Promise<void> {

    this.bsConfig.dateInputFormat = 'Y-MM-DD';

    this.createForm();

    await this.aircraftTypesService.feedAircraftTypesDropDown()
      .then(
        (data) => {
          let aircraftTypes = [];

          data.forEach(
            (res: any) => {
              aircraftTypes.push({
                label: res.name_left.toString(),
                value: res.id.toString(),
              });
            }
          );

          this.aircraftTypes = aircraftTypes;
        }
      );

    this.ownersService.feedOwnersDropDown()
      .then(
        (data) => {
          let owners = [];

          data.forEach(
            (res: any) => {
              owners.push({
                label: res.name_left.toString(),
                value: res.id.toString(),
              });
            }
          );

          this.owners = owners;
        }
      );

    setTimeout(
      () => {

        if (this.stockItem.component_type === 'expendable') {
          this.quantityUnitsService.feedQuantityUnitsDropDownIsConsumableOrNot(this.stockItem.is_consumable)
            .then(
              (data) => {
                let quantityUnits = [];

                data.forEach(
                  (res: any) => {
                    quantityUnits.push({
                      label: res.name_left.toString(),
                      value: res.id.toString(),
                    });
                  }
                );

                this.quantityUnits = quantityUnits;

              }
            );
        }

      }, 500
    );



    this.init();
  }


  public init() {

    if (this.id && this.part && this.stockItem) {

      this.partsService.findPartById(this.stockItemId, this.id)
        .then(
          async (data: any) => {
            let item = data;

            await this.aircraftsService.feedAircraftsDropDown(item.aircraft_type_id.toString())
              .then(
                (data) => {
                  let aircrafts = [];

                  data.forEach(
                    (res: any) => {
                      aircrafts.push({
                        label: res.name_left.toString() + " (reg: " + res.reg_center.toString() + ", serial no: " + res.serial_no_center.toString() + ")",
                        value: res.id.toString(),
                      });
                    }
                  );
                  this.aircrafts = aircrafts;
                  this.formGroup.patchValue({
                    aircraft_type_id: this.stockItem.component_type === 'expendable' ? (item.aircraft_type_id ? item.aircraft_type_id.toString() : null) : item.aircraft_type_id.toString(),
                    aircraft_id: this.stockItem.component_type === 'expendable' ? (item.aircraft_id ? item.aircraft_id.toString() : null) : item.aircraft_id.toString(),
                  });
                }
              );


            setTimeout(async () => {

              if (this.stockItem.component_type === 'expendable') {
                this.formGroup.patchValue({
                  batch_num: item.batch_num.toString(),
                  note: item.note ? item.note.toString() : null,
                  is_depleted: item.is_depleted ? item.is_depleted.toString() : null,
                  quantity_alarm: item.quantity_alarm.toString(),
                  quantity_unit_id: item.quantity_unit_id.toString(),
                  aircraft_type_id: (item.aircraft_type_id ? item.aircraft_type_id.toString() : null),
                  aircraft_id: (item.aircraft_id ? item.aircraft_id.toString() : null),
                  owner_id: item.owner_id.toString(),
                });

              } else {

                await this.partsService.feedAircraftPartsDropDown(this.stockItem.id, item.aircraft_id.toString(), (this.id ? this.id : null))
                  .then(
                    (data) => {
                      let aircraftParts = [];

                      data.forEach(
                        (res: any) => {
                          aircraftParts.push({
                            label: res['s/n_left'].toString(),
                            value: res.id.toString(),
                          });
                        }
                      );

                      this.aircraftParts = aircraftParts;


                      this.formGroup.patchValue({
                        parent_part_id: (item.parent_part_id ? item.parent_part_id.toString() : null),
                      });

                    }
                  );

                this.formGroup.patchValue({
                  serial_num: item.serial_num.toString(),
                  note: item.note ? item.note.toString() : null,
                  is_depleted: item.is_depleted ? item.is_depleted.toString() : null,
                  aircraft_type_id: item.aircraft_type_id.toString(),
                  aircraft_id: item.aircraft_id.toString(),
                  parent_part_id: (item.parent_part_id ? item.parent_part_id.toString() : null),
                  owner_id: item.owner_id.toString(),
                });
              }

            }, 200);

          });

      this.partsService.feedActivityBox(this.stockItemId, this.id);
    }

  }

  createForm() {

    this.formGroup = this.formBuilder.group({
      serial_num: [
        null,
        [
          this.stockItem.component_type === 'expendable' ? Validators.nullValidator : Validators.required,
          Validators.maxLength(this.formRules.serialNumMaxLength),
          Validators.minLength(this.formRules.serialNumMinLength),
        ]
      ],
      batch_num: [
        null,
        [
          this.stockItem.component_type === 'expendable' ? Validators.required : Validators.nullValidator,
          Validators.maxLength(this.formRules.batchNumMaxLength),
          Validators.minLength(this.formRules.batchNumMinLength),
        ]
      ],
      quantity_alarm: [
        null,
        [
          this.stockItem.component_type === 'expendable' ? Validators.required : Validators.nullValidator,
        ]
      ],
      quantity_unit_id: [
        null,
        [
          this.stockItem.component_type === 'expendable' ? Validators.required : Validators.nullValidator,
        ]
      ],

      note: [
        null,
        [
          Validators.nullValidator,
          Validators.minLength(this.formRules.noteMinLength),
        ]
      ],
      is_depleted: [
        null,
        [
          Validators.nullValidator,
        ]
      ],

      aircraft_type_id: [
        null,
        [
          this.stockItem.component_type === 'expendable' ? Validators.nullValidator : Validators.required,
        ]
      ],
      aircraft_id: [
        null,
        [
          this.stockItem.component_type === 'expendable' ? Validators.nullValidator : Validators.required,
        ]
      ],
      parent_part_id: [
        null,
        [
          Validators.nullValidator
        ]
      ],
      owner_id: [
        null,
        [
          Validators.required,
        ]
      ],

    });

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

    this.partsService.feedActivityBox(this.stockItemId);
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
      this.partsService.update(this.id, this.formGroup.value, this.stockItemId, this.toasterService)
        .then((res) => {
          if (res) {
            let serialOrBatchNum = '';
            if (this.stockItem.component_type === 'expendable') {
              serialOrBatchNum = this.f.batch_num.value;
            } else {
              serialOrBatchNum = this.f.serial_num.value;
            }
            this.formGroup.reset();
            this.onSaveEventEmitter.emit(serialOrBatchNum);
          }
        });
    } else {

      this.partsService.create(this.formGroup.value, this.stockItemId, this.toasterService)
        .then((res) => {
          if (res) {
            let serialOrBatchNum = '';
            if (this.stockItem.component_type === 'expendable') {
              serialOrBatchNum = this.f.batch_num.value;
            } else {
              serialOrBatchNum = this.f.serial_num.value;
            }
            this.formGroup.reset();
            this.onSaveEventEmitter.emit(serialOrBatchNum);
          }
        });
    }
  }

  onAircraftTypeSelect(e) {

    const aircraftTypeId = e.value;
    this.aircraftsService.feedAircraftsDropDown(aircraftTypeId)
      .then(
        (data) => {
          let aircrafts = [];

          data.forEach(
            (res: any) => {
              aircrafts.push({
                label: res.name_left.toString() + " (reg: " + res.reg_center.toString() + ", serial no: " + res.serial_no_center.toString() + ")",
                value: res.id.toString(),
              });
            }
          );

          this.aircrafts = aircrafts;
        }
      );
  }

  onAircraftTypeDeselect(e) {
    this.aircrafts = null;
    this.aircraftParts = null;
  }

  onAircraftSelect(e) {

    const aircraftId = e.value;
    this.partsService.feedAircraftPartsDropDown(this.stockItem.id, aircraftId, (this.id ? this.id : null))
      .then(
        (data) => {
          let aircraftParts = [];

          data.forEach(
            (res: any) => {
              aircraftParts.push({
                label: res['s/n_left'].toString(),
                value: res.id.toString(),
              });
            }
          );

          this.aircraftParts = aircraftParts;
        }
      );
  }

  onAircraftDeselect(e) {
    this.aircraftParts = null;
  }

  ngOnDestroy() {
    this.aircraftTypes = null;
    this.aircrafts = null;
    this.aircraftParts = null;
    this.formGroup.reset();
  }

}
