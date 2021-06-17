<?php

namespace App\Http\Controllers\Api;

use App\DelayType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class DelayTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delayTypes = DelayType::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->orderBy('delay_types.delay_type', 'asc')
            ->select([
                'delay_types.id as id',
                'delay_types.delay_type as delay_type_left',
                DB::raw("convert_tz(delay_types.created_at, 'UTC', users.timezone) as created_at_left"),
                DB::raw("convert_tz(delay_types.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();

        return response()->json($delayTypes);
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
     * @param  \App\DelayType  $delayType
     * @return \Illuminate\Http\Response
     */
    public function show(DelayType $delayType)
    {
        if ($delayType) {
            return response()->json($delayType, 200);
        } else {
            return response()->json(['message' => 'The delay type doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DelayType  $delayType
     * @return \Illuminate\Http\Response
     */
    public function edit(DelayType $delayType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DelayType  $delayType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DelayType $delayType)
    {
        return $this->defaultAction($request, $delayType->id);
    }



    private function defaultAction(Request $request, $id)
    {
        $delayType = null;
        $actionStr = "";

        if ($id) {
            $delayType = DelayType::find($id);
            $actionStr = "updated";
        } else {
            $delayType = new DelayType();
            $actionStr = "created";
        }

        if ($delayType) {

            $validatedData = request()->validate([
                'delay_type' => ['required', 'string'],
            ]);

            $delayType->delay_type = $validatedData['delay_type'];

            if ($delayType->save()) {
                return response()->json(['message' => 'The delay type is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The delay type can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The delay type doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DelayType  $delayType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DelayType $delayType)
    {
        if ($delayType) {
            if ($delayType->delete()) {
                return response()->json(['message' => 'The delay type is deleted'], 201);
            } else {
                return response()->json(['message' => 'The delay type can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The delay type doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\DelayType');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'delay_type')
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
