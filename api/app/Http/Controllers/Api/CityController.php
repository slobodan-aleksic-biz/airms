<?php

namespace App\Http\Controllers\Api;

use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $validatedData = request()->validate([
            'state_id' => ['nullable', 'numeric']
        ]);

        $cities = [];

        if ($validatedData['state_id'] ?? false) {
            $cities = City::join('states', 'states.id', '=', 'cities.state_id')
                ->join('countries', 'countries.id', '=', 'states.country_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->where('cities.state_id', $validatedData['state_id'])
                ->orderBy('cities.name', 'asc')
                ->select([
                    'cities.id as id',
                    'cities.name as city_name_left',

                    'states.name as state_name_left',
                    'countries.name as country_name_left',

                    'cities.zip_code as zip_code_left',
                    DB::raw("case when cities.has_airport = 1 then 'TRUE' else 'FALSE' end as has_airport_left"),

                    DB::raw("convert_tz(cities.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(cities.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->get();
        } else {
            $cities = City::join('states', 'states.id', '=', 'cities.state_id')
                ->join('countries', 'countries.id', '=', 'states.country_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->orderBy('cities.name', 'asc')
                ->select([
                    'cities.id as id',
                    'cities.name as city_name_left',

                    'states.name as state_name_left',
                    'countries.name as country_name_left',

                    'cities.zip_code as zip_code_left',
                    DB::raw("case when cities.has_airport = 1 then 'TRUE' else 'FALSE' end as has_airport_left"),

                    DB::raw("convert_tz(cities.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(cities.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->get();
        }

        return response()->json($cities);
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
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        if ($city) {
            $city = City::join('states', 'states.id', '=', 'cities.state_id')
                ->join('countries', 'countries.id', '=', 'states.country_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->where('cities.id', $city->id)
                ->orderBy('cities.name', 'asc')
                ->select([
                    'cities.id as id',
                    'cities.name as name',
                    'cities.zip_code as zip_code',
                    'cities.has_airport as has_airport',

                    'states.id as state_id',
                    'countries.id as country_id',
                ])->first();

            return response()->json($city, 200);
        } else {
            return response()->json(['message' => 'The city doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        return $this->defaultAction($request, $city->id);
    }

    private function defaultAction(Request $request, $id)
    {
        $city = null;
        $actionStr = "";

        if ($id) {
            $city = City::find($id);
            $actionStr = "updated";
        } else {
            $city = new City();
            $actionStr = "created";
        }

        if ($city) {

            $validatedData = request()->validate([
                'name' => ['required', 'string'],
                'zip_code' => ['required', 'string'],
                'has_airport' => ['nullable', 'numeric'],
                'state_id' => ['required', 'numeric'],
            ]);

            $city->name = $validatedData['name'];
            $city->zip_code = $validatedData['zip_code'];
            $city->has_airport = $validatedData['has_airport'] ?? 0;
            $city->state_id = $validatedData['state_id'];

            if ($city->save()) {
                return response()->json(['message' => 'The city is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The city can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The city doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        if ($city) {
            if ($city->delete()) {
                return response()->json(['message' => 'The city is deleted'], 201);
            } else {
                return response()->json(['message' => 'The city can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The city doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\City');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'city')
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
