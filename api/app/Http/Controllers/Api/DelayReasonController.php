<?php

namespace App\Http\Controllers\Api;

use App\DelayReason;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class DelayReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delayReasons = DelayReason::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->join('delay_types', 'delay_types.id', '=', 'delay_reasons.delay_type_id')
            ->orderBy('delay_reasons.code_id', 'asc')
            ->select([
                'delay_reasons.id as id',
                'delay_reasons.code_id as code_id_center',
                'delay_reasons.code_str as code_str_center',
                'delay_reasons.reason as reason_left',
                'delay_reasons.description as description_left',
                'delay_types.delay_type as delay_type_left',
                DB::raw("convert_tz(delay_reasons.created_at, 'UTC', users.timezone) as created_at_left"),
                DB::raw("convert_tz(delay_reasons.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();

        return response()->json($delayReasons);
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
     * @param  \App\DelayReason  $delayReason
     * @return \Illuminate\Http\Response
     */
    public function show(DelayReason $delayReason)
    {
        if ($delayReason) {
            return response()->json($delayReason, 200);
        } else {
            return response()->json(['message' => 'The delay reason doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DelayReason  $delayReason
     * @return \Illuminate\Http\Response
     */
    public function edit(DelayReason $delayReason)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DelayReason  $delayReason
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DelayReason $delayReason)
    {
        return $this->defaultAction($request, $delayReason->id);
    }



    private function defaultAction(Request $request, $id)
    {
        $delayReason = null;
        $actionStr = "";

        if ($id) {
            $delayReason = DelayReason::find($id);
            $actionStr = "updated";
        } else {
            $delayReason = new DelayReason();
            $actionStr = "created";
        }

        if ($delayReason) {

            $validatedData = request()->validate([
                'code_id' => ['required', 'string', 'unique:delay_reasons,code_id,' . $id],
                'code_str' => ['required', 'string', 'unique:delay_reasons,code_str,' . $id],
                'reason' => ['required', 'string'],
                'description' => ['required', 'string'],
                'delay_type_id' => ['required', 'numeric'],
            ]);

            $delayReason->code_id = $validatedData['code_id'];
            $delayReason->code_str = $validatedData['code_str'];
            $delayReason->reason = $validatedData['reason'];
            $delayReason->description = $validatedData['description'];
            $delayReason->delay_type_id = $validatedData['delay_type_id'];

            if ($delayReason->save()) {
                return response()->json(['message' => 'The delay reason is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The delay reason can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The delay reason doesn\'t exists!'], 409);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DelayReason  $delayReason
     * @return \Illuminate\Http\Response
     */
    public function destroy(DelayReason $delayReason)
    {
        if ($delayReason) {
            if ($delayReason->delete()) {
                return response()->json(['message' => 'The delay reason is deleted'], 201);
            } else {
                return response()->json(['message' => 'The delay reason can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The delay reason doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\DelayReason');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'delay_reason')
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
