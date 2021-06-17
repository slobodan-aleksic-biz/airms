<?php

namespace App\Http\Controllers\Api;

use App\FlightRoute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class FlightRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $validatedData = request()->validate([
            'flight_route_id' => ['nullable', 'integer']
        ]);

        $flightRouteId = $validatedData['flight_route_id'] ?? null;

        $flightRoutes = [];

        if ($flightRouteId) {
            $flightRoutes = FlightRoute::join('airports as apt1', 'apt1.id', '=', 'flight_routes.origin')
                ->join('airports as apt2', 'apt2.id', '=', 'flight_routes.destination')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->where('flight_routes.id', $flightRouteId)
                ->orderBy('flight_routes.flight_no', 'asc')
                ->select([
                    'flight_routes.id as id',
                    'flight_routes.flight_no as flight_no_left',
                    'apt1.iata_code as origin_left',
                    'apt2.iata_code as destination_left',
                    DB::raw("convert_tz(flight_routes.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(flight_routes.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->get();
        } else {
            $flightRoutes = FlightRoute::join('airports as apt1', 'apt1.id', '=', 'flight_routes.origin')
                ->join('airports as apt2', 'apt2.id', '=', 'flight_routes.destination')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->orderBy('flight_routes.flight_no', 'asc')
                ->select([
                    'flight_routes.id as id',
                    'flight_routes.flight_no as flight_no_left',
                    'apt1.iata_code as origin_left',
                    'apt2.iata_code as destination_left',
                    DB::raw("convert_tz(flight_routes.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(flight_routes.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->get();
        }

        return response()->json($flightRoutes);
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
     * @param  \App\FlightRoute  $flightRoute
     * @return \Illuminate\Http\Response
     */
    public function show(FlightRoute $flightRoute)
    {
        if ($flightRoute) {
            return response()->json($flightRoute, 200);
        } else {
            return response()->json(['message' => 'The flight route doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FlightRoute  $flightRoute
     * @return \Illuminate\Http\Response
     */
    public function edit(FlightRoute $flightRoute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FlightRoute  $flightRoute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FlightRoute $flightRoute)
    {
        return $this->defaultAction($request, $flightRoute->id);
    }

    private function defaultAction(Request $request, $id)
    {
        $flightRoute = null;
        $actionStr = 'created';
        if ($id) {
            $flightRoute = FlightRoute::find($id);
            $actionStr = 'updated';
        } else {
            $flightRoute = new FlightRoute();
        }

        if ($flightRoute) {

            $validatedData = request()->validate([
                'flight_no' => ['required', 'string'],
                'origin' => ['required', 'numeric'],
                'destination' => ['required', 'numeric'],
            ]);

            $flightRoute->flight_no = $validatedData['flight_no'];
            $flightRoute->origin = $validatedData['origin'];
            $flightRoute->destination = $validatedData['destination'];

            if ($flightRoute->save()) {
                return response()->json(['message' => 'The flight route is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The flight route can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The flight route doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FlightRoute  $flightRoute
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlightRoute $flightRoute)
    {
        if ($flightRoute) {
            if ($flightRoute->delete()) {
                return response()->json(['message' => 'The flight route is deleted'], 201);
            } else {
                return response()->json(['message' => 'The flight route can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The flight route doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\FlightRoute');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'flight_route')
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
