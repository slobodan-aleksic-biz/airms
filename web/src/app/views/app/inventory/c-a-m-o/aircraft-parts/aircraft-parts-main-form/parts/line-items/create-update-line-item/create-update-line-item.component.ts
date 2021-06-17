import { Component, OnInit, ViewEncapsulation, Output, EventEmitter, Input, OnDestroy, SimpleChanges } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ValidatorFn, ValidationErrors } from '@angular/forms';
import { ActivatedRoute, ParamMap, Router } from '@angular/router';

import { IOption } from 'ng-select';
import { ToasterService, ToasterConfig } from 'angular2-toaster/angular2-toaster';
import { StocksService } from '../../../../../../../shared/stocks/stocks.service';
import { LineItemsService } from '../line-items.service';
import { BsDatepickerConfig } from 'ngx-bootstrap';
import { DatePipe } from '@angular/common';
import { ShopsService } from '../../../../../../../shared/shops/shops.service';



@Component({
  selector: 'app-create-update-line-item',
  templateUrl: './create-update-line-item.component.html',
  styleUrls: ['../../../../../../../../../../scss/vendors/toastr/toastr.scss'],
  encapsulation: ViewEncapsulation.None,
  // encapsulation: ViewEncapsulation.None,
  providers: [
    StocksService,
    ShopsService,
    DatePipe
  ]
})
export class CreateUpdateLineItemComponent implements OnInit, OnDestroy {

  @Input('lineItemId') id: number;
  @Input('lineItem') lineItem: any;
  @Input('lineItems') lineItems: any;
  @Input('firstLineItem') firstLineItem: any;
  @Input('lastLineItem') lastLineItem: any;

  @Input('part') part: any;
  @Input('partId') partId: number;

  @Input('stockItem') stockItem: any;
  @Input('stockItemId') stockItemId: number;

  @Input('totalQtyBalance') totalQtyBalance: number;
  @Input('totalOutputQty') totalOutputQty: number;

  @Input('action') action: string;

  @Output('onSave') onSaveEventEmitter = new EventEmitter<string>();
  @Output('onCancel') onCancelEventEmitter = new EventEmitter<boolean>();

  title: string;
  bin: string;

  constMaxQty: number = 5000;


  bsConfig: Partial<BsDatepickerConfig> = new BsDatepickerConfig();

  formGroup: FormGroup;
  submitted = false;

  isPartOrArticleFromMro: boolean = false;

  minDate: any;

  maxQuantity: number = 0;
  currentQuantity: number = 0;

  errorMessages: any;

  stocks: Array<IOption> = [];
  shops: Array<IOption> = [];
  locations: Array<IOption> = [];

  engineers: Array<IOption> = [];
  technicians: Array<IOption> = [];

  conditions: Array<IOption> = [];
  conditionVal: string = null;
  unserviceableConditions: Array<IOption> = [];

  formRules = {
    timeSinceNewMaxLength: 120,
    timeSinceNewMinLength: 4,

    cyclesSinceNewMaxLength: 120,
    cyclesSinceNewMinLength: 4,

    daysSinceNewMaxLength: 120,
    daysSinceNewMinLength: 4,

    timeSinceOverhaulMaxLength: 120,
    timeSinceOverhaulMinLength: 4,

    cyclesSinceOverhaulMaxLength: 120,
    cyclesSinceOverhaulMinLength: 4,

    daysSinceOverhaulMaxLength: 120,
    daysSinceOverhaulMinLength: 4,


    part_numMaxLength: 120,
    part_numMinLength: 3,

    invoice_refMaxLength: 120,
    invoice_refMinLength: 3,

    quantityMaxLength: 120,
    quantityMinLength: 1,
    quantityMax: 1000,
    quantityMin: 1,

    certificateDateMaxLength: 10,
    certificateDateMinLength: 10,

    inputDateMaxLength: 10,
    inputDateMinLength: 10,

    shelfLifeMaxLength: 10,
    shelfLifeMinLength: 0,

    noteMinLength: 4,

    number: '[0-9]+',
  };

