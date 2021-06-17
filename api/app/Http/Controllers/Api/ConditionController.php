<?php

namespace App\Http\Controllers\Api;

use App\ATAChapter;
use App\Enums\ComponentTypeEnum;
use App\Enums\ConditionEnum;
use App\Enums\UnserviceableConditionEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function conditions()
    {
        $conditions = [
            ConditionEnum::SERVICEABLE,
            ConditionEnum::UNSERVICEABLE,
        ];
        return response()->json($conditions, 200);
    }

    public function unserviceableConditions($condition)
    {
        $unserviceableConditions = [];
        if ($condition == ConditionEnum::UNSERVICEABLE) {
            $unserviceableConditions = [
                UnserviceableConditionEnum::QUARANTINE,
                UnserviceableConditionEnum::SCRAPPED,
            ];
        }
        return response()->json($unserviceableConditions, 200);
    }
}
