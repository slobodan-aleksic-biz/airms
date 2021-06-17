<?php

namespace App\Http\Controllers\Api;

use App\Stock;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->join('airports', 'airports.id', '=', 'stocks.airport_id')
            ->join('cities', 'cities.id', '=', 'airports.city_id')
            ->orderBy('stocks.name', 'asc')
            ->select([
                'stocks.id as id',
                'stocks.name as name_left',
                'stocks.description as description_left',
                DB::raw("concat(cities.name,'(',airports.iata_code,' - ',airports.icao_code,')') as airport_left"),
                DB::raw("convert_tz(stocks.created_at, 'UTC', users.timezone) as created_at_left"),
                DB::raw("convert_tz(stocks.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();

        return response()->json($stocks);
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
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        if ($stock) {
            return response()->json($stock, 200);
        } else {
            return response()->json(['message' => 'The stock doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        return $this->defaultAction($request, $stock->id);
    }



    private function defaultAction(Request $request, $id)
    {
        $stock = null;
        $actionStr = "";

        if ($id) {
            $stock = Stock::find($id);
            $actionStr = "updated";
        } else {
            $stock = new Stock();
            $actionStr = "created";
        }

        if ($stock) {

            $validatedData = request()->validate([
                'name' => ['required', 'string', 'unique:stocks,name,' . $id],
                'description' => ['nullable', 'string'],
                'airport_id' => ['required', 'numeric'],
            ]);

            $stock->name = $validatedData['name'];
            $stock->description = $validatedData['description'];
            $stock->airport_id = $validatedData['airport_id'];

            if ($stock->save()) {
                return response()->json(['message' => 'The stock is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The stock can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The stock doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        if ($stock) {
            if ($stock->delete()) {
                return response()->json(['message' => 'The stock is deleted'], 201);
            } else {
                return response()->json(['message' => 'The stock can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The stock doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\Stock');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'stock')
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
