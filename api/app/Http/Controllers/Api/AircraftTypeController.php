<?php

namespace App\Http\Controllers\Api;

use App\AircraftType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class AircraftTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = AircraftType::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->orderBy('aircraft_types.name', 'asc')
            ->select([
                'aircraft_types.id as id',
                'aircraft_types.name as name_left',
                'aircraft_types.max_seats as max_seats_right',
                'aircraft_types.manufacturer as manufacturer_left',

                'aircraft_types.iata_code as iata_code_center',
                'aircraft_types.icao_code as icao_code_center',

                'aircraft_types.max_range as max_range_right',
                'aircraft_types.max_flight_time_in_min as max_flight_time_in_min_right',

                DB::raw("convert_tz(aircraft_types.created_at, 'UTC', users.timezone) as created_at_left"),
                DB::raw("convert_tz(aircraft_types.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();

        return response()->json($users, 200);
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
     * @param  \App\AircraftType  $aircraftType
     * @return \Illuminate\Http\Response
     */
    public function show(AircraftType $aircraftType)
    {
        if ($aircraftType) {
            return response()->json($aircraftType, 200);
        } else {
            return response()->json(['message' => 'The aircraft type doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AircraftType  $aircraftType
     * @return \Illuminate\Http\Response
     */
    public function edit(AircraftType $aircraftType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AircraftType  $aircraftType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AircraftType $aircraftType)
    {
        return $this->defaultAction($request, $aircraftType->id);
    }


    private function defaultAction(Request $request, $id)
    {
        $aircraftType = null;
        $actionStr = "created";

        if ($id) {
            $aircraftType = AircraftType::find($id);
            $actionStr = "updated";
        } else {
            $aircraftType = new AircraftType();
        }

        if ($aircraftType) {

            $validatedData = request()->validate([
                'name' => ['required', 'string', 'unique:aircraft_types,name,' . $id],
                'max_seats' => ['required', 'numeric'],
                'manufacturer' => ['required', 'string'],
                'iata_code' => ['required', 'string', 'unique:aircraft_types,iata_code,' . $id],
                'icao_code' => ['required', 'string', 'unique:aircraft_types,icao_code,' . $id],
                'wake' => ['required', 'string'],
                'max_range' => ['required', 'numeric'],
                'max_flight_time_in_min' => ['required', 'numeric'],
            ]);

            $aircraftType->name = $validatedData['name'];
            $aircraftType->max_seats = $validatedData['max_seats'];
            $aircraftType->manufacturer = $validatedData['manufacturer'];
            $aircraftType->iata_code = $validatedData['iata_code'];
            $aircraftType->icao_code = $validatedData['icao_code'];
            $aircraftType->wake = $validatedData['wake'];
            $aircraftType->max_range = $validatedData['max_range'];
            $aircraftType->max_flight_time_in_min = $validatedData['max_flight_time_in_min'];

            if ($aircraftType->save()) {
                return response()->json(['message' => 'The aircraft type is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The aircraft type can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The aircraft type doesn\'t exists!'], 409);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AircraftType  $aircraftType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AircraftType $aircraftType)
    {
        if ($aircraftType) {
            if ($aircraftType->delete()) {
                return response()->json(['message' => 'The aircraft type is deleted'], 201);
            } else {
                return response()->json(['message' => 'The aircraft type can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The aircraft type doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\AircraftType');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'aircraft_type')
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
