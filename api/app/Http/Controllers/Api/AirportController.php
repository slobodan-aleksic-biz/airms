<?php

namespace App\Http\Controllers\Api;

use App\Airport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $validatedData = request()->validate([
            'city_id' => ['nullable', 'numeric']
        ]);

        $airports = [];

        if ($validatedData['city_id'] ?? false) {
            $airports = Airport::join('cities', 'cities.id', '=', 'airports.city_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->where('airports.city_id', $validatedData['city_id'])
                ->where('cities.id', $validatedData['city_id'])
                ->orderBy('airports.name', 'asc')
                ->select([
                    'airports.id as id',
                    'airports.name as name_left',
                    'airports.description as description_left',

                    'airports.iata_code as iata_code_center',
                    'airports.icao_code as icao_code_center',

                    'cities.name as city_name_left',

                    'airports.latitude as latitude_right',
                    'airports.longitude as longitude_right',
                    'airports.altitude_m as altitude_m_right',

                    'airports.time_zone_offset as time_zone_offset_center',
                    'airports.time_zone_letter as time_zone_letter_center',
                    'airports.time_zone_dst as time_zone_dst_left',

                    DB::raw("convert_tz(airports.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(airports.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->get();
        } else {
            $airports = Airport::join('cities', 'cities.id', '=', 'airports.city_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->orderBy('airports.name', 'asc')
                ->select([
                    'airports.id as id',
                    'airports.name as name_left',
                    'airports.description as description_left',

                    'airports.iata_code as iata_code_center',
                    'airports.icao_code as icao_code_center',

                    'cities.name as city_name_left',

                    'airports.latitude as latitude_right',
                    'airports.longitude as longitude_right',
                    'airports.altitude_m as altitude_m_right',

                    'airports.time_zone_offset as time_zone_offset_center',
                    'airports.time_zone_letter as time_zone_letter_center',
                    'airports.time_zone_dst as time_zone_dst_left',

                    DB::raw("convert_tz(airports.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(airports.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->get();
        }

        return response()->json($airports);
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
     * @param  \App\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function show(Airport $airport)
    {
        if ($airport) {

            $airport = Airport::join('cities', 'cities.id', '=', 'airports.city_id')
                ->join('states', 'states.id', '=', 'cities.state_id')
                ->join('countries', 'countries.id', '=', 'states.country_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->where('airports.id', $airport->id)
                ->orderBy('airports.name', 'asc')
                ->select([
                    'airports.id as id',
                    'airports.name as name',
                    'airports.description as description',

                    'airports.iata_code as iata_code',
                    'airports.icao_code as icao_code',

                    'cities.id as city_id',
                    'states.id as state_id',
                    'countries.id as country_id',

                    'airports.latitude as latitude',
                    'airports.longitude as longitude',
                    'airports.altitude_m as altitude_m',

                    'airports.time_zone_offset as time_zone_offset',
                    'airports.time_zone_letter as time_zone_letter',
                    'airports.time_zone_dst as time_zone_dst',

                    DB::raw("convert_tz(airports.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(airports.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->first();

            return response()->json($airport, 200);
        } else {
            return response()->json(['message' => 'The airport doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit(Airport $airport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airport $airport)
    {
        return $this->defaultAction($request, $airport->id);
    }

    private function defaultAction(Request $request, $id)
    {
        $airport = null;
        $actionStr = "created";

        if ($id) {
            $airport = Airport::find($id);
            $actionStr = "updated";
        } else {
            $airport = new Airport();
        }

        if ($airport) {

            $validatedData = request()->validate([
                'name' => ['required', 'string', 'unique:airports,name,' . $id],
                'description' => ['nullable', 'string'],
                'iata_code' => ['required', 'string', 'min:2', 'max:5', 'unique:airports,iata_code,' . $id],
                'icao_code' => ['required', 'string', 'min:2', 'max:5', 'unique:airports,icao_code,' . $id],
                'city_id' => ['required', 'numeric'],
                'latitude' => ['required', 'numeric'],
                'longitude' => ['required', 'numeric'],
                'altitude_m' => ['required', 'numeric'],
                'time_zone_offset' => ['required', 'string'],
                'time_zone_letter' => ['required', 'string'],
                'time_zone_dst' => ['required', 'string'],
            ]);

            $airport->name = $validatedData['name'];
            $airport->description = $validatedData['description'];
            $airport->iata_code = $validatedData['iata_code'];
            $airport->icao_code = $validatedData['icao_code'];
            $airport->city_id = $validatedData['city_id'];
            $airport->latitude = $validatedData['latitude'];
            $airport->longitude = $validatedData['longitude'];
            $airport->altitude_m = $validatedData['altitude_m'];
            $airport->time_zone_offset = $validatedData['time_zone_offset'];
            $airport->time_zone_letter = $validatedData['time_zone_letter'];
            $airport->time_zone_dst = $validatedData['time_zone_dst'];

            if ($airport->save()) {
                return response()->json(['message' => 'The airport is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The airport can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The airport doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airport $airport)
    {
        if ($airport) {
            if ($airport->delete()) {
                return response()->json(['message' => 'The airport is deleted'], 201);
            } else {
                return response()->json(['message' => 'The airport can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The airport doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\Airport');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'airport')
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
