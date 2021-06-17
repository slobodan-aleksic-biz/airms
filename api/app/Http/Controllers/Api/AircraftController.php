<?php

namespace App\Http\Controllers\Api;

use App\Aircraft;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Validator;

class AircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $validatedData = request()->validate([
            'aircraft_type_id' => ['nullable', 'numeric']
        ]);

        $aircraftTypeId = $validatedData['aircraft_type_id'] ?? null;

        $aircrafts = [];

        if ($aircraftTypeId) {

            $aircrafts = Aircraft::join('aircraft_types', 'aircraft_types.id', '=', 'aircrafts.aircraft_type_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->where('aircraft_types.id', '=', $aircraftTypeId)
                ->orderBy('aircrafts.name', 'asc')
                ->select([
                    'aircrafts.id as id',
                    'aircrafts.name as name_left',
                    'aircrafts.reg as reg_center',
                    'aircrafts.serial_no as serial_no_center',
                    'aircrafts.number_of_seats as number_of_seats_right',
                    DB::raw("case when aircrafts.status = 1 then 'OPT' else 'AOG' end as status_center"),
                    'aircraft_types.name as aircraft_type_left',

                    DB::raw("convert_tz(aircrafts.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(aircrafts.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->get();

        } else {

            $aircrafts = Aircraft::join('aircraft_types', 'aircraft_types.id', '=', 'aircrafts.aircraft_type_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->orderBy('aircrafts.name', 'asc')
                ->select([
                    'aircrafts.id as id',
                    'aircrafts.name as name_left',
                    'aircrafts.reg as reg_center',
                    'aircrafts.serial_no as serial_no_center',
                    'aircrafts.number_of_seats as number_of_seats_right',
                    DB::raw("case when aircrafts.status = 1 then 'OPT' else 'AOG' end as status_center"),
                    'aircraft_types.name as aircraft_type_left',

                    DB::raw("convert_tz(aircrafts.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(aircrafts.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->get();

        }

        return response()->json($aircrafts);
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
     * @param  \App\Aircraft  $aircraft
     * @return \Illuminate\Http\Response
     */
    public function show(Aircraft $aircraft)
    {
        if ($aircraft) {
            return response()->json($aircraft, 200);
        } else {
            return response()->json(['message' => 'The aircraft doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aircraft  $aircraft
     * @return \Illuminate\Http\Response
     */
    public function edit(Aircraft $aircraft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aircraft  $aircraft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aircraft $aircraft)
    {
        return $this->defaultAction($request, $aircraft->id);
    }

    private function defaultAction(Request $request, $id)
    {
        $aircraft = null;
        $actionStr = "created";

        if ($id) {
            $aircraft = Aircraft::find($id);
            $actionStr = "updated";
        } else {
            $aircraft = new Aircraft();
        }

        if ($aircraft) {

            $validatedData = request()->validate([
                'name' => ['required', 'string', 'unique:aircrafts,name,' . $id],
                'reg' => ['required', 'string', 'unique:aircrafts,reg,' . $id],
                'serial_no' => ['required', 'string', 'unique:aircrafts,serial_no,' . $id],
                'number_of_seats' => ['required', 'integer'],
                'aircraft_type_id' => ['required', 'integer'],
                'status' => ['required'],
            ]);

            $aircraft->name = $validatedData['name'];
            $aircraft->reg = $validatedData['reg'];
            $aircraft->serial_no = $validatedData['serial_no'];
            $aircraft->number_of_seats = $validatedData['number_of_seats'];
            $aircraft->aircraft_type_id = $validatedData['aircraft_type_id'];
            $aircraft->status = $validatedData['status'];

            if ($aircraft->save()) {
                return response()->json(['message' => 'The aircraft is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The aircraft can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The aircraft doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aircraft  $aircraft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aircraft $aircraft)
    {
        if ($aircraft) {
            if ($aircraft->delete()) {
                return response()->json(['message' => 'The aircraft is deleted'], 201);
            } else {
                return response()->json(['message' => 'The aircraft can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The aircraft doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\Aircraft');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'aircraft')
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
