<?php

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Api\AircraftController;
use App\Http\Controllers\Api\AircraftTypeController;
use App\Http\Controllers\Api\AirportController;
use App\Http\Controllers\Api\ATAChapterController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ComponentCategoryController;
use App\Http\Controllers\Api\ComponentTypeController;
use App\Http\Controllers\Api\ConditionController;
use App\Http\Controllers\Api\StockController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\CurrencyController;
use App\Http\Controllers\Api\DelayReasonController;
use App\Http\Controllers\Api\DelayTypeController;
use App\Http\Controllers\Api\LogBookController;
use App\Http\Controllers\Api\FlightRouteController;
use App\Http\Controllers\Api\LineItemController;
use App\Http\Controllers\Api\OwnerController;
use App\Http\Controllers\Api\PartController;
use App\Http\Controllers\Api\QuantityUnitController;
use App\Http\Controllers\Api\ShopController;
use App\Http\Controllers\Api\StateController;
use App\Http\Controllers\Api\StockItemController;
use App\Http\Controllers\Api\UserProfileController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\App\ActionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'Api\AuthController@login')->name('login');
    Route::post('logout', 'Api\AuthController@logout')->name('logout');
    Route::post('refresh', 'Api\AuthController@refresh')->name('refresh');
    Route::post('me', 'Api\AuthController@me')->name('me');
});



