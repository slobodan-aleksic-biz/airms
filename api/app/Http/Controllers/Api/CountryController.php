<?php

namespace App\Http\Controllers\Api;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->orderBy('countries.name', 'asc')
            ->select([
                'countries.id as id',
                'countries.name as country_name_left',
                'countries.iso_code_2 as iso_code_2_left',
                'countries.iso_code_3 as iso_code_3_left',
                'countries.phone_code as phone_code_left',
                DB::raw("convert_tz(countries.created_at, 'UTC', users.timezone) as created_at_left"),
                DB::raw("convert_tz(countries.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();

        return response()->json($countries);
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
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        if ($country) {
            return response()->json($country, 200);
        } else {
            return response()->json(['message' => 'The country doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        return $this->defaultAction($request, $country->id);
    }

    private function defaultAction(Request $request, $id)
    {
        $country = null;
        $actionStr = "";

        if ($id) {
            $country = Country::find($id);
            $actionStr = "updated";
        } else {
            $country = new Country();
            $actionStr = "created";
        }

        if ($country) {

            $validatedData = request()->validate([
                'name' => ['required', 'string', 'unique:cities,name,' . $id],
                'iso_code_2' => ['required', 'string', 'min:2', 'max:2', 'unique:countries,iso_code_2,' . $id],
                'iso_code_3' => ['required', 'string', 'min:3', 'max:3', 'unique:countries,iso_code_3,' . $id],
                'phone_code' => ['required', 'string', 'unique:countries,phone_code,' . $id],
            ]);

            $country->name = $validatedData['name'];
            $country->iso_code_2 = $validatedData['iso_code_2'];
            $country->iso_code_3 = $validatedData['iso_code_3'];
            $country->phone_code = $validatedData['phone_code'];

            if ($country->save()) {
                return response()->json(['message' => 'The country is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The country can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The country doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        if ($country) {
            if ($country->delete()) {
                return response()->json(['message' => 'The country is deleted'], 201);
            } else {
                return response()->json(['message' => 'The country can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The country doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\Country');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'country')
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
