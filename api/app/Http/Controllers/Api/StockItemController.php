<?php

namespace App\Http\Controllers\Api;

use App\Enums\ComponentType;
use App\Enums\ComponentTypeEnum;
use App\Http\Controllers\Controller;
use App\StockItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class StockItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $validatedData = request()->validate([
            'is_camo_page' => ['nullable']
        ]);

        $stockItems = [];

        if($validatedData['is_camo_page'] ?? false) {
            $stockItems = StockItem::join('users as users', function ($q) {
                $q->where('users.id', '=', auth()->user()->id);
            })
            ->where('stock_items.component_type', '!=', ComponentTypeEnum::EXPENDABLE)
            ->orderBy('stock_items.init_part_num', 'asc')
            ->orderBy('stock_items.name', 'asc')
            ->select([
                'stock_items.id as id',
                'stock_items.init_part_num as init_p/n_left',
                // 'stock_items.name as name_left',
                // 'stock_items.description as description_left',
                // DB::raw("convert_tz(stock_items.created_at, 'UTC', users.timezone) as created_at_left"),
                // DB::raw("convert_tz(stock_items.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();
        } else {
            $stockItems = StockItem::join('users as users', function ($q) {
                $q->where('users.id', '=', auth()->user()->id);
            })
            ->orderBy('stock_items.init_part_num', 'asc')
            ->orderBy('stock_items.name', 'asc')
            ->select([
                'stock_items.id as id',
                'stock_items.init_part_num as init_p/n_left',
                // 'stock_items.name as name_left',
                // 'stock_items.description as description_left',
                // DB::raw("convert_tz(stock_items.created_at, 'UTC', users.timezone) as created_at_left"),
                // DB::raw("convert_tz(stock_items.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();
        }

        return response()->json($stockItems);
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
     * @param  \App\StockItem  $stockItem
     * @return \Illuminate\Http\Response
     */
    public function show(StockItem $stockItem)
    {
        if ($stockItem) {
            return response()->json($stockItem, 200);
        } else {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  $stockItem
     * @return \Illuminate\Http\Response
     */
    public function findStockItemByPartNum($partNum)
    {
        $stockItemByPartNum = StockItem::where('init_part_num', $partNum)->first();
        if ($stockItemByPartNum) {
            return response()->json($stockItemByPartNum, 200);
        } else {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StockItem  $stockItem
     * @return \Illuminate\Http\Response
     */
    public function edit(StockItem $stockItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StockItem  $stockItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockItem $stockItem)
    {
        return $this->defaultAction($request, $stockItem->id);
    }



    private function defaultAction(Request $request, $id)
    {
        $stockItem = null;
        $actionStr = "";

        if ($id) {
            $stockItem = StockItem::find($id);
            $actionStr = "updated";
        } else {
            $stockItem = new StockItem();
            $actionStr = "created";
        }

        if ($stockItem) {

            $validatedData = request()->validate([
                'init_part_num' => ['required', 'string', 'unique:stock_items,init_part_num,' . $id],
                'name' => ['required', 'string', 'unique:stock_items,name,' . $id],
                'description' => ['nullable', 'string'],
                'a_t_a_chapter_id' => ['required', 'numeric'],
                'component_category' => ['required', 'string'],
                'component_type' => ['required', 'string'],
                'is_consumable' => ['nullable'],
                'is_recoverable' => ['nullable'],
                'is_dangerous_goods' => ['nullable'],
                'is_shelf_life_applicable' => ['nullable'],
            ]);

            $stockItem->init_part_num = $validatedData['init_part_num'];
            $stockItem->name = $validatedData['name'];
            $stockItem->description = $validatedData['description'];
            $stockItem->a_t_a_chapter_id = $validatedData['a_t_a_chapter_id'];
            $stockItem->component_category = $validatedData['component_category'];
            $stockItem->component_type = $validatedData['component_type'];
            $isConsumable = $validatedData['is_consumable'] ? true : false;
            $stockItem->is_consumable = $isConsumable;
            $stockItem->is_recoverable = $isConsumable ? false : ($validatedData['is_recoverable'] ? true : false);
            $stockItem->is_dangerous_goods = $validatedData['is_dangerous_goods'] ? true : false;
            $stockItem->is_shelf_life_applicable = $validatedData['is_shelf_life_applicable'] ? true : false;

            if ($stockItem->save()) {
                return response()->json(['message' => 'The stock item is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The stock item can\'t be ' . $actionStr . '!'], 409);
            }

        } else {
            return response()->json(['message' => 'The stock item doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StockItem  $stockItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockItem $stockItem)
    {
        if ($stockItem) {
            if ($stockItem->delete()) {
                return response()->json(['message' => 'The stock item is deleted'], 201);
            } else {
                return response()->json(['message' => 'The stock item can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The stock item doesn\'t exists!'], 409);
        }
    }

    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\StockItem');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'stock_item')
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