  error_messages = {
    // time_since_new: [
    //   { type: "required", message: "Time Since New is required" },
    //   { type: "pattern", message: "Must be a number!" },
    //   {
    //     type: "maxlength",
    //     message: "The lenght must be lower than " + (this.formRules.timeSinceNewMaxLength - 1) + " digits"
    //   },
    //   {
    //     type: "minlength",
    //     message: "The length must be grater than " + (this.formRules.timeSinceNewMinLength - 1) + " digits"
    //   },
    // ],

    // cycles_since_new: [
    //   { type: "required", message: "Days Since New is required" },
    //   { type: "pattern", message: "Must be a number!" },
    //   {
    //     type: "maxlength",
    //     message: "The lenght must be lower than " + (this.formRules.cyclesSinceNewMaxLength - 1) + " digits"
    //   },
    //   {
    //     type: "minlength",
    //     message: "The length must be grater than " + (this.formRules.cyclesSinceNewMinLength - 1) + " digits"
    //   },
    // ],

    // days_since_new: [
    //   { type: "required", message: "Days Since New is required" },
    //   { type: "pattern", message: "Must be a number!" },
    //   {
    //     type: "maxlength",
    //     message: "The lenght must be lower than " + (this.formRules.daysSinceNewMaxLength - 1) + " digits"
    //   },
    //   {
    //     type: "minlength",
    //     message: "The length must be grater than " + (this.formRules.daysSinceNewMinLength - 1) + " digits"
    //   },
    // ],

    // time_since_overhaul: [
    //   { type: "required", message: "Time Since Overhaul is required" },
    //   { type: "pattern", message: "Must be a number!" },
    //   {
    //     type: "maxlength",
    //     message: "The lenght must be lower than " + (this.formRules.timeSinceOverhaulMaxLength - 1) + " digits"
    //   },
    //   {
    //     type: "minlength",
    //     message: "The length must be grater than " + (this.formRules.timeSinceOverhaulMinLength - 1) + " digits"
    //   },
    // ],

    // cycles_since_overhaul: [
    //   { type: "required", message: "Days Since Overhaul is required" },
    //   { type: "pattern", message: "Must be a number!" },
    //   {
    //     type: "maxlength",
    //     message: "The lenght must be lower than " + (this.formRules.cyclesSinceOverhaulMaxLength - 1) + " digits"
    //   },
    //   {
    //     type: "minlength",
    //     message: "The length must be grater than " + (this.formRules.cyclesSinceOverhaulMinLength - 1) + " digits"
    //   },
    // ],

    // days_since_overhaul: [
    //   { type: "required", message: "Days Since Overhaul is required" },
    //   { type: "pattern", message: "Must be a number!" },
    //   {
    //     type: "maxlength",
    //     message: "The lenght must be lower than " + (this.formRules.daysSinceOverhaulMaxLength - 1) + " digits"
    //   },
    //   {
    //     type: "minlength",
    //     message: "The length must be grater than " + (this.formRules.daysSinceOverhaulMinLength - 1) + " digits"
    //   },
    // ],


    note: [
      { type: "required", message: "Note is required" },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.noteMinLength - 1) + " characters"
      },
    ],


    part_num: [
      { type: "required", message: "Part Num is required" },
      { type: "pattern", message: "Must be a number!" },
      {
        type: "maxlength",
        message: "The lenght must be lower than " + (this.formRules.part_numMaxLength - 1) + " digits"
      },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.part_numMinLength - 1) + " digits"
      },
    ],


    invoice_ref: [
      { type: "required", message: "Invoice Ref is required" },
      { type: "pattern", message: "Must be a number!" },
      {
        type: "maxlength",
        message: "The lenght must be lower than " + (this.formRules.invoice_refMaxLength - 1) + " digits"
      },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.invoice_refMinLength - 1) + " digits"
      },
    ],

    quantity: [
      { type: "required", message: "Quantity is required" },
      { type: "pattern", message: "Must be a number!" },
      {
        type: "maxlength",
        message: "The lenght must be lower than " + (this.formRules.quantityMaxLength - 1) + " digits"
      },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.quantityMinLength - 1) + " digits"
      },
      {
        type: "max",
        message: "The value must be lower than " + (this.formRules.quantityMax - 1)
      },
      {
        type: "min",
        message: "The value must be grater than " + (this.formRules.quantityMin - 1)
      },
    ],



    stock_id: [
      { type: "required", message: "Stock is required" },
    ],
    stock_position: [
      { type: "required", message: "Stock Position is required" },
    ],

    location: [
      { type: "required", message: "Location is required" },
    ],

    certificate_date: [
      { type: "required", message: "Certificate Date is required" },
      { type: "pattern", message: "Must be a date!" },
      {
        type: "maxlength",
        message: "The lenght must be lower than " + (this.formRules.certificateDateMaxLength - 1) + " digits"
      },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.certificateDateMinLength - 1) + " digits"
      },
    ],

    input_date: [
      { type: "required", message: "Input Date is required" },
      { type: "pattern", message: "Must be a date!" },
      {
        type: "maxlength",
        message: "The lenght must be lower than " + (this.formRules.inputDateMaxLength - 1) + " digits"
      },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.inputDateMinLength - 1) + " digits"
      },
    ],



    engineer_id: [
      { type: "required", message: "Engineer is required" },
    ],

    technician_id: [
      { type: "required", message: "Technician is required" },
    ],

    condition: [
      { type: "required", message: "Condition is required" },
    ],


    shelf_life: [
      { type: "required", message: "Shelf Life is required" },
      { type: "pattern", message: "Must be a number!" },
      {
        type: "maxlength",
        message: "The lenght must be lower than " + (this.formRules.shelfLifeMaxLength - 1) + " digits"
      },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.shelfLifeMinLength - 1) + " digits"
      },
    ],

    shelf_life_alarm: [
      { type: "required", message: "Shelf Life Alarm is required" },
      { type: "pattern", message: "Must be a number!" },
    ],

  };

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private activeRoute: ActivatedRoute,
    private lineItemsService: LineItemsService,
    private toasterService: ToasterService,
    private stocksService: StocksService,
    private shopsService: ShopsService,
    private datePipe: DatePipe,
  ) { }



  async ngOnInit(): Promise<void> {

    this.bsConfig.dateInputFormat = 'Y-MM-DD';
    this.init(true);

  }

  public init(switchOn = true) {
    if(switchOn) {

      setTimeout(() => {

        if(this.stockItem.component_type === 'expendable') {
          if(this.lineItem) {
            this.isPartOrArticleFromMro = this.lineItem.did_it_come_from_mro_or_st === 1 ? true : false;
          } else {
            this.isPartOrArticleFromMro = this.lastLineItem.location === 'mro' || this.lastLineItem.location === 'transfer_to' ? true : false;
          }
        } else {
          this.isPartOrArticleFromMro = this.lastLineItem.location === 'mro' || this.lastLineItem.location === 'transfer_to' ? true : false;
        }
      }, 400);

    }

    this.stocksService.feedStocksDropDown()
      .then(
        (data) => {
          const stocks = [];

          data.forEach(
            (res: any) => {
              if (this.action === 'transfer_to') {
                if (this.lastLineItem.stock_id !== res.id) {
                  stocks.push({
                    label: res.name_left.toString(),
                    value: res.id.toString(),
                  });
                }
              } else {
                stocks.push({
                  label: res.name_left.toString(),
                  value: res.id.toString(),
                });
              }
            }
          );

          this.stocks = stocks;
        }
      );

    this.shopsService.feedShopsDropDown()
      .then(
        (data) => {
          const shops = [];

          data.forEach(
            (res: any) => {
              shops.push({
                label: res.name_left.toString(),
                value: res.id.toString(),
              });
            }
          );

          this.shops = shops;
        }
      );

    this.lineItemsService.feedLocationsDropDown(this.stockItemId, this.partId)
      .then(
        (data) => {
          const locations = [];

          data.forEach(
            (res: any) => {
              locations.push({
                label: res.name_left.toString(),
                value: res.id.toString(),
              });
            }
          );

          this.locations = locations;
        }
      );


    this.lineItemsService.feedEngineersDropDown()
      .then(
        (data) => {
          const engineers = [];

          data.forEach(
            (res: any) => {
              engineers.push({
                label: res.name.toString(),
                value: res.id.toString(),
              });
            }
          );

          this.engineers = engineers;
        }
      );

    this.lineItemsService.feedTechniciansDropDown()
      .then(
        (data) => {
          const technicians = [];

          data.forEach(
            (res: any) => {
              technicians.push({
                label: res.name.toString(),
                value: res.id.toString(),
              });
            }
          );

          this.technicians = technicians;
        }
      );


    this.lineItemsService.feedConditionsDropDown()
      .then(
        (data) => {
          const conditions = [];

          data.forEach(
            (res: any) => {
              conditions.push({
                label: res.toString(),
                value: res.toString(),
              });
            }
          );

          this.conditions = conditions;
        }
      );



    setTimeout(() => {

      if (this.id) {

        this.lineItemsService.get(this.id, this.partId, this.stockItemId)
          .subscribe(
            (data) => {
              const item = data;

              this.selectCondition({ value: item.condition.toString() });

              this.bin = item.input_output_doc_num_center;

              switch (this.stockItem.component_type) {
                case 'expendable':

                  this.isPartOrArticleFromMro = item.did_it_come_from_mro_or_st === 1 ? true : false;

                  switch (this.action) {
                    case 'stock':
                      if (!this.isPartOrArticleFromMro) {

                        this.formGroup.patchValue({

                          note: item.note ? item.note.toString() : null,

                          invoice_ref:
                            (
                              item.action.toString() === 'service'
                              ||
                              item.action.toString() === 'mro'
                              ||
                              item.action.toString() === 'transfer_to'
                            )
                              ?
                              null
                              :
                              item.invoice_ref_center.toString(),

                          quantity:
                            (
                              (
                                item.action.toString() === 'service'
                                ||
                                item.action.toString() === 'mro'
                                ||
                                item.action.toString() === 'transfer_to'
                              )
                                ? item.output_qty_right.toString()
                                : item.input_qty_right.toString()
                            ),

                          stock_id: item.stock_id.toString(),
                          stock_position: item.stock_position.toString(),

                          certificate_date: item.certificate_date_center.toString(),
                          input_date: item['input / output_date_center'].toString(),


                          location: item.action.toString(),


                          technician_id: item.technician_id.toString(),
                          condition: item.condition.toString(),

                          // unserviceable_condition: (this.stockItem.component_type !== 'expendable' && item.condition.toString() === 'unserviceable') ? item.unserviceable_condition.toString() : null,

                          shelf_life: this.stockItem.is_shelf_life_applicable ? item.shelf_life_right.toString() : null,
                          shelf_life_alarm: this.stockItem.is_shelf_life_applicable ? item.shelf_life_alarm_right.toString() : null,

                        });


                      } else {

                        this.formGroup.patchValue({

                          note: item.note ? item.note.toString() : null,

                          quantity:
                            (
                              (
                                item.action.toString() === 'service'
                                ||
                                item.action.toString() === 'mro'
                                ||
                                item.action.toString() === 'transfer_to'
                              )
                                ? item.output_qty_right.toString()
                                : item.input_qty_right.toString()
                            ),

                          stock_id: item.stock_id.toString(),
                          stock_position: item.stock_position.toString(),

                          input_date: item['input / output_date_center'].toString(),


                          location: item.action.toString(),


                          technician_id: item.technician_id.toString(),
                          condition: item.condition.toString(),

                          // unserviceable_condition: (this.stockItem.component_type !== 'expendable' && item.condition.toString() === 'unserviceable') ? item.unserviceable_condition.toString() : null,

                        });


                      }

                      break;
                    case 'mro':

                      this.formGroup.patchValue({

                        note: item.note ? item.note.toString() : null,

                        quantity:
                          (
                            (
                              item.action.toString() === 'service'
                              ||
                              item.action.toString() === 'mro'
                              ||
                              item.action.toString() === 'transfer_to'
                            )
                              ? item.output_qty_right.toString()
                              : item.input_qty_right.toString()
                          ),

                        input_date: item['input / output_date_center'].toString(),

                        technician_id: item.technician_id.toString(),

                        // unserviceable_condition: (this.stockItem.component_type !== 'expendable' && item.condition.toString() === 'unserviceable') ? item.unserviceable_condition.toString() : null,

                      });

                      break;
                    case 'service':

                      this.formGroup.patchValue({

                        note: item.note ? item.note.toString() : null,

                        quantity:
                          (
                            (
                              item.action.toString() === 'service'
                              ||
                              item.action.toString() === 'mro'
                              ||
                              item.action.toString() === 'transfer_to'
                            )
                              ? item.output_qty_right.toString()
                              : item.input_qty_right.toString()
                          ),

                        input_date: item['input / output_date_center'].toString(),

                        shop_id: item.shop_id.toString(),

                      });

                      break;
                    case 'transfer_to':

                      this.formGroup.patchValue({

                        note: item.note ? item.note.toString() : null,

                        quantity:
                          (
                            (
                              item.action.toString() === 'service'
                              ||
                              item.action.toString() === 'mro'
                              ||
                              item.action.toString() === 'transfer_to'
                            )
                              ? item.output_qty_right.toString()
                              : item.input_qty_right.toString()
                          ),

                        input_date: item['input / output_date_center'].toString(),

                        stock_id: item.stock_id.toString(),

                      });

                      break;
                  }

                  break;
                case 'repairable':
                case 'rotable':


                  switch (this.action) {
                    case 'stock':
                      if (!this.isPartOrArticleFromMro) {

                        this.formGroup.patchValue({

                          time_since_new: item.time_since_new_right ? item.time_since_new_right.toString() : null,
                          cycles_since_new: item.cycles_since_new_right ? item.cycles_since_new_right.toString() : null,
                          days_since_new: item.days_since_new_right ? item.days_since_new_right.toString() : null,

                          time_since_overhaul: item.time_since_overhaul_right ? item.time_since_overhaul_right.toString() : null,
                          cycles_since_overhaul: item.cycles_since_overhaul_right ? item.cycles_since_overhaul_right.toString() : null,
                          days_since_overhaul: item.days_since_overhaul_right ? item.days_since_overhaul_right.toString() : null,

                          part_num: item.part_num_left ? item.part_num_left.toString() : null,

                          note: item.note ? item.note.toString() : null,

                          invoice_ref:
                            (
                              item.action.toString() === 'service'
                              ||
                              item.action.toString() === 'mro'
                              ||
                              item.action.toString() === 'transfer_to'
                            )
                              ?
                              null
                              :
                              item.invoice_ref_center.toString(),

                          quantity:
                            (
                              (
                                item.action.toString() === 'service'
                                ||
                                item.action.toString() === 'mro'
                                ||
                                item.action.toString() === 'transfer_to'
                              )
                                ? item.output_qty_right.toString()
                                : item.input_qty_right.toString()
                            ),

                          stock_id: item.stock_id.toString(),
                          stock_position: item.stock_position.toString(),

                          certificate_date: item.certificate_date_center.toString(),
                          input_date: item['input / output_date_center'].toString(),


                          location: item.action.toString(),


                          technician_id: item.technician_id.toString(),
                          condition: item.condition.toString(),

                          unserviceable_condition: (this.stockItem.component_type !== 'expendable' && item.condition.toString() === 'unserviceable') ? item.unserviceable_condition.toString() : null,

                          shelf_life: this.stockItem.is_shelf_life_applicable ? item.shelf_life_right.toString() : null,
                          shelf_life_alarm: this.stockItem.is_shelf_life_applicable ? item.shelf_life_alarm_right.toString() : null,

                        });


                      } else {

                        this.formGroup.patchValue({

                          time_since_new: item.time_since_new_right ? item.time_since_new_right.toString() : null,
                          cycles_since_new: item.cycles_since_new_right ? item.cycles_since_new_right.toString() : null,
                          days_since_new: item.days_since_new_right ? item.days_since_new_right.toString() : null,

                          time_since_overhaul: item.time_since_overhaul_right ? item.time_since_overhaul_right.toString() : null,
                          cycles_since_overhaul: item.cycles_since_overhaul_right ? item.cycles_since_overhaul_right.toString() : null,
                          days_since_overhaul: item.days_since_overhaul_right ? item.days_since_overhaul_right.toString() : null,

                          part_num: item.part_num_left ? item.part_num_left.toString() : null,

                          note: item.note ? item.note.toString() : null,

                          quantity:
                            (
                              (
                                item.action.toString() === 'service'
                                ||
                                item.action.toString() === 'mro'
                                ||
                                item.action.toString() === 'transfer_to'
                              )
                                ? item.output_qty_right.toString()
                                : item.input_qty_right.toString()
                            ),

                          stock_id: item.stock_id.toString(),
                          stock_position: item.stock_position.toString(),

                          input_date: item['input / output_date_center'].toString(),


                          location: item.action.toString(),


                          technician_id: item.technician_id.toString(),
                          condition: item.condition.toString(),

                          unserviceable_condition: (this.stockItem.component_type !== 'expendable' && item.condition.toString() === 'unserviceable') ? item.unserviceable_condition.toString() : null,

                        });


                      }

                      break;
                    case 'mro':

                      this.formGroup.patchValue({

                        note: item.note ? item.note.toString() : null,

                        input_date: item['input / output_date_center'].toString(),

                        technician_id: item.technician_id.toString(),

                        // unserviceable_condition: (this.stockItem.component_type !== 'expendable' && item.condition.toString() === 'unserviceable') ? item.unserviceable_condition.toString() : null,

                      });

                      break;
                    case 'service':

                      this.formGroup.patchValue({

                        note: item.note ? item.note.toString() : null,

                        quantity:
                          (
                            (
                              item.action.toString() === 'service'
                              ||
                              item.action.toString() === 'mro'
                              ||
                              item.action.toString() === 'transfer_to'
                            )
                              ? item.output_qty_right.toString()
                              : item.input_qty_right.toString()
                          ),

                        input_date: item['input / output_date_center'].toString(),

                        shop_id: item.shop_id.toString(),

                      });

                      break;
                    case 'transfer_to':

                      this.formGroup.patchValue({

                        note: item.note ? item.note.toString() : null,

                        quantity:
                          (
                            (
                              item.action.toString() === 'service'
                              ||
                              item.action.toString() === 'mro'
                              ||
                              item.action.toString() === 'transfer_to'
                            )
                              ? item.output_qty_right.toString()
                              : item.input_qty_right.toString()
                          ),

                        input_date: item['input / output_date_center'].toString(),

                        stock_id: item.stock_id.toString(),

                      });

                      break;
                  }

                  break;
              }

              this.currentQuantity = parseInt(item.output_qty_right);
              this.totalMaxQtyValidation();
            });

        this.lineItemsService.feedActivityBox(this.stockItemId, this.partId, this.id);
      } else {
        this.totalMaxQtyValidation();
      }

      this.minDate = this.lastLineItem.input_date ? new Date(this.lastLineItem.input_date) : new Date();
      this.createForm();

    }, 500);
  }

  createForm() {

    let formBuilderGroups = {};

    switch (this.stockItem.component_type) {
      case 'expendable':

        switch (this.action) {
          case 'stock':

            if (!this.isPartOrArticleFromMro) {

              formBuilderGroups = {

                did_it_come_from_mro_or_st: [
                  null,
                  [
                    Validators.nullValidator,
                  ]
                ],

                note: [
                  null,
                  [
                    Validators.nullValidator,
                    Validators.minLength(this.formRules.noteMinLength),
                  ]
                ],

                invoice_ref: [
                  null,
                  [
                    Validators.required,
                  ]
                ],

                quantity: [
                  null,
                  [
                    Validators.required
                  ]
                ],

                stock_id: [
                  null,
                  [
                    (
                      !this.lastLineItem ||
                      (
                        this.lastLineItem.location === 'mro'
                        ||
                        this.lastLineItem.location === 'service'
                      )
                    )
                      ? Validators.required : Validators.nullValidator,
                  ]
                ],
                stock_position: [
                  null,
                  [
                    (
                      !this.lastLineItem ||
                      (
                        this.lastLineItem.location === 'mro'
                        ||
                        this.lastLineItem.location === 'service'
                      )
                    )
                      ? Validators.required : Validators.nullValidator,
                  ]
                ],

                certificate_date: [
                  null,
                  [
                    this.stockItem.is_shelf_life_applicable
                      &&
                      (
                        !this.lineItems
                        ||
                        (
                          this.lastLineItem.location === 'service'
                        )
                      )
                      ? Validators.required : Validators.nullValidator,
                  ]
                ],
                input_date: [
                  null,
                  [
                    Validators.required,
                  ]
                ],

                engineer_id: [
                  null,
                  [
                    Validators.nullValidator,
                  ]
                ],

                technician_id: [
                  null,
                  [
                    Validators.required,
                  ]
                ],

                condition: [
                  null,
                  [
                    Validators.required,
                  ]
                ],
                unserviceable_condition: [
                  null,
                  [
                    Validators.nullValidator,
                  ]
                ],
                shelf_life: [
                  null,
                  [
                    this.stockItem.is_shelf_life_applicable ? Validators.required : Validators.nullValidator,
                  ]
                ],
                shelf_life_alarm: [
                  null,
                  [
                    this.stockItem.is_shelf_life_applicable ? Validators.required : Validators.nullValidator,
                  ]
                ],
              };

            } else {

              formBuilderGroups = {

                did_it_come_from_mro_or_st: [
                  null,
                  [
                    Validators.nullValidator,
                  ]
                ],

                technician_id: [
                  null,
                  [
                    Validators.required,
                  ]
                ],

                stock_id: [
                  null,
                  [
                    (
                      !this.lastLineItem ||
                      (
                        this.lastLineItem.location === 'mro'
                        ||
                        this.lastLineItem.location === 'service'
                      )
                    )
                      ? Validators.required : Validators.nullValidator,
                  ]
                ],
                stock_position: [
                  null,
                  [
                    (
                      !this.lastLineItem ||
                      (
                        this.lastLineItem.location === 'mro'
                        ||
                        this.lastLineItem.location === 'service'
                      )
                    )
                      ? Validators.required : Validators.nullValidator,
                  ]
                ],


                quantity: [
                  null,
                  [
                    Validators.required
                  ]
                ],

                input_date: [
                  null,
                  [
                    Validators.required,
                  ]
                ],

                condition: [
                  null,
                  [
                    Validators.required,
                  ]
                ],

                note: [
                  null,
                  [
                    Validators.nullValidator,
                    Validators.minLength(this.formRules.noteMinLength),
                  ]
                ],

              };

            }

            break;
          case 'mro':
            formBuilderGroups = {

              technician_id: [
                null,
                [
                  Validators.required,
                ]
              ],

              input_date: [
                null,
                [
                  Validators.required
                ]
              ],

              quantity: [
                null,
                [
                  Validators.required
                ]
              ],

              note: [
                null,
                [
                  Validators.nullValidator,
                  Validators.minLength(this.formRules.noteMinLength),
                ]
              ],

            };
            break;
          case 'service':
            formBuilderGroups = {

              shop_id: [
                null,
                [
                  Validators.required,
                ]
              ],

              input_date: [
                null,
                [
                  Validators.required
                ]
              ],

              quantity: [
                null,
                [
                  Validators.required
                ]
              ],

              note: [
                null,
                [
                  Validators.nullValidator,
                  Validators.minLength(this.formRules.noteMinLength),
                ]
              ],

            };
            break;
          case 'transfer_to':
            formBuilderGroups = {

              stock_id: [
                null,
                [
                  Validators.required,
                ]
              ],

              input_date: [
                null,
                [
                  Validators.required
                ]
              ],

              quantity: [
                null,
                [
                  Validators.required
                ]
              ],

              note: [
                null,
                [
                  Validators.nullValidator,
                  Validators.minLength(this.formRules.noteMinLength),
                ]
              ],

            };
            break;
        }

        break;
      case 'repairable':
      case 'rotable':

        switch (this.action) {
          case 'stock':

            if (!this.isPartOrArticleFromMro) {

              formBuilderGroups = {

                did_it_come_from_mro_or_st: [
                  null,
                  [
                    Validators.nullValidator,
                  ]
                ],

                note: [
                  null,
                  [
                    Validators.nullValidator,
                    Validators.minLength(this.formRules.noteMinLength),
                  ]
                ],

                invoice_ref: [
                  null,
                  [
                    Validators.required,
                  ]
                ],

                stock_id: [
                  null,
                  [
                    (
                      !this.lastLineItem ||
                      (
                        this.lastLineItem.location === 'mro'
                        ||
                        this.lastLineItem.location === 'service'
                      )
                    )
                      ? Validators.required : Validators.nullValidator,
                  ]
                ],
                stock_position: [
                  null,
                  [
                    (
                      !this.lastLineItem ||
                      (
                        this.lastLineItem.location === 'mro'
                        ||
                        this.lastLineItem.location === 'service'
                      )
                    )
                      ? Validators.required : Validators.nullValidator,
                  ]
                ],

                certificate_date: [
                  null,
                  [
                    this.stockItem.is_shelf_life_applicable
                      &&
                      (
                        !this.lineItems
                        ||
                        (
                          this.lastLineItem.location === 'service'
                        )
                      )
                      ? Validators.required : Validators.nullValidator,
                  ]
                ],
                input_date: [
                  null,
                  [
                    Validators.required,
                  ]
                ],

                engineer_id: [
                  null,
                  [
                    Validators.nullValidator,
                  ]
                ],

                technician_id: [
                  null,
                  [
                    Validators.required,
                  ]
                ],

                condition: [
                  null,
                  [
                    Validators.required,
                  ]
                ],
                unserviceable_condition: [
                  null,
                  [
                    Validators.nullValidator,
                  ]
                ],
                shelf_life: [
                  null,
                  [
                    this.stockItem.is_shelf_life_applicable ? Validators.required : Validators.nullValidator,
                  ]
                ],
                shelf_life_alarm: [
                  null,
                  [
                    this.stockItem.is_shelf_life_applicable ? Validators.required : Validators.nullValidator,
                  ]
                ],


                time_since_new: [
                  null,
                  [
                    Validators.required
                  ]
                ],
                cycles_since_new: [
                  null,
                  [
                    Validators.required
                  ]
                ],
                days_since_new: [
                  null,
                  [
                    Validators.required
                  ]
                ],

                time_since_overhaul: [
                  null,
                  [
                    Validators.required
                  ]
                ],
                cycles_since_overhaul: [
                  null,
                  [
                    Validators.required
                  ]
                ],
                days_since_overhaul: [
                  null,
                  [
                    Validators.required
                  ]
                ],

                part_num: [
                  this.lastLineItem && this.lastLineItem.part_num ? this.lastLineItem.part_num : this.stockItem.init_part_num,
                  [
                    Validators.required
                  ]
                ],


              };

            } else {

              formBuilderGroups = {

                did_it_come_from_mro_or_st: [
                  null,
                  [
                    Validators.nullValidator,
                  ]
                ],

                technician_id: [
                  null,
                  [
                    Validators.required,
                  ]
                ],

                stock_id: [
                  null,
                  [
                    (
                      !this.lastLineItem ||
                      (
                        this.lastLineItem.location === 'mro'
                        ||
                        this.lastLineItem.location === 'service'
                      )
                    )
                      ? Validators.required : Validators.nullValidator,
                  ]
                ],
                stock_position: [
                  null,
                  [
                    (
                      !this.lastLineItem ||
                      (
                        this.lastLineItem.location === 'mro'
                        ||
                        this.lastLineItem.location === 'service'
                      )
                    )
                      ? Validators.required : Validators.nullValidator,
                  ]
                ],


                input_date: [
                  null,
                  [
                    Validators.required,
                  ]
                ],

                condition: [
                  null,
                  [
                    Validators.required,
                  ]
                ],
                unserviceable_condition: [
                  null,
                  [
                    Validators.nullValidator,
                  ]
                ],

                note: [
                  null,
                  [
                    Validators.nullValidator,
                    Validators.minLength(this.formRules.noteMinLength),
                  ]
                ],

              };

            }

            break;
          case 'mro':
            formBuilderGroups = {

              technician_id: [
                null,
                [
                  Validators.required,
                ]
              ],

              input_date: [
                null,
                [
                  Validators.required
                ]
              ],


              note: [
                null,
                [
                  Validators.nullValidator,
                  Validators.minLength(this.formRules.noteMinLength),
                ]
              ],

            };
            break;
          case 'service':


            formBuilderGroups = {

              shop_id: [
                null,
                [
                  Validators.required,
                ]
              ],

              input_date: [
                null,
                [
                  Validators.required
                ]
              ],

              note: [
                null,
                [
                  Validators.nullValidator,
                  Validators.minLength(this.formRules.noteMinLength),
                ]
              ],

            };
            break;
          case 'transfer_to':
            formBuilderGroups = {

              stock_id: [
                null,
                [
                  Validators.required,
                ]
              ],

              input_date: [
                null,
                [
                  Validators.required
                ]
              ],

              note: [
                null,
                [
                  Validators.nullValidator,
                  Validators.minLength(this.formRules.noteMinLength),
                ]
              ],

            };
            break;
        }

        break;
    }

    this.formGroup = this.formBuilder.group(formBuilderGroups);

  }



  public selectCondition(condition) {

    this.conditionVal = null;
    this.unserviceableConditions = null;
    this.unserviceableConditionValidation(false);
    if (this.stockItem.component_type !== 'expendable') {
      this.conditionVal = condition.value;

      if (this.conditionVal === 'unserviceable') {
        this.lineItemsService.feedUnserviceableConditionsDropDown(this.conditionVal)
          .then(
            (data) => {
              let unserviceableConditions = [];

              data.forEach(
                (res: any) => {
                  unserviceableConditions.push({
                    label: res.toString(),
                    value: res.toString(),
                  });
                }
              );
              this.unserviceableConditions = unserviceableConditions;
              this.unserviceableConditionValidation(true);
            }
          );
      }
    }
  }

  public deselectCondition(condition) {
    this.conditionVal = null;
    this.unserviceableConditions = null;
    this.unserviceableConditionValidation(false);
  }

  private unserviceableConditionValidation(isRequired: boolean) {
    if (this.stockItem.component_type !== 'expendable' && this.action === 'stock') {
      this.formGroup.get('unserviceable_condition')
        .setValidators([
          isRequired ? Validators.required : Validators.nullValidator
        ]);
      this.formGroup.get('unserviceable_condition').updateValueAndValidity();
    }
  }

  private async totalMaxQtyValidation() {


    if (this.stockItem.is_recoverable) {
      switch (this.action) {
        case 'mro':
        case 'service':
        case 'transfer_to':
          this.maxQuantity = this.totalQtyBalance > 0 ? (this.id ? parseInt(this.lastLineItem.qty_balance) + this.currentQuantity : this.totalQtyBalance) : this.constMaxQty;
          this.totalQtyBalance = (this.id ? parseInt(this.lastLineItem.qty_balance) + this.currentQuantity : this.totalQtyBalance);
          break;
        default:
          this.maxQuantity = !this.lineItems || this.action === 'stock' ? this.constMaxQty : this.totalOutputQty;
          this.totalQtyBalance = this.lastLineItem.id ? (this.id ? parseInt(this.lastLineItem.qty_balance) + this.currentQuantity : this.totalQtyBalance) : this.constMaxQty ;
      }
    } else {
      switch (this.action) {
        case 'mro':
        case 'service':
        case 'transfer_to':
          this.maxQuantity = this.totalQtyBalance > 0 ? (this.id ? parseInt(this.lastLineItem.qty_balance) + this.currentQuantity : this.totalQtyBalance) : this.constMaxQty;
          this.totalQtyBalance = (this.id ? parseInt(this.lastLineItem.qty_balance) + this.currentQuantity : this.totalQtyBalance);
          break;
        default:
          this.maxQuantity = !this.lineItems || this.action === 'stock' ? this.constMaxQty : this.totalOutputQty;
          this.totalQtyBalance = this.lastLineItem.id ? (this.id ? parseInt(this.lastLineItem.qty_balance) + this.currentQuantity : this.totalQtyBalance) : this.constMaxQty ;
      }
    }

    if (this.stockItem.component_type === 'expendable') {
      if (this.lineItems) {
        this.formGroup.get('quantity')
          .setValidators([
            Validators.required,
            Validators.max(this.maxQuantity),
            Validators.min(this.formRules.quantityMin)
          ]);
      } else {
        this.maxQuantity = this.constMaxQty;
        this.formGroup.get('quantity')
          .setValidators([
            Validators.max(this.maxQuantity),
            Validators.nullValidator
          ]);
      }
    } else {
      this.formGroup.get('quantity')
        .setValidators([
          Validators.nullValidator
        ]);
    }
    this.formGroup.get('quantity').updateValueAndValidity();


    this.error_messages.quantity = [
      { type: "required", message: "Quantity is required" },
      { type: "pattern", message: "Must be a number!" },
      {
        type: "maxlength",
        message: "The lenght must be lower than " + (this.formRules.quantityMaxLength - 1) + " digits"
      },
      {
        type: "minlength",
        message: "The length must be grater than " + (this.formRules.quantityMinLength - 1) + " digits"
      },
      {
        type: "max",
        message: "The max value is " + this.maxQuantity
      },
      {
        type: "min",
        message: "The min value is " + this.formRules.quantityMin
      },
    ];
  }


  public onQuantity(e) {




    this.totalMaxQtyValidation();
  }


  onInputDateValueChange(e) {
    if (this.lastLineItem && e) {
      if (this.datePipe.transform(e, "yyyy-MM-dd") >= this.lastLineItem.input_date) {

      }
    }
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

    this.lineItemsService.feedActivityBox(this.stockItemId, this.partId);
    this.formGroup.reset();
    this.onCancelEventEmitter.emit(true);
  }

  onSubmit() {

    this.submitted = true;


    // stop here if form is invalid
    if (this.formGroup.invalid) {
      return;
    }

    let formVal = { ...this.formGroup.value, location: this.action };

    switch (this.stockItem.component_type) {
      case 'expendable':

        switch (this.action) {
          case 'stock':
            if (this.lastLineItem) {
              formVal = { ...this.lastLineItem, ...this.formGroup.value, location: this.action, did_it_come_from_mro_or_st: this.isPartOrArticleFromMro };
            } else {
              formVal = { ...this.formGroup.value, location: this.action, did_it_come_from_mro_or_st: this.isPartOrArticleFromMro };
            }
            break;
          case 'mro':
          case 'service':
          case 'transfer_to':
            formVal = { ...this.lastLineItem, ...this.formGroup.value, location: this.action };
            console.log(formVal);
            break;
        }

        break;
      case 'repairable':
      case 'rotable':

        switch (this.action) {
          case 'stock':
            if (this.lastLineItem) {
              formVal = { ...this.lastLineItem, ...this.formGroup.value, location: this.action, did_it_come_from_mro_or_st: this.isPartOrArticleFromMro };
            } else {
              formVal = { ...this.formGroup.value, location: this.action, did_it_come_from_mro_or_st: this.isPartOrArticleFromMro };
            }
            break;
          case 'mro':
          case 'service':
          case 'transfer_to':

            const additionalFormItems = {
              time_since_new: this.lastLineItem.time_since_new_right,
              cycles_since_new: this.lastLineItem.cycles_since_new_right,
              days_since_new: this.lastLineItem.days_since_new_right,

              time_since_overhaul: this.lastLineItem.time_since_overhaul_right,
              cycles_since_overhaul: this.lastLineItem.cycles_since_overhaul_right,
              days_since_overhaul: this.lastLineItem.days_since_overhaul_right,
            };


            formVal = { ...additionalFormItems, ...this.lastLineItem, ...this.formGroup.value, location: this.action };
            console.log(formVal);
            break;
        }

        break;
    }


    if (this.id) {
      this.lineItemsService.update(this.id, formVal, this.stockItemId, this.part.id, this.toasterService)
        .then((bin: any) => {
          if (bin) {
            this.formGroup.reset();
            this.onSaveEventEmitter.emit(bin);
          }
        });
    } else {
      this.lineItemsService.create(formVal, this.stockItemId, this.part.id, this.toasterService)
        .then((bin: any) => {
          if (bin) {
            this.formGroup.reset();
            this.onSaveEventEmitter.emit(bin);
          }
        });
    }
  }

  isPartOrArticleFromMroToggle(e) {
    this.init(this.stockItem.component_type !== 'expendable');
    this.isPartOrArticleFromMro = e.target.checked;
    this.createForm();
  }

  ngOnDestroy() {
    this.formGroup.reset();
  }

}
