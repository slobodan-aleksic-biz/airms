<?php

namespace App\Http\Controllers\Api;

use App\Enums\UserRoleEnum;
use App\LogBook;
use App\Http\Controllers\Controller;
use App\User;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use DatePeriod;
use Dompdf\Adapter\PDFLib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Validator;
use Svg\Surface\SurfacePDFLib;

class LogBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($aircraftId)
    {
        if ($aircraftId) {

            $logBook = LogBook::leftJoin('delay_reasons as dr1', 'dr1.id', '=', 'log_book.reason_1')
                ->leftJoin('delay_reasons as dr2', 'dr1.id', '=', 'log_book.reason_2')
                ->leftJoin('delay_reasons as dr3', 'dr1.id', '=', 'log_book.reason_3')
                ->join('flight_routes', 'flight_routes.id', '=', 'log_book.flight_route_id')
                ->join('airports as apt1', 'apt1.id', '=', 'flight_routes.origin')
                ->join('airports as apt2', 'apt2.id', '=', 'flight_routes.destination')
                ->join('aircrafts', 'aircrafts.id', '=', 'log_book.aircraft_id')
                ->leftJoin('users as captains', 'captains.id', '=', 'log_book.captain_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->where('aircrafts.id', $aircraftId)
                ->orderBy('flight_time_start', 'desc')
                ->select([
                    'log_book.id as id',
                    'flight_routes.flight_no as flight_no_center',

                    'apt1.iata_code as origin_center',
                    'log_book.flight_time_start as flight_time_start_center',

                    'apt2.iata_code as destination_center',
                    'log_book.flight_time_end as flight_time_end_center',

                    'aircrafts.reg as aircraft_reg_center',
                    DB::raw("case when captains.name is null then 'N/A' else captains.name end as captain_center"),

                    DB::raw('format(log_book.flight_hours, 2) as flight_hours_right'),
                    DB::raw('format(log_book.previous_hours, 2) as previous_hours_right'),
                    DB::raw('format(log_book.total_hours, 2) as total_hours_right'),

                    'log_book.flight_cycles as flight_cycles_right',
                    DB::raw('log_book.previous_cycles as previous_cycles_right'),
                    DB::raw('log_book.total_cycles as total_cycles_right'),

                    DB::raw("dr1.code_id||' ('||dr1.code_str||')' as code_i_center"),
                    'log_book.delay_in_min_1 as delay_in_min_i_center',
                    DB::raw("dr2.code_id||' ('||dr2.code_str||')' as code_ii_center"),
                    'log_book.delay_in_min_2 as delay_in_min_ii_center',
                    DB::raw("dr3.code_id||' ('||dr3.code_str||')' as code_iii_center"),
                    'log_book.delay_in_min_3 as delay_in_min_iii_center',

                    DB::raw("convert_tz(log_book.created_at, 'UTC', users.timezone) as created_at_center"),
                    DB::raw("convert_tz(log_book.updated_at, 'UTC', users.timezone) as updated_at_center"),
                ])->get();

            return response()->json($logBook);

        }

        return response()->json([]);
    }



    public function aircraftInfo($aircraftId)
    {
        if ($aircraftId) {

            $validatedData = request()->validate([
                'log_book_id' => ['nullable', 'numeric']
            ]);

            $logBook = LogBook::find($validatedData['log_book_id'] ?? 0);
            $logBookRes = null;

            if ($logBook) {
                $logBookRes = LogBook::join('flight_routes', 'flight_routes.id', '=', 'log_book.flight_route_id')
                    ->join('airports as apt1', 'apt1.id', '=', 'flight_routes.origin')
                    ->join('airports as apt2', 'apt2.id', '=', 'flight_routes.destination')
                    ->join('aircrafts', 'aircrafts.id', '=', 'log_book.aircraft_id')
                    ->leftJoin('users as captains', 'captains.id', '=', 'log_book.captain_id')
                    ->join('users as users', function ($q) {
                        $q->where('users.id', '=', auth()->user()->id);
                    })
                    ->where('aircrafts.id', $aircraftId)
                    ->where('log_book.flight_time_start', '<', $logBook->flight_time_start)
                    ->orderBy('log_book.flight_time_start', 'asc')
                    ->select([
                        'log_book.id as id',
                        'flight_routes.flight_no as flight_no_left',
                        'apt1.iata_code as origin_left',
                        'log_book.flight_time_start as flight_time_start_left',
                        'apt2.iata_code as destination_left',
                        'log_book.flight_time_end as flight_time_end_left',
                        'aircrafts.reg as aircraft_reg_center',
                        'captains.name as captain_name_left',
                        DB::raw('format(log_book.flight_hours, 2) as flight_hours_right'),
                        DB::raw('format(log_book.previous_hours, 2) as previous_hours_right'),
                        DB::raw('format(log_book.total_hours, 2) as total_hours_right'),
                        'log_book.flight_cycles as flight_cycles_right',
                        DB::raw('log_book.previous_cycles as previous_cycles_right'),
                        DB::raw('log_book.total_cycles as total_cycles_right'),
                        DB::raw("convert_tz(log_book.created_at, 'UTC', users.timezone) as created_at_left"),
                        DB::raw("convert_tz(log_book.updated_at, 'UTC', users.timezone) as updated_at_left"),
                    ])->get()->last();
            } else {
                $logBookRes = LogBook::join('flight_routes', 'flight_routes.id', '=', 'log_book.flight_route_id')
                    ->join('airports as apt1', 'apt1.id', '=', 'flight_routes.origin')
                    ->join('airports as apt2', 'apt2.id', '=', 'flight_routes.destination')
                    ->join('aircrafts', 'aircrafts.id', '=', 'log_book.aircraft_id')
                    ->leftJoin('users as captains', 'captains.id', '=', 'log_book.captain_id')
                    ->join('users as users', function ($q) {
                        $q->where('users.id', '=', auth()->user()->id);
                    })
                    ->where('aircrafts.id', $aircraftId)
                    ->orderBy('flight_time_start', 'asc')
                    ->select([
                        'log_book.id as id',
                        'flight_routes.flight_no as flight_no_left',
                        'apt1.iata_code as origin_left',
                        'log_book.flight_time_start as flight_time_start_left',
                        'apt2.iata_code as destination_left',
                        'log_book.flight_time_end as flight_time_end_left',
                        'aircrafts.reg as aircraft_reg_center',
                        'captains.name as captain_name_left',
                        DB::raw('format(log_book.flight_hours, 2) as flight_hours_right'),
                        DB::raw('format(log_book.previous_hours, 2) as previous_hours_right'),
                        DB::raw('format(log_book.total_hours, 2) as total_hours_right'),
                        'log_book.flight_cycles as flight_cycles_right',
                        DB::raw('log_book.previous_cycles as previous_cycles_right'),
                        DB::raw('log_book.total_cycles as total_cycles_right'),
                        DB::raw("convert_tz(log_book.created_at, 'UTC', users.timezone) as created_at_left"),
                        DB::raw("convert_tz(log_book.updated_at, 'UTC', users.timezone) as updated_at_left"),
                    ])->get()->last();
            }

            return response()->json($logBookRes);
        }

        return response()->json([]);
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
    public function store(Request $request, $aircraftId)
    {
        return $this->defaultAction($request, null);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LogBook  $logBook
     * @return \Illuminate\Http\Response
     */
    public function show($aircraftId, LogBook $logBook)
    {
        if ($logBook) {

            if ($aircraftId) {

                $logBookRes = LogBook::join('flight_routes', 'flight_routes.id', '=', 'log_book.flight_route_id')
                    ->join('airports as apt1', 'apt1.id', '=', 'flight_routes.origin')
                    ->join('airports as apt2', 'apt2.id', '=', 'flight_routes.destination')
                    ->join('aircrafts', 'aircrafts.id', '=', 'log_book.aircraft_id')
                    ->leftJoin('users as captains', 'captains.id', '=', 'log_book.captain_id')
                    ->join('users as users', function ($q) {
                        $q->where('users.id', '=', auth()->user()->id);
                    })
                    ->where('log_book.id', $logBook->id)
                    ->where('aircrafts.id', $aircraftId)
                    ->orderBy('flight_time_start', 'asc')
                    ->orderBy('flight_time_end', 'asc')
                    ->select([
                        'log_book.id as id',
                        'flight_routes.id as flight_route_id',
                        'flight_routes.flight_no as flight_no',
                        'apt1.iata_code as origin',
                        'apt2.iata_code as destination',
                        'aircrafts.id as aircraft_id',
                        'aircrafts.reg as aircraft_reg_center',
                        DB::raw('case when captains.id is null then 0 else captains.id end as captain_id'),
                        'captains.name as captain_name',
                        'log_book.flight_time_start as flight_time_start',
                        DB::raw("date_format(log_book.flight_time_start, '%Y-%m-%d') as flight_time_start_date"),
                        DB::raw("date_format(log_book.flight_time_start, '%H:%i') as flight_time_start_time"),
                        DB::raw('log_book.flight_time_end as flight_time_end'),
                        DB::raw('format(log_book.flight_hours, 2) as flight_hours_right'),
                        DB::raw('format(log_book.previous_hours, 2) as previous_hours_right'),
                        DB::raw('format(log_book.total_hours, 2) as total_hours_right'),
                        'log_book.flight_cycles as flight_cycles',
                        DB::raw('log_book.previous_cycles as previous_cycles_right'),
                        DB::raw('log_book.total_cycles as total_cycles_right'),
                        DB::raw("convert_tz(log_book.created_at, 'UTC', users.timezone) as created_at"),
                        DB::raw("convert_tz(log_book.updated_at, 'UTC', users.timezone) as updated_at"),
                    ])->first();

                return response()->json($logBookRes, 200);
            }
            return response()->json(['message' => 'The flight evidence doesn\'t exist!'], 409);
        } else {
            return response()->json(['message' => 'The flight evidence doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LogBook  $logBook
     * @return \Illuminate\Http\Response
     */
    public function edit(LogBook $logBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LogBook  $logBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $aircraftId, LogBook $logBook)
    {
        return $this->defaultAction($request, $logBook->id);
    }

    private function defaultAction(Request $request, $id)
    {
        $logBook = null;
        $str = "created";
        $oldFlightHours = 0;
        $oldFlightCycles = 0;
        $oldTotalHours = 0;
        $oldTotalCycles = 0;
        if ($id) {
            $logBook = LogBook::find($id);
            $str = "updated";

            $oldFlightHours = $logBook->flight_hours;
            $oldFlightCycles = $logBook->flight_cycles;
            $oldTotalHours = $logBook->total_hours;
            $oldTotalCycles = $logBook->total_cycles;
        } else {
            $logBook = new LogBook();
        }

        if ($logBook) {

            $validatedData = request()->validate([
                'flight_route_id' => ['required', 'numeric'],
                'aircraft_id' => ['required', 'numeric'],
                'captain_id' => ['nullable', 'numeric'],
                'flight_cycles' => ['required', 'numeric'],
                'flight_time_start' => ['required'],
                'flight_time_end' => ['required'],
            ]);

            $logBook->flight_route_id = $validatedData['flight_route_id'];
            $logBook->aircraft_id = $validatedData['aircraft_id'];

            if ($validatedData['captain_id'] != "0") {
                $logBook->captain_id = $validatedData['captain_id'];
            } else {
                $logBook->captain_id = null;
            }
            $logBook->flight_cycles = $validatedData['flight_cycles'];
            $logBook->flight_time_start = Carbon::parse($validatedData['flight_time_start']);
            $logBook->flight_time_end = Carbon::parse($validatedData['flight_time_end']);

            if ($id) {
                $logBook->flight_hours = round($logBook->flight_time_end->diffInMinutes($logBook->flight_time_start) / 60, 2);
                $logBook->total_hours = $oldTotalHours + $logBook->flight_hours - $oldFlightHours;
                $logBook->total_cycles = $oldTotalCycles + $logBook->flight_cycles - $oldFlightCycles;
            }

            if ($logBook->save()) {

                if ($id) {
                    $logBookRes = LogBook::where('flight_time_start', '>', $logBook->flight_time_start)
                        ->where('log_book.aircraft_id', $logBook->aircraft_id)
                        ->get();
                    foreach ($logBookRes as $logBookVal) {
                        $logBookVal->total_hours = $logBookVal->total_hours + $logBook->flight_hours - $oldFlightHours;
                        $logBookVal->total_cycles = $logBookVal->total_cycles + $logBook->flight_cycles - $oldFlightCycles;
                        $logBookVal->previous_hours = $logBookVal->total_hours - $logBookVal->flight_hours;
                        $logBookVal->previous_cycles = $logBookVal->total_cycles - $logBookVal->flight_cycles;
                        $logBookVal->save();
                    }
                }

                return response()->json(['message' => 'The flight evidence is ' . $str], 201);
            } else {
                return response()->json(['message' => 'The flight evidence can\'t be ' . $str . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The flight evidence doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LogBook  $logBook
     * @return \Illuminate\Http\Response
     */
    public function destroy($aircraftId, LogBook $logBook)
    {
        $flightTimeStart = $logBook->flight_time_start;
        $aircraftId = $logBook->aircraft_id;
        $oldFlightHours = $logBook->flight_hours;
        $oldFlightCycles = $logBook->flight_cycles;

        if ($logBook) {
            if ($logBook->delete()) {

                $logBookRes = LogBook::where('flight_time_start', '>', $flightTimeStart)
                    ->where('log_book.aircraft_id', $aircraftId)
                    ->get();
                foreach ($logBookRes as $logBookVal) {
                    $logBookVal->total_hours = $logBookVal->total_hours - $oldFlightHours;
                    $logBookVal->total_cycles = $logBookVal->total_cycles - $oldFlightCycles;
                    $logBookVal->previous_hours = $logBookVal->total_hours - $logBookVal->flight_hours;
                    $logBookVal->previous_cycles = $logBookVal->total_cycles - $logBookVal->flight_cycles;
                    $logBookVal->save();
                }
                return response()->json(['message' => 'The flight evidence is deleted'], 201);
            } else {
                return response()->json(['message' => 'The flight evidence can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The flight evidence doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;
        $aircraftId = request()->get('aircraft_id') ?? 0;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.description', 'LIKE', '%' . $aircraftId . '%')
            ->where('activity_log.subject_type', 'App\LogBook');

        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'log_book')
            ->orderBy('created_at', 'desc')
            ->get([
                'users.name as user',
                'activity_log.subject_id',
                DB::raw("substring_index(activity_log.description, ' ', 1) as description"),
                'activity_log.properties',
                DB::raw("convert_tz(activity_log.created_at, 'UTC', usr.timezone) as created_at"),
                DB::raw("convert_tz(activity_log.updated_at, 'UTC', usr.timezone) as updated_at"),
            ]);
        return response()->json($activities, 200);
    }

    // Reports

    private function defaultStatData()
    {
        $validatedData = request()->validate([
            'from_date' => ['required', 'string'],
            'to_date' => ['required', 'string']
        ]);

        $fromDate = $validatedData['from_date'];
        $toDate = $validatedData['to_date'];

        $logBookRes = LogBook::join('flight_routes', 'flight_routes.id', '=', 'log_book.flight_route_id')
            ->join('airports as apt1', 'apt1.id', '=', 'flight_routes.origin')
            ->join('airports as apt2', 'apt2.id', '=', 'flight_routes.destination')
            ->join('aircrafts', 'aircrafts.id', '=', 'log_book.aircraft_id')
            ->leftJoin('users as captains', 'captains.id', '=', 'log_book.captain_id')
            ->join('users as users', function ($q) {
                $q->where('users.id', '=', auth()->user()->id);
            })
            ->whereRaw('log_book.flight_time_start between ? and ?', [Carbon::parse($fromDate), Carbon::parse($toDate)])
            ->groupBy('aircrafts.reg')
            ->orderBy('aircrafts.reg', 'asc')
            ->select([
                'aircrafts.reg as aircraft_reg',
                DB::raw('sum(format(log_book.flight_hours, 2)) as total_hours'),
                DB::raw('sum(log_book.flight_cycles) as total_cycles'),
            ])->get();
        return [
            $fromDate,
            $toDate,
            $logBookRes,
        ];
    }

    public function aircraftStatisticsUI()
    {
        [
            $fromDate,
            $toDate,
            $logBookRes,
        ] = $this->defaultStatData();

        if ($logBookRes) {
            return response()->json($logBookRes);
        }

        return response()->json([]);
    }

    public function aircraftStatisticsPDF()
    {
        $pdf = App::make('dompdf.wrapper');
        [
            $fromDate,
            $toDate,
            $logBookRes,
        ] = $this->defaultStatData();
        $pdf->loadView('reports.log-book.report', ["logBookRes" => $logBookRes]);


        return $pdf->stream();
        return $pdf->download('aircraft-statistics-' . $toDate . '-' . $fromDate . '.pdf');
    }




    // Dashboard

    public function last30daysStatPerDay($aircraftId)
    {
        if ($aircraftId) {
            $period = new DatePeriod(Carbon::parse(Carbon::now()->toDateString())->subDays(30), CarbonInterval::day(), Carbon::now());
            $arr = [];
            foreach ($period as $date) {
                $logBook = LogBook::leftJoin('delay_reasons as dr1', 'dr1.id', '=', 'log_book.reason_1')
                    ->leftJoin('delay_reasons as dr2', 'dr1.id', '=', 'log_book.reason_2')
                    ->leftJoin('delay_reasons as dr3', 'dr1.id', '=', 'log_book.reason_3')
                    ->join('aircrafts', 'aircrafts.id', '=', 'log_book.aircraft_id')
                    ->leftJoin('users as captains', 'captains.id', '=', 'log_book.captain_id')
                    ->join('users as users', function ($q) {
                        $q->where('users.id', '=', auth()->user()->id);
                    })
                    ->where('aircrafts.id', $aircraftId)
                    ->whereRaw('cast(log_book.flight_time_start as date) = ?', [$date->toDateString()])
                    ->groupBy(['aircrafts.reg'])
                    ->select([
                        'aircrafts.reg as aircraft_reg',
                        DB::raw('sum(format(log_book.flight_hours, 2)) as flight_hours'),
                        DB::raw('sum(log_book.flight_cycles) as flight_cycles'),
                    ])->get();

                $t = true;
                foreach ($logBook as $lB) {
                    $arr[] = [
                        'date' => Carbon::parse($date->toDateString())->format('D'),
                        'aircraft_reg' => $lB->aircraft_reg,
                        'flight_hours' => $lB->flight_hours,
                        'flight_cycles' => $lB->flight_cycles,
                    ];
                    $t = false;
                }

                if ($t) {
                    $arr[] = [
                        'date' => Carbon::parse($date->toDateString())->format('D'),
                        'aircraft_reg' => null,
                        'flight_hours' => null,
                        'flight_cycles' => null,
                    ];
                }
            }

            return response()->json($arr);
        }
    }
}
