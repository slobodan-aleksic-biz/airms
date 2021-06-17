<?php

namespace App\Http\Controllers\Api;

use App\State;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $validatedData = request()->validate([
            'country_id' => ['nullable', 'numeric']
        ]);

        $states = [];

        if ($validatedData['country_id'] ?? false) {

            $states = State::join('countries', 'countries.id', '=', 'states.country_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->where('states.country_id', $validatedData['country_id'])
                ->orderBy('states.name', 'asc')
                ->select([
                    'states.id as id',
                    'states.name as state_name_left',
                    'states.code as code_left',
                    'countries.name as country_name_left',
                    DB::raw("convert_tz(states.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(states.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->get();
        } else {

            $states = State::join('countries', 'countries.id', '=', 'states.country_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->orderBy('states.name', 'asc')
                ->select([
                    'states.id as id',
                    'states.name as state_name_left',
                    'states.code as code_left',
                    'countries.name as country_name_left',
                    DB::raw("convert_tz(states.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(states.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->get();
        }

        return response()->json($states);
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
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        if ($state) {
            return response()->json($state, 200);
        } else {
            return response()->json(['message' => 'The state doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        return $this->defaultAction($request, $state->id);
    }

    private function defaultAction(Request $request, $id)
    {
        $state = null;
        $actionStr = "";

        if ($id) {
            $state = State::find($id);
            $actionStr = "updated";
        } else {
            $state = new State();
            $actionStr = "created";
        }

        if ($state) {

            $validatedData = request()->validate([
                'name' => ['required', 'string'],
                'code' => ['nullable', 'string'],
                'country_id' => ['required', 'numeric'],
            ]);

            $state->name = $validatedData['name'];
            $state->code = $validatedData['code'];
            $state->country_id = $validatedData['country_id'];

            if ($state->save()) {
                return response()->json(['message' => 'The state is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The state can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The state doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        if ($state) {
            if ($state->delete()) {
                return response()->json(['message' => 'The state is deleted'], 201);
            } else {
                return response()->json(['message' => 'The state can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The state doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\State');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'state')
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
