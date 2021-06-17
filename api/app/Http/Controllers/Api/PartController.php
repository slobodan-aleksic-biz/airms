<?php

namespace App\Http\Controllers\Api;

use App\Enums\ComponentTypeEnum;
use App\Enums\ConditionEnum;
use App\Enums\UnserviceableConditionEnum;
use App\Http\Controllers\Controller;
use App\Part;
use App\StockItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use LaravelQRCode\Facades\QRCode;
use Spatie\Activitylog\Models\Activity;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StockItem $stockItem)
    {
        if (!$stockItem) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }

        $serialOrBatchNumCol =  null;
        if ($stockItem->component_type == ComponentTypeEnum::EXPENDABLE) {
            $serialOrBatchNumCol = "parts.batch_num as b/n_left";
        } else {
            $serialOrBatchNumCol = "parts.serial_num as s/n_left";
        }

        $validatedData = request()->validate([
            'aircraft_id' => ['nullable', 'numeric'],
            'part_id' => ['nullable'],
        ]);

        $aircraftId = $validatedData['aircraft_id'] ?? null;
        $partId = $validatedData['part_id'] ?? null;

        $parts = [];

        if ($aircraftId) {

            if ($partId) {

                $parts = Part::join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                    //->where('parts.stock_item_id', $stockItem->id)
                    ->where('parts.aircraft_id', $aircraftId)
                    ->where('parts.id', '!=', $partId)
                    ->orderBy('parts.serial_num', 'asc')
                    ->orderBy('parts.batch_num', 'asc')
                    ->select([
                        'parts.id as id',
                        'parts.id as id_left',
                        $serialOrBatchNumCol,
                        // 'parts.name as name_left',
                        // 'parts.description as description_left',
                        // DB::raw("convert_tz(parts.created_at, 'UTC', users.timezone) as created_at_left"),
                        // DB::raw("convert_tz(parts.updated_at, 'UTC', users.timezone) as updated_at_left"),
                    ])->get();

            } else {

                $parts = Part::join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                    //->where('parts.stock_item_id', $stockItem->id)
                    ->where('parts.aircraft_id', $aircraftId)
                    ->orderBy('parts.serial_num', 'asc')
                    ->orderBy('parts.batch_num', 'asc')
                    ->select([
                        'parts.id as id',
                        'parts.id as id_left',
                        $serialOrBatchNumCol,
                        // 'parts.name as name_left',
                        // 'parts.description as description_left',
                        // DB::raw("convert_tz(parts.created_at, 'UTC', users.timezone) as created_at_left"),
                        // DB::raw("convert_tz(parts.updated_at, 'UTC', users.timezone) as updated_at_left"),
                    ])->get();

            }
        } else {

            $parts = Part::join('users as users', function ($q) {
                $q->where('users.id', '=', auth()->user()->id);
            })
                ->where('parts.stock_item_id', $stockItem->id)
                ->orderBy('parts.serial_num', 'asc')
                ->orderBy('parts.batch_num', 'asc')
                ->select([
                    'parts.id as id',
                    'parts.id as id_left',
                    $serialOrBatchNumCol,
                    // 'parts.name as name_left',
                    // 'parts.description as description_left',
                    // DB::raw("convert_tz(parts.created_at, 'UTC', users.timezone) as created_at_left"),
                    // DB::raw("convert_tz(parts.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->get();
        }

        return response()->json($parts);
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
    public function store(Request $request, StockItem $stockItem)
    {
        return $this->defaultAction($request, $stockItem, null);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function show(StockItem $stockItem, Part $part)
    {
        if (!$stockItem) {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }
        if (!$part) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }

        $serialOrBatchNumCol =  null;
        $serialOrBatchNumColOrder =  null;
        if ($stockItem->component_type == ComponentTypeEnum::EXPENDABLE) {
            $serialOrBatchNumCol = "parts.batch_num as batch_num";
            $serialOrBatchNumColOrder = "parts.batch_num";
        } else {
            $serialOrBatchNumCol = "parts.serial_num as serial_num";
            $serialOrBatchNumColOrder = "parts.serial_num";
        }

        $partVal = Part::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->join('stock_items', 'stock_items.id', '=', 'parts.stock_item_id')
            ->leftJoin('quantity_units', 'quantity_units.id', '=', 'parts.quantity_unit_id')
            ->leftJoin('aircraft_types', 'aircraft_types.id', '=', 'parts.aircraft_type_id')
            ->leftJoin('aircrafts', 'aircrafts.aircraft_type_id', '=', 'aircraft_types.id')
            ->join('a_t_a_chapters', 'a_t_a_chapters.id', '=', 'stock_items.a_t_a_chapter_id')
            ->join('owners', 'owners.id', '=', 'parts.owner_id')
            ->where('parts.id', $part->id)
            ->orderBy($serialOrBatchNumColOrder, 'asc')
            ->select([
                'parts.id as id',
                $serialOrBatchNumCol,

                'parts.quantity_alarm as quantity_alarm',
                'parts.quantity_unit_id as quantity_unit_id',

                'parts.note as note',

                'parts.is_depleted as is_depleted',

                'stock_items.component_category as component_category',
                'stock_items.component_type as component_type',

                'aircraft_types.id as aircraft_type_id',
                'aircraft_types.name as aircraft_type_name',
                'parts.aircraft_id as aircraft_id',
                'parts.parent_part_id as parent_part_id',

                'owners.id as owner_id',
                'owners.name as owner_name',

                'a_t_a_chapters.id as a_t_a_chapter_id',
                'a_t_a_chapters.code as a_t_a_chapter_code',
                'a_t_a_chapters.name as a_t_a_chapter_name',

                'stock_items.id as stock_idem_id',
                'stock_items.name as name',
                'stock_items.init_part_num as init_part_num',

                DB::raw("convert_tz(parts.created_at, 'UTC', users.timezone) as created_at"),
                DB::raw("convert_tz(parts.updated_at, 'UTC', users.timezone) as updated_at"),
            ])->first();

        if (!$partVal) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }

        return response()->json($partVal, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StockItem  $stockItem
     * @param  $serialNum
     * @param  $batchNum
     * @return \Illuminate\Http\Response
     */
    public function findPartBySerialOrBatchNum(StockItem $stockItem, $serialOrBatchNum)
    {
        if (!$stockItem) {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }

        $serialOrBatchNumCol =  null;
        if ($stockItem->component_type == ComponentTypeEnum::EXPENDABLE) {
            $serialOrBatchNumCol = "batch_num";
        } else {
            $serialOrBatchNumCol = "serial_num";
        }

        $part = Part::where('stock_item_id', $stockItem->id)
            ->where($serialOrBatchNumCol, $serialOrBatchNum)
            ->first();

        if (!$part) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }

        return response()->json($part, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function qr(StockItem $stockItem, Part $part)
    {

        if (!$stockItem) {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }

        if (!$part) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }

        $partVal = Part::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->join('stock_items', 'stock_items.id', '=', 'parts.stock_item_id')
            ->leftJoin('quantity_units', 'quantity_units.id', '=', 'parts.quantity_unit_id')
            ->leftJoin('aircraft_types', 'aircraft_types.id', '=', 'parts.aircraft_type_id')
            ->leftJoin('aircrafts', 'aircrafts.aircraft_type_id', '=', 'aircraft_types.id')
            ->join('a_t_a_chapters', 'a_t_a_chapters.id', '=', 'stock_items.a_t_a_chapter_id')
            ->join('owners', 'owners.id', '=', 'parts.owner_id')
            ->where('parts.id', $part->id)
            ->orderBy('parts.serial_num', 'asc')
            ->orderBy('parts.batch_num', 'asc')
            ->select([
                'parts.id as id',
                'parts.serial_num as serial_num',
                'parts.batch_num as batch_num',

                'parts.quantity_alarm as quantity_alarm',
                'parts.quantity_unit_id as quantity_unit_id',

                'parts.note as note',
                'parts.is_depleted as is_depleted',

                'stock_items.component_category as component_category',
                'stock_items.component_type as component_type',

                'aircraft_types.id as aircraft_type_id',
                'aircraft_types.name as aircraft_type_name',

                'owners.id as owner_id',
                'owners.name as owner_name',

                'a_t_a_chapters.id as a_t_a_chapter_id',
                'a_t_a_chapters.code as a_t_a_chapter_code',
                'a_t_a_chapters.name as a_t_a_chapter_name',

                'stock_items.name as name',
                'stock_items.init_part_num as init_part_num',

                DB::raw("convert_tz(parts.created_at, 'UTC', users.timezone) as created_at"),
                DB::raw("convert_tz(parts.updated_at, 'UTC', users.timezone) as updated_at"),
            ])->first();


        if (!$partVal) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }

        $str = "";
        if ($partVal->init_part_num) {
            $str .= "part num: " . $partVal->init_part_num;
        }
        if ($partVal->serial_num) {
            $str .= "\nserial num: " . $partVal->serial_num;
        }
        if ($partVal->batch_num) {
            $str .= "\nbatch num: " . $partVal->batch_num;
        }

        return QRCode::text($str)->png();
        // return response()->json($partVal, 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function edit(Part $part)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockItem $stockItem, Part $part)
    {
        return $this->defaultAction($request, $stockItem, $part->id);
    }



    private function defaultAction(Request $request, $stockItem, $id)
    {
        $part = null;
        $actionStr = "";

        if ($id) {
            $part = Part::where('stock_item_id', $stockItem->id)->find($id);
            $actionStr = "updated";
        } else {
            $part = new Part();
            $actionStr = "created";
        }

        if ($part) {

            $validate['note'] = ['nullable'];
            $validate['is_depleted'] = ['nullable'];
            if ($stockItem->component_type ==  ComponentTypeEnum::EXPENDABLE) {
                $validate['batch_num'] = ['required', 'string', 'unique:parts,batch_num,' . $id];
                $validate['quantity_alarm'] = ['nullable'];
                $validate['quantity_unit_id'] = ['required'];
                $validate['aircraft_type_id'] = ['nullable', 'numeric'];
                $validate['aircraft_id'] = ['nullable', 'numeric'];
            } else {
                $validate['serial_num'] = ['required', 'string', 'unique:parts,serial_num,' . $id];
                $validate['aircraft_type_id'] = ['required', 'numeric'];
                $validate['aircraft_id'] = ['required', 'numeric'];
                $validate['parent_part_id'] = ['nullable', 'numeric'];
            }

            $validate['owner_id'] = ['required', 'numeric'];

            $validatedData = request()->validate($validate);

            if ($stockItem->component_type ==  ComponentTypeEnum::EXPENDABLE) {
                $part->batch_num = $validatedData['batch_num'];
                $part->quantity_alarm = $validatedData['quantity_alarm'];
                $part->quantity_unit_id = $validatedData['quantity_unit_id'];
                $part->aircraft_type_id = $validatedData['aircraft_type_id'] ?? null;
                $part->aircraft_id = $validatedData['aircraft_id'] ?? null;
            } else {
                $part->serial_num = $validatedData['serial_num'];
                $part->aircraft_type_id = $validatedData['aircraft_type_id'];
                $part->aircraft_id = $validatedData['aircraft_id'];
                $part->parent_part_id = $validatedData['parent_part_id'] ?? null;
            }

            $part->owner_id = $validatedData['owner_id'];
            $part->note = $validatedData['note'];
            $part->is_depleted = $validatedData['is_depleted'] ? true : false;
            $part->stock_item_id = $stockItem->id;

            if ($part->save()) {
                return response()->json(['message' => 'The part is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The part can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The part doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockItem $stockItem, Part $part)
    {
        if ($part) {
            if ($part->delete()) {
                return response()->json(['message' => 'The part is deleted'], 201);
            } else {
                return response()->json(['message' => 'The part can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The part doesn\'t exists!'], 409);
        }
    }

    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\Part');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'part')
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
