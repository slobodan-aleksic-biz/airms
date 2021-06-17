<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\QuantityUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class QuantityUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quantityUnits = QuantityUnit::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->orderBy('quantity_units.code', 'asc')
            ->orderBy('quantity_units.name', 'asc')
            ->select([
                'quantity_units.id as id',
                'quantity_units.code as code_left',
                'quantity_units.name as name_left',
                'quantity_units.description as description_left',
                DB::raw("case when quantity_units.is_consumable = 1 then 'TRUE' else 'FALSE' end as is_consumable_center"),
                DB::raw("convert_tz(quantity_units.created_at, 'UTC', users.timezone) as created_at_left"),
                DB::raw("convert_tz(quantity_units.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();

        return response()->json($quantityUnits);
    }

    public function showConsumableOrNon($isConsumable)
    {
        $quantityUnits = QuantityUnit::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->orderBy('quantity_units.code', 'asc')
            ->orderBy('quantity_units.name', 'asc')
            ->where('is_consumable', $isConsumable)
            ->select([
                'quantity_units.id as id',
                'quantity_units.code as code_left',
                'quantity_units.name as name_left',
                'quantity_units.description as description_left',
                DB::raw("case when quantity_units.is_consumable = 1 then 'TRUE' else 'FALSE' end as is_consumable_center"),
                DB::raw("convert_tz(quantity_units.created_at, 'UTC', users.timezone) as created_at_left"),
                DB::raw("convert_tz(quantity_units.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();

        return response()->json($quantityUnits);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->defaultAction($request, null);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuantityUnit  $quantityUnit
     * @return \Illuminate\Http\Response
     */
    public function show(QuantityUnit $quantityUnit)
    {
        if ($quantityUnit) {
            return response()->json($quantityUnit, 200);
        } else {
            return response()->json(['message' => 'The quantity unit doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuantityUnit  $quantityUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(QuantityUnit $quantityUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuantityUnit  $quantityUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuantityUnit $quantityUnit)
    {
        return $this->defaultAction($request, $quantityUnit->id);
    }



    private function defaultAction(Request $request, $id)
    {
        $quantityUnit = null;
        $actionStr = "";

        if ($id) {
            $quantityUnit = QuantityUnit::find($id);
            $actionStr = "updated";
        } else {
            $quantityUnit = new QuantityUnit();
            $actionStr = "created";
        }

        if ($quantityUnit) {

            $validatedData = request()->validate([
                'name' => ['required', 'string', 'unique:quantity_units,name,' . $id],
                'description' => ['nullable', 'string'],
                'is_consumable' => ['nullable'],
            ]);

            $quantityUnit->name = $validatedData['name'];
            $quantityUnit->description = $validatedData['description'];
            $quantityUnit->is_consumable = $validatedData['is_consumable'] ? true : false;

            if ($quantityUnit->save()) {
                return response()->json(['message' => 'The quantity unit is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The quantity unit can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The quantity unit doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuantityUnit  $quantityUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuantityUnit $quantityUnit)
    {
        if ($quantityUnit) {
            if ($quantityUnit->delete()) {
                return response()->json(['message' => 'The quantity unit is deleted'], 201);
            } else {
                return response()->json(['message' => 'The quantity unit can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The quantity unit doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\QuantityUnit');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'quantity_unit')
            ->orderBy('created_at', 'desc')
            ->get([
                'users.name as user',
                'activity_log.subject_id',
                'activity_log.description',
                'activity_log.properties',
                DB::raw("convert_tz(activity_log.created_at, 'UTC', usr.timezone) as created_at"),
                DB::raw("convert_tz(activity_log.updated_at, 'UTC', usr.timezone) as updated_at"),
            ]);
        return response()->json($activities, 200);
    }
}
