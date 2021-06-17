<?php

namespace App\Http\Controllers\Api;

use App\ATAChapter;
use App\Enums\ComponentCategoryEnum;
use App\Enums\ComponentTypeEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class ComponentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function componentTypes($categoryCategory)
    {
        $validatedData = request()->validate([
            'is_camo_page' => ['nullable']
        ]);

        $componentTypeArr = [];

        if($validatedData['is_camo_page'] ?? false) {
            switch ($categoryCategory) {
                case ComponentCategoryEnum::AIRFRAME:
                    $componentTypeArr = [
                        ComponentTypeEnum::REPAIRABLE,
                        ComponentTypeEnum::ROTABLE,
                    ];
                    break;
                case ComponentCategoryEnum::ENGINE:
                    $componentTypeArr = [
                        ComponentTypeEnum::LIFE_LIMITED_PARTS,
                        ComponentTypeEnum::REPAIRABLE,
                        ComponentTypeEnum::ROTABLE,
                    ];
                    break;
                case ComponentCategoryEnum::LANDING_GEAR:
                    $componentTypeArr = [
                        ComponentTypeEnum::LIFE_LIMITED_PARTS,
                        ComponentTypeEnum::REPAIRABLE,
                        ComponentTypeEnum::ROTABLE,
                    ];
                    break;
                case ComponentCategoryEnum::APU:
                    $componentTypeArr = [
                        ComponentTypeEnum::LIFE_LIMITED_PARTS,
                        ComponentTypeEnum::REPAIRABLE,
                        ComponentTypeEnum::ROTABLE,
                    ];
                    break;
            }
        } else {
            switch ($categoryCategory) {
                case ComponentCategoryEnum::AIRFRAME:
                    $componentTypeArr = [
                        ComponentTypeEnum::EXPENDABLE,
                        ComponentTypeEnum::REPAIRABLE,
                        ComponentTypeEnum::ROTABLE,
                    ];
                    break;
                case ComponentCategoryEnum::ENGINE:
                    $componentTypeArr = [
                        ComponentTypeEnum::EXPENDABLE,
                        ComponentTypeEnum::LIFE_LIMITED_PARTS,
                        ComponentTypeEnum::REPAIRABLE,
                        ComponentTypeEnum::ROTABLE,
                    ];
                    break;
                case ComponentCategoryEnum::LANDING_GEAR:
                    $componentTypeArr = [
                        ComponentTypeEnum::EXPENDABLE,
                        ComponentTypeEnum::LIFE_LIMITED_PARTS,
                        ComponentTypeEnum::REPAIRABLE,
                        ComponentTypeEnum::ROTABLE,
                    ];
                    break;
                case ComponentCategoryEnum::APU:
                    $componentTypeArr = [
                        ComponentTypeEnum::EXPENDABLE,
                        ComponentTypeEnum::LIFE_LIMITED_PARTS,
                        ComponentTypeEnum::REPAIRABLE,
                        ComponentTypeEnum::ROTABLE,
                    ];
                    break;
            }
        }

        return response()->json($componentTypeArr);
    }
}