$admin = 'airms.auth:' . UserRoleEnum::ADMIN;
Route::name('api.' . UserRoleEnum::ADMIN . '.')
    ->middleware(['api', 'auth', $admin])
    ->prefix(UserRoleEnum::ADMIN)
    ->group(function () {

        Route::get('user-profile/avatar', [UserProfileController::class, 'avatar'])->name('usersProfile.avatar');

        // Users
        Route::get('users/engineers', [UsersController::class, 'engineers'])->name('users.engineers');
        Route::get('users/technicians', [UsersController::class, 'technicians'])->name('users.technicians');
        Route::get('users/captains', [UsersController::class, 'captains'])->name('users.captains');

        Route::get('users/activities', [UsersController::class, 'activities'])->name('users.activities');

        Route::get('users/timezones', [UsersController::class, 'timezones'])->name('users.timezones');
        Route::get('users/entities', [UsersController::class, 'entities'])->name('users.entities');
        Route::get('users/entities/{entity}/roles', [UsersController::class, 'roles'])->name('users.roles');
        Route::get('users', [UsersController::class, 'index'])->name('users');
        Route::get('users/{id}', [UsersController::class, 'show'])->name('users.show');
        Route::post('users/store', [UsersController::class, 'store'])->name('users.store');
        Route::put('users/{id}/update', [UsersController::class, 'update'])->name('users.update');
        Route::delete('users/{id}/delete', [UsersController::class, 'destroy'])->name('users.destroy');
        // Route::get('users/{user}', [UsersController::class, 'enableDisableUser'])->name('users.enableDisableUser');




        // Flight Evidence

        Route::get('flight-evidence/dashboard/{aircraftId}/last-30-days-stat', [LogBookController::class, 'last30daysStatPerDay'])->name('log-book.last30daysStatPerDay');

        // Flight Evidence

        Route::get('flight-evidence/reports/aircraft-statistics-pdf', [LogBookController::class, 'aircraftStatisticsPDF'])->name('log-book.aircraft-statistics-pdf');
        Route::get('flight-evidence/reports/aircraft-statistics-ui', [LogBookController::class, 'aircraftStatisticsUI'])->name('log-book.aircraft-statistics-ui');

        // Log Book

        Route::get('log-book/activities', [LogBookController::class, 'activities'])->name('log-book.activities');
        Route::get('log-book/{aircraftId}/aircraft-info', [LogBookController::class, 'aircraftInfo'])->name('log-book.aircraft-info');

        Route::get('log-book/{aircraftId}', [LogBookController::class, 'index'])->name('log-book');
        Route::get('log-book/{aircraftId}/{logBook}', [LogBookController::class, 'show'])->name('log-book.show');
        Route::post('log-book/{aircraftId}/store', [LogBookController::class, 'store'])->name('log-book.store');
        Route::put('log-book/{aircraftId}/{logBook}/update', [LogBookController::class, 'update'])->name('log-book.update');
        Route::delete('log-book/{aircraftId}/{logBook}/delete', [LogBookController::class, 'destroy'])->name('log-book.destroy');


        // Delay Types
        Route::get('delay-types/activities', [DelayTypeController::class, 'activities'])->name('delay-types.activities');

        Route::get('delay-types', [DelayTypeController::class, 'index'])->name('delay-types');
        Route::get('delay-types/{delayType}', [DelayTypeController::class, 'show'])->name('delay-types.show');
        Route::post('delay-types/store', [DelayTypeController::class, 'store'])->name('delay-types.store');
        Route::put('delay-types/{delayType}/update', [DelayTypeController::class, 'update'])->name('delay-types.update');
        Route::delete('delay-types/{delayType}/delete', [DelayTypeController::class, 'destroy'])->name('delay-types.destroy');


        // Delay Reasons
        Route::get('delay-reasons/activities', [DelayReasonController::class, 'activities'])->name('delay-reasons.activities');

        Route::get('delay-reasons', [DelayReasonController::class, 'index'])->name('delay-reasons');
        Route::get('delay-reasons/{delayReason}', [DelayReasonController::class, 'show'])->name('delay-reasons.show');
        Route::post('delay-reasons/store', [DelayReasonController::class, 'store'])->name('delay-reasons.store');
        Route::put('delay-reasons/{delayReason}/update', [DelayReasonController::class, 'update'])->name('delay-reasons.update');
        Route::delete('delay-reasons/{delayReason}/delete', [DelayReasonController::class, 'destroy'])->name('delay-reasons.destroy');




        // Flight Routes
        Route::get('flight-routes/activities', [FlightRouteController::class, 'activities'])->name('flight-routes.activities');

        Route::get('flight-routes', [FlightRouteController::class, 'index'])->name('flight-routes');
        Route::get('flight-routes/{flightRoute}', [FlightRouteController::class, 'show'])->name('flight-routes.show');
        Route::post('flight-routes/store', [FlightRouteController::class, 'store'])->name('flight-routes.store');
        Route::put('flight-routes/{flightRoute}/update', [FlightRouteController::class, 'update'])->name('flight-routes.update');
        Route::delete('flight-routes/{flightRoute}/delete', [FlightRouteController::class, 'destroy'])->name('flight-routes.destroy');

        // Aircraft Types
        Route::get('aircraft-types/activities', [AircraftTypeController::class, 'activities'])->name('aircraft-types.activities');

        Route::get('aircraft-types', [AircraftTypeController::class, 'index'])->name('aircraft-types');
        Route::get('aircraft-types/{aircraftType}', [AircraftTypeController::class, 'show'])->name('aircraft-types.show');
        Route::post('aircraft-types/store', [AircraftTypeController::class, 'store'])->name('aircraft-types.store');
        Route::put('aircraft-types/{aircraftType}/update', [AircraftTypeController::class, 'update'])->name('aircraft-types.update');
        Route::delete('aircraft-types/{aircraftType}/delete', [AircraftTypeController::class, 'destroy'])->name('aircraft-types.destroy');

        // Aircrafts
        Route::get('aircrafts/activities', [AircraftController::class, 'activities'])->name('aircrafts.activities');

        Route::get('aircrafts', [AircraftController::class, 'index'])->name('aircrafts');
        Route::get('aircrafts/{aircraft}', [AircraftController::class, 'show'])->name('aircrafts.show');
        Route::post('aircrafts/store', [AircraftController::class, 'store'])->name('aircrafts.store');
        Route::put('aircrafts/{aircraft}/update', [AircraftController::class, 'update'])->name('aircrafts.update');
        Route::delete('aircrafts/{aircraft}/delete', [AircraftController::class, 'destroy'])->name('aircrafts.destroy');

        // Shops
        Route::get('shops/activities', [ShopController::class, 'activities'])->name('shops.activities');

        Route::get('shops', [ShopController::class, 'index'])->name('shops');
        Route::get('shops/{shop}', [ShopController::class, 'show'])->name('shops.show');
        Route::post('shops/store', [ShopController::class, 'store'])->name('shops.store');
        Route::put('shops/{shop}/update', [ShopController::class, 'update'])->name('shops.update');
        Route::delete('shops/{shop}/delete', [ShopController::class, 'destroy'])->name('shops.destroy');

        // Airports
        Route::get('airports/activities', [AirportController::class, 'activities'])->name('airports.activities');

        Route::get('airports', [AirportController::class, 'index'])->name('airports');
        Route::get('airports/{airport}', [AirportController::class, 'show'])->name('airports.show');
        Route::post('airports/store', [AirportController::class, 'store'])->name('airports.store');
        Route::put('airports/{airport}/update', [AirportController::class, 'update'])->name('airports.update');
        Route::delete('airports/{airport}/delete', [AirportController::class, 'destroy'])->name('airports.destroy');

        // Cities
        Route::get('cities/activities', [CityController::class, 'activities'])->name('cities.activities');

        Route::get('cities', [CityController::class, 'index'])->name('cities');
        Route::get('cities/{city}', [CityController::class, 'show'])->name('cities.show');
        Route::post('cities/store', [CityController::class, 'store'])->name('cities.store');
        Route::put('cities/{city}/update', [CityController::class, 'update'])->name('cities.update');
        Route::delete('cities/{city}/delete', [CityController::class, 'destroy'])->name('cities.destroy');

        // States
        Route::get('states/activities', [StateController::class, 'activities'])->name('states.activities');

        Route::get('states', [StateController::class, 'index'])->name('states');
        Route::get('states/{state}', [StateController::class, 'show'])->name('states.show');
        Route::post('states/store', [StateController::class, 'store'])->name('states.store');
        Route::put('states/{state}/update', [StateController::class, 'update'])->name('states.update');
        Route::delete('states/{state}/delete', [StateController::class, 'destroy'])->name('states.destroy');

        // Countries
        Route::get('countries/activities', [CountryController::class, 'activities'])->name('countries.activities');

        Route::get('countries', [CountryController::class, 'index'])->name('countries');
        Route::get('countries/{country}', [CountryController::class, 'show'])->name('countries.show');
        Route::post('countries/store', [CountryController::class, 'store'])->name('countries.store');
        Route::put('countries/{country}/update', [CountryController::class, 'update'])->name('countries.update');
        Route::delete('countries/{country}/delete', [CountryController::class, 'destroy'])->name('countries.destroy');





        // ATA Chapter
        Route::get('ata-chapters/activities', [ATAChapterController::class, 'activities'])->name('ata-chapters.activities');

        Route::get('ata-chapters', [ATAChapterController::class, 'index'])->name('ata-chapters');
        Route::get('ata-chapters/{aTAChapter}', [ATAChapterController::class, 'show'])->name('ata-chapters.show');
        Route::post('ata-chapters/store', [ATAChapterController::class, 'store'])->name('ata-chapters.store');
        Route::put('ata-chapters/{aTAChapter}/update', [ATAChapterController::class, 'update'])->name('ata-chapters.update');
        Route::delete('ata-chapters/{aTAChapter}/delete', [ATAChapterController::class, 'destroy'])->name('ata-chapters.destroy');






        // Owner
        Route::get('owners/activities', [OwnerController::class, 'activities'])->name('owners.activities');

        Route::get('owners', [OwnerController::class, 'index'])->name('owners');
        Route::get('owners/{owner}', [OwnerController::class, 'show'])->name('owners.show');
        Route::post('owners/store', [OwnerController::class, 'store'])->name('owners.store');
        Route::put('owners/{owner}/update', [OwnerController::class, 'update'])->name('owners.update');
        Route::delete('owners/{owner}/delete', [OwnerController::class, 'destroy'])->name('owners.destroy');

        // Stock
        Route::get('stocks/activities', [StockController::class, 'activities'])->name('stocks.activities');

        Route::get('stocks', [StockController::class, 'index'])->name('stocks');
        Route::get('stocks/{stock}', [StockController::class, 'show'])->name('stocks.show');
        Route::post('stocks/store', [StockController::class, 'store'])->name('stocks.store');
        Route::put('stocks/{stock}/update', [StockController::class, 'update'])->name('stocks.update');
        Route::delete('stocks/{stock}/delete', [StockController::class, 'destroy'])->name('stocks.destroy');

        // Stock
        Route::get('stocks/activities', [StockController::class, 'activities'])->name('stocks.activities');

        Route::get('stocks', [StockController::class, 'index'])->name('stocks');
        Route::get('stocks/{stock}', [StockController::class, 'show'])->name('stocks.show');
        Route::post('stocks/store', [StockController::class, 'store'])->name('stocks.store');
        Route::put('stocks/{stock}/update', [StockController::class, 'update'])->name('stocks.update');
        Route::delete('stocks/{stock}/delete', [StockController::class, 'destroy'])->name('stocks.destroy');

        // Quantity Unit
        Route::get('quantity-units/activities', [QuantityUnitController::class, 'activities'])->name('quantity-units.activities');

        Route::get('quantity-units', [QuantityUnitController::class, 'index'])->name('quantity-units');
        Route::get('quantity-units/{isConsumable}/is-consumable', [QuantityUnitController::class, 'showConsumableOrNon'])->name('quantity-units.is-consumable');
        Route::get('quantity-units/{quantityUnit}', [QuantityUnitController::class, 'show'])->name('quantity-units.show');
        Route::post('quantity-units/store', [QuantityUnitController::class, 'store'])->name('quantity-units.store');
        Route::put('quantity-units/{quantityUnit}/update', [QuantityUnitController::class, 'update'])->name('quantity-units.update');
        Route::delete('quantity-units/{quantityUnit}/delete', [QuantityUnitController::class, 'destroy'])->name('quantity-units.destroy');


                // Line Items
                Route::get('stock-items/{stockItem}/parts/{part}/line-items/activities', [LineItemController::class, 'activities'])->name('line-items.activities');

                Route::get('stock-items/advanced-search', [LineItemController::class, 'advancedSearch'])->name('advanced-search');
                Route::get('stock-items/{stockItem}/parts/{part}/line-items/locations', [LineItemController::class, 'showLocations'])->name('locations.show');
                Route::get('stock-items/{stockItem}/parts/{part}/line-items', [LineItemController::class, 'index'])->name('line-items');
                Route::get('stock-items/{stockItem}/parts/{part}/line-items/bin/{bin}', [LineItemController::class, 'findLineItemByBIN'])->name('line-items.bin');
                Route::get('stock-items/{stockItem}/parts/{part}/line-items/{lineItem}', [LineItemController::class, 'show'])->name('line-items.show');
                Route::post('stock-items/{stockItem}/parts/{part}/line-items/store', [LineItemController::class, 'store'])->name('line-items.store');
                Route::put('stock-items/{stockItem}/parts/{part}/line-items/{lineItem}/update', [LineItemController::class, 'update'])->name('line-items.update');
                Route::delete('stock-items/{stockItem}/parts/{part}/line-items/{lineItem}/delete', [LineItemController::class, 'destroy'])->name('line-items.destroy');
                Route::get('stock-items/{stockItem}/parts/{part}/first-line-item', [LineItemController::class, 'firstLineItem'])->name('line-items.first-line-item');
                Route::get('stock-items/{stockItem}/parts/{part}/last-line-item/{id}', [LineItemController::class, 'lastLineItem'])->name('line-items.last-line-item');

                // Condition

                Route::get('conditions', [ConditionController::class, 'conditions'])->name('conditions');
                Route::get('conditions/{condition}/unserviceable-conditions', [ConditionController::class, 'unserviceableConditions'])->name('conditions.unserviceableConditions');


            // Parts
            Route::get('stock-items/{stockItem}/parts/activities', [PartController::class, 'activities'])->name('parts.activities');

            Route::get('stock-items/{stockItem}/parts', [PartController::class, 'index'])->name('parts');
            Route::get('stock-items/{stockItem}/parts/{part}/qr', [PartController::class, 'qr'])->name('parts.qr');
            Route::get('stock-items/{stockItem}/parts/serial-or-batch-num/{serialOrBatchNum}', [PartController::class, 'findPartBySerialOrBatchNum'])->name('parts.serial-or-batch-num');
            Route::get('stock-items/{stockItem}/parts/{part}', [PartController::class, 'show'])->name('parts.show');
            Route::post('stock-items/{stockItem}/parts/store', [PartController::class, 'store'])->name('parts.store');
            Route::put('stock-items/{stockItem}/parts/{part}/update', [PartController::class, 'update'])->name('parts.update');
            Route::delete('stock-items/{stockItem}/parts/{part}/delete', [PartController::class, 'destroy'])->name('parts.destroy');


        // Stock Item
        Route::get('stock-items/activities', [StockItemController::class, 'activities'])->name('stock-items.activities');

        Route::get('stock-items', [StockItemController::class, 'index'])->name('stock-items');
        Route::get('stock-items/part-num/{partNum}', [StockItemController::class, 'findStockItemByPartNum'])->name('stock-items.find-stock-item-by-part-num');
        Route::get('stock-items/{stockItem}', [StockItemController::class, 'show'])->name('stock-items.show');
        Route::post('stock-items/store', [StockItemController::class, 'store'])->name('stock-items.store');
        Route::put('stock-items/{stockItem}/update', [StockItemController::class, 'update'])->name('stock-items.update');
        Route::delete('stock-items/{stockItem}/delete', [StockItemController::class, 'destroy'])->name('stock-items.destroy');

        // Component Category
        Route::get('component-categories', [ComponentCategoryController::class, 'componentCategories'])->name('component-categories');

        // Component Type
        Route::get('component-categories/{categoryCategory}/component-types', [ComponentTypeController::class, 'componentTypes'])->name('component-types');




        // Action
        Route::get('actions/activities', [ActionController::class, 'activities'])->name('actions.activities');

        Route::get('actions', [ActionController::class, 'index'])->name('actions');
        Route::get('actions/{action}', [ActionController::class, 'show'])->name('actions.show');
        Route::post('actions/store', [ActionController::class, 'store'])->name('actions.store');
        Route::put('actions/{action}/update', [ActionController::class, 'update'])->name('actions.update');
        Route::delete('actions/{action}/delete', [ActionController::class, 'destroy'])->name('actions.destroy');
    });

$part_145 = 'airms.auth:' . UserRoleEnum::ENGINEER;
Route::name('api.' . UserRoleEnum::ENGINEER . '.')
    ->middleware(['api', 'auth', $part_145])
    ->prefix(UserRoleEnum::ENGINEER)
    ->group(function () {
        Route::get('user-profile/avatar', [UserProfileController::class, 'avatar'])->name('usersProfile.avatar');
    });
