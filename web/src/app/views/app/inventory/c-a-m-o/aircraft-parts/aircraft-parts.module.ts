import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { ChartsModule } from 'ng2-charts';
import { BsDropdownModule } from 'ngx-bootstrap/dropdown';
import { ButtonsModule } from 'ngx-bootstrap/buttons';

import { AircraftPartsComponent } from './aircraft-parts.component';
import { AircraftPartsRoutingModule } from './aircraft-parts-routing.module';

import { HttpClientModule } from '@angular/common/http';
import { CommonModule } from '@angular/common';
import { DataTableModule } from 'angular2-datatable';
import { UnderscorelessPipe } from '../../../../../shared/pipes/underscorlesspipe';
import { DataFilterPipe } from '../../../../../shared/components/datatable/datafilterpipe';

import { ModalModule, BsDatepickerModule } from 'ngx-bootstrap';
import { ToasterService, ToasterModule } from 'angular2-toaster/angular2-toaster';
import { SelectModule } from 'ng-select';
import { CreateUpdateStockItemComponent } from './create-update-stock-item/create-update-stock-item.component';
import { AircraftPartsMainFormComponent } from './aircraft-parts-main-form/aircraft-parts-main-form.component';
import { PartsComponent } from './aircraft-parts-main-form/parts/parts.component';
import { LineItemsComponent } from './aircraft-parts-main-form/parts/line-items/line-items.component';
import { AdvancedSearchComponent } from './aircraft-parts-main-form/advanced-search/advanced-search.component';
import { CreateUpdatePartComponent } from './aircraft-parts-main-form/parts/create-update-part/create-update-part.component';
import { CreateUpdateLineItemComponent } from './aircraft-parts-main-form/parts/line-items/create-update-line-item/create-update-line-item.component';
import { AircraftPartsMainFormService } from './aircraft-parts-main-form/aircraft-parts-main-form.service';
import { PartsService } from './aircraft-parts-main-form/parts/parts.service';
import { LineItemsService } from './aircraft-parts-main-form/parts/line-items/line-items.service';
import { AdvancedSearchService } from './aircraft-parts-main-form/advanced-search/advanced-search.service';


@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    BsDropdownModule,
    ToasterModule.forChild(),
    ButtonsModule.forRoot(),
    AircraftPartsRoutingModule,
    DataTableModule,
    ModalModule.forChild(),
    BsDatepickerModule.forRoot(),
    SelectModule,
  ],
  declarations: [
    AircraftPartsMainFormComponent,
    AircraftPartsComponent,
    PartsComponent,
    LineItemsComponent,
    AdvancedSearchComponent,
    CreateUpdateStockItemComponent,
    CreateUpdatePartComponent,
    CreateUpdateLineItemComponent,
  ],
  exports: [ AircraftPartsRoutingModule ],
  providers: [
    AircraftPartsMainFormService,
    DataFilterPipe,
    UnderscorelessPipe,
    PartsService,
    LineItemsService,
    AdvancedSearchService,
    ToasterService,
  ]
})
export class AircraftPartsModule { }

