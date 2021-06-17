<?php

namespace App\Http\Controllers\Api;

use App\Enums\ComponentCategoryEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class ComponentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function componentCategories()
    {
        return response()->json([
            ComponentCategoryEnum::AIRFRAME,
            ComponentCategoryEnum::ENGINE,
            ComponentCategoryEnum::LANDING_GEAR,
            ComponentCategoryEnum::APU,
        ]);
    }
}
