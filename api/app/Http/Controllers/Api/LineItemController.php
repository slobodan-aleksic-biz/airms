<?php

namespace App\Http\Controllers\Api;

use App\Constants\LineItemSettings;
use App\Enums\ComponentTypeEnum;
use App\Enums\ConditionEnum;
use App\Enums\LineItemLocationEnum;
use App\Http\Controllers\Controller;
use App\LineItem;
use App\Part;
use App\StockItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class LineItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StockItem $stockItem, Part $part)
    {
        if (!$stockItem) {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }

        if (!$part) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }

        $lineItems = [];

        if ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE) {


            $lineItems = DB::select("
            select
                line_items.id as id,

                case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    then concat('SVO-', line_items.bin)
                    else concat('SVI-', line_items.bin)
                end as 'input / output_doc_num_center',



                line_items.input_date as 'input / output_date_center',

                concat(
                    line_items.condition,
                    case when line_items.unserviceable_condition is null
                        then ''
                        else concat(' (',line_items.unserviceable_condition,')')
                    end
                    ) as condition_left,

                line_items.certificate_date as certificate_date_center,

            "
                .
                ($stockItem->is_shelf_life_applicable
                    ?
                    "
                        line_items.shelf_life as shelf_life_right,
                        line_items.shelf_life_alarm as shelf_life_alarm_right,
                        "
                    :
                    "")
                .
                "
                concat(
                    replace(line_items.location, '_', ' '),
                    (
                        case when line_items.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                            then
                                concat(
                                    ' (',
                                    stocks.name
                                    ,' - ',
                                    line_items.stock_position
                                    ,') '
                                )
                            when line_items.location in ('" . LineItemLocationEnum::SERVICE . "')
                            then
                                concat(
                                    ' (',
                                    shops.name
                                    ,') '
                                )
                            when line_items.location in ('" . LineItemLocationEnum::TRANSFER_TO . "')
                            then
                                concat(
                                    ' (',
                                    stocks.name
                                    ,') '
                                )
                            else ''
                        end
                    )
                ) as location_center,


                line_items.invoice_ref as invoice_ref_center,


                case when line_items.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    then
                    (
                        case when line_items.condition = '" . ConditionEnum::SERVICEABLE . "'
                            then line_items.quantity
                            else -line_items.quantity
                        end
                    )
                    else '0'
                end as input_qty_right,

                case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                then
                (
                    case when line_items.condition = '" . ConditionEnum::SERVICEABLE . "'
                        then line_items.quantity
                        else -line_items.quantity
                    end
                )
                else '0'
                end as output_qty_right,

                ifnull(ifnull((
                    select sum(
                            ifnull(
                            (
                                case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                    then li.quantity
                                    else -li.quantity
                                end
                            )
                            ,0)
                        )
                    from (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l) li
                    where li.part_id = line_items.part_id
                    and li.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    and li.rn <= line_items.rn
                    order by input_date asc, li.id asc)
                ,0) - ifnull((
                    select sum(
                            ifnull(
                            (
                                case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                    then li.quantity
                                    else -li.quantity
                                end
                            )
                            ,0)
                        )
                    from (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l)  li
                    where li.part_id = line_items.part_id
                    and li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    and li.rn <= line_items.rn
                    order by input_date asc, li.input_date asc)
                ,0),0)
                as qty_balance_right,
                quantity_units.code as qty_unit_left,
                line_items.location as action,

                line_items.did_it_come_from_mro_or_st

            from users,
                parts,
                stock_items,
                (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l) line_items
                left join stocks on stocks.id = line_items.stock_id
                left join shops on shops.id = line_items.shop_id,
                a_t_a_chapters,
                quantity_units,

                owners

            where users.id = ?

            and parts.id = line_items.part_id
            and stock_items.id = parts.stock_item_id
            and a_t_a_chapters.id = stock_items.a_t_a_chapter_id
            and quantity_units.id = parts.quantity_unit_id
            and owners.id = parts.owner_id

            and parts.stock_item_id = ?
            and parts.id = ?
            and line_items.part_id = ?

            order by
                line_items.input_date asc,
                line_items.rn asc,
                line_items.id asc
        ", [
                auth()->user()->id,
                $stockItem->id,
                $part->id,
                $part->id,
            ]);
        } else {


            $lineItems = DB::select("
            select
                line_items.id as id,

                case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    then concat('SVO-', line_items.bin)
                    else concat('SVI-', line_items.bin)
                end as 'input / output_doc_num_center',


                line_items.part_num as part_num_left,

                line_items.input_date as 'input / output_date_center',

                concat(
                    line_items.condition,
                    case when line_items.unserviceable_condition is null
                        then ''
                        else concat(' (',line_items.unserviceable_condition,')')
                    end
                    ) as condition_left,

                line_items.certificate_date as certificate_date_center,

                "
                .
                ($stockItem->is_shelf_life_applicable
                    ?
                    "
                        line_items.shelf_life as shelf_life_right,
                        line_items.shelf_life_alarm as shelf_life_alarm_right,
                        "
                    :
                    "")
                .
                "
                concat(
                    replace(line_items.location, '_', ' '),
                    (
                        case when line_items.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                            then
                                concat(
                                    ' (',
                                    stocks.name
                                    ,' - ',
                                    line_items.stock_position
                                    ,') '
                                )
                            when line_items.location in ('" . LineItemLocationEnum::SERVICE . "')
                            then
                                concat(
                                    ' (',
                                    shops.name
                                    ,') '
                                )
                            when line_items.location in ('" . LineItemLocationEnum::TRANSFER_TO . "')
                            then
                                concat(
                                    ' (',
                                    stocks.name
                                    ,') '
                                )
                            else ''
                        end
                    )
                ) as location_center,


                line_items.invoice_ref as invoice_ref_center,


                case when line_items.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    then
                    (
                        case when line_items.condition = '" . ConditionEnum::SERVICEABLE . "'
                            then line_items.quantity
                            else 0
                        end
                    )
                    else '0'
                end as input_qty_right,

                case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                then
                (
                    case when line_items.condition = '" . ConditionEnum::SERVICEABLE . "'
                        then line_items.quantity
                        else 0
                    end
                )
                else '0'
                end as output_qty_right,

                ifnull(ifnull((
                    select sum(
                            ifnull(
                            (
                                case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                    then li.quantity
                                    else 0
                                end
                            )
                            ,0)
                        )
                    from (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l) li
                    where li.part_id = line_items.part_id
                    and li.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    and li.rn <= line_items.rn
                    order by input_date asc, li.id asc)
                ,0) - ifnull((
                    select sum(
                            ifnull(
                            (
                                case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                    then li.quantity
                                    else 0
                                end
                            )
                            ,0)
                        )
                    from (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l)  li
                    where li.part_id = line_items.part_id
                    and li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    and li.rn <= line_items.rn
                    order by input_date asc, li.input_date asc)
                ,0),0)
                as qty_balance_right,
                'piece' as qty_unit_left,
                line_items.location as action,

                line_items.did_it_come_from_mro_or_st

            from users,
                parts,
                stock_items,
                (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l) line_items
                left join stocks on stocks.id = line_items.stock_id
                left join shops on shops.id = line_items.shop_id,
                a_t_a_chapters,
                owners

            where users.id = ?

            and parts.id = line_items.part_id
            and stock_items.id = parts.stock_item_id
            and a_t_a_chapters.id = stock_items.a_t_a_chapter_id

            and owners.id = parts.owner_id

            and parts.stock_item_id = ?
            and parts.id = ?
            and line_items.part_id = ?

            order by
                line_items.input_date asc,
                line_items.rn asc,
                line_items.id asc
        ", [
                auth()->user()->id,
                $stockItem->id,
                $part->id,
                $part->id,
            ]);
        }



        // foreach($lineItems as $lineItem) {
        //     $lineItem["input qty_right"]
        // }
        // // $total =


        return response()->json($lineItems);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function advancedSearch()
    {
        $validatedData = request()->validate([
            'is_camo_page' => ['nullable']
        ]);

        $lineItems = [];

        if ($validatedData['is_camo_page'] ?? false) {

            $lineItems = LineItem::join('users as users', function ($q) {
                $q->where('users.id', '=', auth()->user()->id);
            })
                ->join('parts', 'parts.id', '=', 'line_items.part_id')
                ->join('stock_items', 'stock_items.id', '=', 'parts.stock_item_id')
                ->join('a_t_a_chapters', 'a_t_a_chapters.id', '=', 'stock_items.a_t_a_chapter_id')
                ->leftJoin('quantity_units', 'quantity_units.id', '=', 'parts.quantity_unit_id')
                ->join('stocks', 'stocks.id', '=', 'line_items.stock_id')
                ->whereIn('location', [
                    LineItemLocationEnum::STOCK_A,
                    LineItemLocationEnum::STOCK_B,
                ])
                ->where('stock_items.component_type', '!=', ComponentTypeEnum::EXPENDABLE)
                ->orderBy('a_t_a_chapters.code', 'asc')
                ->groupBy([
                    'a_t_a_chapters.code',

                    'stock_items.id',
                    'stock_items.name',
                    'stock_items.init_part_num',

                    'parts.id',
                    'parts.serial_num',
                    'parts.batch_num',
                    'quantity_units.code',
                ])
                ->select([
                    DB::raw("
                    (
                        select li.id
                        from line_items li
                        where li.part_id = parts.id
                        order by li.input_date desc, li.id desc
                        limit 1
                    )
                    as id"),


                    DB::raw("
                    (
                        select (
                            case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                            then concat('SVO-', li.bin, '<br>', li.input_date)
                            else concat('SVI-', li.bin, '<br>', li.input_date)
                            end
                            ) as ls_bin
                        from line_items li
                        where li.part_id = parts.id
                        order by li.input_date desc, li.id desc
                        limit 1
                    )
                    as doc_number_center"),

                    'a_t_a_chapters.code as ata_center',

                    'stock_items.component_category as component_category_center',
                    'stock_items.component_type as component_type_center',

                    DB::raw("
                    concat(
                    'NAME: ',stock_items.name,
                    '<br>INIT P/N: ', stock_items.init_part_num,
                    case
                    when stock_items.component_type != '" . ComponentTypeEnum::EXPENDABLE . "' then

                        concat('<br>P/N: ', (
                            select case when li.part_num is null then '' else  li.part_num end as part_num
                            from line_items li
                            where li.part_id = parts.id
                            order by li.input_date desc, li.id desc
                            limit 1
                        ))
                    else
                            ''
                    end,
                    case
                        when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                            case when parts.batch_num then concat('<br>B/N: ',parts.batch_num) else '' end
                        else
                            case when parts.serial_num then concat('<br>S/N: ',parts.serial_num) else '' end
                    end
                    ) as 'name p/n s/n b/n_left'"),


                    DB::raw("
                        ifnull(
                            (
                                select sum(
                                    ifnull(
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else (
                                                case
                                                    when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                                        -li.quantity
                                                    else
                                                        0
                                                end
                                            )
                                        end
                                    )
                                    ,0)
                                ) as quantity
                                from line_items li
                                where li.part_id = parts.id
                                and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                            )
                        ,0)
                    as input_qty_right"),


                    DB::raw("
                        ifnull(
                            (
                                select sum(
                                    ifnull(
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else (
                                                case
                                                    when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                                        -li.quantity
                                                    else
                                                        0
                                                end
                                            )
                                        end
                                    )
                                    ,0)
                                ) as quantity
                                from line_items li
                                where li.part_id = parts.id
                                and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                            )
                        ,0)
                    as output_qty_right"),


                    DB::raw("
                        ifnull(
                            (
                                select sum(
                                    ifnull(
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else (
                                                case
                                                    when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                                        -li.quantity
                                                    else
                                                        0
                                                end
                                            )
                                        end
                                    )
                                    ,0)
                                ) as quantity
                                from line_items li
                                where li.part_id = parts.id
                                and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                            )
                        ,0)
                        -
                        ifnull(
                            (
                                select sum(
                                    ifnull(
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else (
                                                case
                                                    when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                                        -li.quantity
                                                    else
                                                        0
                                                end
                                            )
                                        end
                                    )
                                    ,0)
                                ) as quantity
                                from line_items li
                                where li.part_id = parts.id
                                and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                            )
                        ,0)
                    as qty_balance_right"),


                    DB::raw("ifnull(quantity_units.code, 'piece') as qty_unit_left"),


                    DB::raw("
                    (
                        select s.name
                        from line_items li,
                            stocks s
                        where li.part_id = parts.id
                        and s.id = li.stock_id
                        order by li.input_date desc, li.id desc
                        limit 1
                    )
                    as stock_left"),


                    'stock_items.id as stock_item_id',
                    'parts.id as part_id',


                    'stock_items.init_part_num as init_part_num',
                    'stock_items.component_type as component_type',

                    DB::raw("
                    case
                        when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                            parts.batch_num
                        else
                            parts.serial_num
                    end as serial_or_batch_num
                    "),

                    DB::raw("
                    (
                        select (
                            case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                            then concat('SVO-', li.bin)
                            else concat('SVI-', li.bin)
                            end
                            ) as ls_bin
                        from line_items li
                        where li.part_id = parts.id
                        order by li.input_date desc, li.id desc
                        limit 1
                    )
                    as bin"),
                ])->get();


        } else {

            $lineItems = LineItem::join('users as users', function ($q) {
                $q->where('users.id', '=', auth()->user()->id);
            })
                ->join('parts', 'parts.id', '=', 'line_items.part_id')
                ->join('stock_items', 'stock_items.id', '=', 'parts.stock_item_id')
                ->join('a_t_a_chapters', 'a_t_a_chapters.id', '=', 'stock_items.a_t_a_chapter_id')
                ->leftJoin('quantity_units', 'quantity_units.id', '=', 'parts.quantity_unit_id')
                ->join('stocks', 'stocks.id', '=', 'line_items.stock_id')
                ->whereIn('location', [
                    LineItemLocationEnum::STOCK_A,
                    LineItemLocationEnum::STOCK_B,
                ])
                ->orderBy('a_t_a_chapters.code', 'asc')
                ->groupBy([
                    'a_t_a_chapters.code',

                    'stock_items.id',
                    'stock_items.name',
                    'stock_items.init_part_num',

                    'parts.id',
                    'parts.serial_num',
                    'parts.batch_num',
                    'quantity_units.code',
                ])
                ->select([
                    DB::raw("
                    (
                        select li.id
                        from line_items li
                        where li.part_id = parts.id
                        order by li.input_date desc, li.id desc
                        limit 1
                    )
                    as id"),


                    DB::raw("
                    (
                        select (
                            case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                            then concat('SVO-', li.bin, '<br>', li.input_date)
                            else concat('SVI-', li.bin, '<br>', li.input_date)
                            end
                            ) as ls_bin
                        from line_items li
                        where li.part_id = parts.id
                        order by li.input_date desc, li.id desc
                        limit 1
                    )
                    as doc_number_center"),

                    'a_t_a_chapters.code as ata_center',

                    'stock_items.component_category as component_category_center',
                    'stock_items.component_type as component_type_center',

                    DB::raw("
                    concat(
                    'NAME: ',stock_items.name,
                    '<br>INIT P/N: ', stock_items.init_part_num,
                    case
                    when stock_items.component_type != '" . ComponentTypeEnum::EXPENDABLE . "' then

                        concat('<br>P/N: ', (
                            select case when li.part_num is null then '' else  li.part_num end as part_num
                            from line_items li
                            where li.part_id = parts.id
                            order by li.input_date desc, li.id desc
                            limit 1
                        ))
                    else
                            ''
                    end,
                    case
                        when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                            case when parts.batch_num then concat('<br>B/N: ',parts.batch_num) else '' end
                        else
                            case when parts.serial_num then concat('<br>S/N: ',parts.serial_num) else '' end
                    end
                    ) as 'name p/n s/n b/n_left'"),


                    DB::raw("
                        ifnull(
                            (
                                select sum(
                                    ifnull(
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else (
                                                case
                                                    when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                                        -li.quantity
                                                    else
                                                        0
                                                end
                                            )
                                        end
                                    )
                                    ,0)
                                ) as quantity
                                from line_items li
                                where li.part_id = parts.id
                                and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                            )
                        ,0)
                    as input_qty_right"),


                    DB::raw("
                        ifnull(
                            (
                                select sum(
                                    ifnull(
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else (
                                                case
                                                    when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                                        -li.quantity
                                                    else
                                                        0
                                                end
                                            )
                                        end
                                    )
                                    ,0)
                                ) as quantity
                                from line_items li
                                where li.part_id = parts.id
                                and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                            )
                        ,0)
                    as output_qty_right"),


                    DB::raw("
                        ifnull(
                            (
                                select sum(
                                    ifnull(
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else (
                                                case
                                                    when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                                        -li.quantity
                                                    else
                                                        0
                                                end
                                            )
                                        end
                                    )
                                    ,0)
                                ) as quantity
                                from line_items li
                                where li.part_id = parts.id
                                and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                            )
                        ,0)
                        -
                        ifnull(
                            (
                                select sum(
                                    ifnull(
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else (
                                                case
                                                    when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                                        -li.quantity
                                                    else
                                                        0
                                                end
                                            )
                                        end
                                    )
                                    ,0)
                                ) as quantity
                                from line_items li
                                where li.part_id = parts.id
                                and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                            )
                        ,0)
                    as qty_balance_right"),


                    DB::raw("ifnull(quantity_units.code, 'piece') as qty_unit_left"),


                    DB::raw("
                    (
                        select s.name
                        from line_items li,
                            stocks s
                        where li.part_id = parts.id
                        and s.id = li.stock_id
                        order by li.input_date desc, li.id desc
                        limit 1
                    )
                    as stock_left"),


                    'stock_items.id as stock_item_id',
                    'parts.id as part_id',


                    'stock_items.init_part_num as init_part_num',
                    'stock_items.component_type as component_type',

                    DB::raw("
                    case
                        when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                            parts.batch_num
                        else
                            parts.serial_num
                    end as serial_or_batch_num
                    "),

                    DB::raw("
                    (
                        select (
                            case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                            then concat('SVO-', li.bin)
                            else concat('SVI-', li.bin)
                            end
                            ) as ls_bin
                        from line_items li
                        where li.part_id = parts.id
                        order by li.input_date desc, li.id desc
                        limit 1
                    )
                    as bin"),
                ])->get();

        }


        //     $lineItems = DB::select("

        //             select
        //             (
        //                 select li.id
        //                 from line_items li
        //                 where li.part_id = parts.id
        //                 order by li.input_date desc, li.id desc
        //                 limit 1
        //             )
        //             as id,
        //             (
        //                 select (
        //                     case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
        //                     then concat('SVO-', li.bin, '<br>', li.input_date)
        //                     else concat('SVI-', li.bin, '<br>', li.input_date)
        //                     end
        //                     ) as x
        //                 from line_items li
        //                 where li.part_id = parts.id
        //                 order by li.input_date desc, li.id desc
        //                 limit 1
        //             )
        //             as doc_number_center,

        //             a_t_a_chapters.code as ata_center,


        //             concat(
        //             'NAME: ',stock_items.name,
        //             '<br>P/N: ',stock_items.init_part_num,
        //             '<br>P/N: ', (
        //                select case when part_num is null then '' else  part_num end as part_num
        //                from line_items li
        //                where li.part_id = parts.id
        //                order by li.input_date desc, li.id desc
        //                limit 1
        //            ),
        //             case when parts.serial_num then concat('<br>S/N: ',parts.serial_num) else '' end,
        //             case when parts.batch_num then concat('<br>B/N: ',parts.batch_num) else '' end
        //             ) as 'name p/n s/n b/n_left',

        //                 (
        //                     select sum(li.quantity) as quantity
        //                     from line_items li
        //                     where li.part_id = parts.id
        //                     and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
        //                 )
        //             as input_qty_right,

        //                 (
        //                     select sum(li.quantity) as quantity
        //                     from line_items li
        //                     where li.part_id = parts.id
        //                     and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
        //                 )
        //             as output_qty_right,


        //             ifnull(ifnull(     (
        //                 select sum(li.quantity) as quantity
        //                 from line_items li
        //                 where li.part_id = parts.id
        //                 and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
        //             )
        //             ,0) - ifnull(  (
        //                 select sum(li.quantity) as quantity
        //                 from line_items li
        //                 where li.part_id = parts.id
        //                 and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
        //             )
        //             ,0),0)
        //             as qty_balance_right,


        //             quantity_units.code as qty_unit_left,

        //             (
        //                 select s.name
        //                 from line_items li,
        //                     stocks s
        //                 where li.part_id = parts.id
        //                 and s.id = li.stock_id
        //                 order by li.input_date desc, li.id desc
        //                 limit 1
        //             )
        //             as stock_left,


        //             stock_items.id as stock_item_id,
        //             parts.id as part_id,

        //             stock_items.init_part_num as init_part_num,
        //             parts.serial_num as serial_num,
        //             parts.batch_num as batch_num


        //             from users,
        //                 parts,
        //                 stock_items,
        //                 (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l) line_items,
        //                 a_t_a_chapters,
        //                 quantity_units,

        //                 stocks,
        //                 owners

        //             where users.id = ?

        //             and parts.id = line_items.part_id
        //             and stock_items.id = parts.stock_item_id
        //             and a_t_a_chapters.id = stock_items.a_t_a_chapter_id
        //             and quantity_units.id = parts.quantity_unit_id
        //             and stocks.id = line_items.stock_id
        //             and owners.id = parts.owner_id

        //             and line_items.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')

        //             group by
        //                 a_t_a_chapters.code,
        //                 stock_items.id,
        //                 stock_items.name,
        //                 stock_items.init_part_num,
        //                 parts.id,
        //                 parts.serial_num,
        //                 parts.batch_num,
        //                 quantity_units.code

        //             order by
        //                 a_t_a_chapters.code asc
        // ", [
        //         auth()->user()->id
        //     ]);


        return response()->json($lineItems);
    }

    public function showLocations(StockItem $stockItem, Part $part)
    {
        if (!$stockItem) {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }

        if (!$part) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }

        if ($part->stock_item_id != $stockItem->id) {
            return response()->json(['message' => 'The part doesn\'t belong to the stock item list!'], 409);
        }

        $locations = [
            [
                'id' => LineItemLocationEnum::STOCK_A,
                'name_left' => str_replace('_', ' ', strtoupper(LineItemLocationEnum::STOCK_A)),
            ],
            [
                'id' => LineItemLocationEnum::MRO,
                'name_left' => str_replace('_', ' ', strtoupper(LineItemLocationEnum::MRO)),
            ],
            [
                'id' => LineItemLocationEnum::STOCK_B,
                'name_left' => str_replace('_', ' ', strtoupper(LineItemLocationEnum::STOCK_B)),
            ],
            [
                'id' => LineItemLocationEnum::SERVICE,
                'name_left' => str_replace('_', ' ', strtoupper(LineItemLocationEnum::SERVICE)),
            ],
            [
                'id' => LineItemLocationEnum::TRANSFER_TO,
                'name_left' => str_replace('_', ' ', strtoupper(LineItemLocationEnum::TRANSFER_TO)),
            ],
        ];
        return response()->json($locations, 201);
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
    public function store(Request $request, StockItem $stockItem, Part $part)
    {
        return $this->defaultAction($request, $stockItem, $part, null);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Part  $lineItem
     * @return \Illuminate\Http\Response
     */
    public function show(StockItem $stockItem, Part $part, LineItem $lineItem)
    {
        if (!$stockItem) {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }
        if (!$part) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }
        if (!$lineItem) {
            return response()->json(['message' => 'The line item doesn\'t exist!'], 409);
        }

        $lineItemVal = null;

        if ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE) {

            $lineItemVal = DB::select(
                "
                select
                    line_items.id as id,

                    case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                        then concat('SVO-', line_items.bin)
                        else concat('SVI-', line_items.bin)
                    end as 'input / output_doc_num_center',


                    line_items.input_date as 'input / output_date_center',

                    line_items.condition,

                    line_items.certificate_date as certificate_date_center,

                "
                    .
                    ($stockItem->is_shelf_life_applicable
                        ?
                        "
                            line_items.shelf_life as shelf_life_right,
                            line_items.shelf_life_alarm as shelf_life_alarm_right,
                            "
                        :
                        "")
                    .
                    "
                    line_items.location as action,
                    line_items.stock_id,
                    line_items.stock_position,
                    line_items.technician_id,
                    line_items.note,
                    line_items.shop_id,
                    line_items.did_it_come_from_mro_or_st,

                    concat(
                        replace(line_items.location, '_', ' '),
                        (
                            case when line_items.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                then
                                    concat(
                                        ' (',
                                        stocks.name
                                        ,' - ',
                                        line_items.stock_position
                                        ,') '
                                    )
                                when line_items.location in ('" . LineItemLocationEnum::SERVICE . "')
                                then
                                    concat(
                                        ' (',
                                        shops.name
                                        ,') '
                                    )
                                when line_items.location in ('" . LineItemLocationEnum::TRANSFER_TO . "')
                                then
                                    concat(
                                        ' (',
                                        stocks.name
                                        ,') '
                                    )
                                else ''
                            end
                        )
                    ) as location_center,


                    line_items.invoice_ref as invoice_ref_center,


                    case when line_items.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                        then
                        (
                            case when line_items.condition = '" . ConditionEnum::SERVICEABLE . "'
                                then line_items.quantity
                                else -line_items.quantity
                            end
                        )
                        else '0'
                    end as input_qty_right,

                    case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    then
                    (
                        case when line_items.condition = '" . ConditionEnum::SERVICEABLE . "'
                            then line_items.quantity
                            else -line_items.quantity
                        end
                    )
                    else '0'
                    end as output_qty_right,

                    ifnull(ifnull((
                        select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else -li.quantity
                                    end
                                )
                                ,0)
                            )
                        from (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l) li
                        where li.part_id = line_items.part_id
                        and li.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                        and li.rn <= line_items.rn
                        order by input_date asc, li.id asc)
                    ,0) - ifnull((
                        select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else -li.quantity
                                    end
                                )
                                ,0)
                            )
                        from (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l)  li
                        where li.part_id = line_items.part_id
                        and li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                        and li.rn <= line_items.rn
                        order by input_date asc, li.input_date asc)
                    ,0),0)
                    as qty_balance_right,

                    (
                        case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                        then 2
                        else  (
                            case
                                when datediff(now(), line_items.certificate_date) >= line_items.shelf_life_alarm
                                    then 0
                                when datediff(now(), line_items.certificate_date - INTERVAL " . LineItemSettings::SHELF_LIFE_WARNING_ALARM_IN_DAYS . " DAY) > line_items.shelf_life_alarm
                                    then 1
                                    else 2
                            end
                        )
                        end
                    )
                    as is_shelf_life_ok,

                    datediff(now(), line_items.certificate_date) shelf_life_diff,

                    quantity_units.code as qty_unit_left
                from users,
                    parts,
                    stock_items,
                    (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l) line_items
                    left join stocks on stocks.id = line_items.stock_id
                    left join shops on shops.id = line_items.shop_id,

                    a_t_a_chapters,
                    quantity_units,
                    owners

                where users.id = ?

                and parts.id = line_items.part_id
                and stock_items.id = parts.stock_item_id
                and a_t_a_chapters.id = stock_items.a_t_a_chapter_id
                and quantity_units.id = parts.quantity_unit_id

                and owners.id = parts.owner_id

                and parts.stock_item_id = ?
                and line_items.part_id = ?
                and line_items.id = ?

                order by
                    line_items.input_date asc,
                    line_items.rn asc,
                    line_items.id asc
            ",
                [
                    auth()->user()->id,
                    $stockItem->id,
                    $part->id,
                    $lineItem->id,
                ]
            );
        } else {

            $lineItemVal = DB::select(
                "
                select
                    line_items.id as id,


                    line_items.time_since_new as time_since_new_right,
                    line_items.cycles_since_new as cycles_since_new_right,
                    line_items.days_since_new as days_since_new_right,

                    line_items.time_since_overhaul as time_since_overhaul_right,
                    line_items.cycles_since_overhaul as cycles_since_overhaul_right,
                    line_items.days_since_overhaul as days_since_overhaul_right,

                    case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                        then concat('SVO-', line_items.bin)
                        else concat('SVI-', line_items.bin)
                    end as 'input / output_doc_num_center',

                    line_items.part_num as part_num_left,

                    line_items.input_date as 'input / output_date_center',

                    line_items.condition,

                    line_items.unserviceable_condition as unserviceable_condition,

                    line_items.certificate_date as certificate_date_center,

                "
                    .
                    ($stockItem->is_shelf_life_applicable
                        ?
                        "
                            line_items.shelf_life as shelf_life_right,
                            line_items.shelf_life_alarm as shelf_life_alarm_right,
                            "
                        :
                        "")
                    .
                    "
                    line_items.location as action,
                    line_items.stock_id,
                    line_items.stock_position,
                    line_items.technician_id,
                    line_items.note,
                    line_items.shop_id,

                    concat(
                        replace(line_items.location, '_', ' '),
                        (
                            case when line_items.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                then
                                    concat(
                                        ' (',
                                        stocks.name
                                        ,' - ',
                                        line_items.stock_position
                                        ,') '
                                    )
                                when line_items.location in ('" . LineItemLocationEnum::SERVICE . "')
                                then
                                    concat(
                                        ' (',
                                        shops.name
                                        ,') '
                                    )
                                when line_items.location in ('" . LineItemLocationEnum::TRANSFER_TO . "')
                                then
                                    concat(
                                        ' (',
                                        stocks.name
                                        ,') '
                                    )
                                else ''
                            end
                        )
                    ) as location_center,


                    line_items.invoice_ref as invoice_ref_center,


                    case when line_items.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                        then
                        (
                            case when line_items.condition = '" . ConditionEnum::SERVICEABLE . "'
                                then line_items.quantity
                                else 0
                            end
                        )
                        else '0'
                    end as input_qty_right,

                    case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    then
                    (
                        case when line_items.condition = '" . ConditionEnum::SERVICEABLE . "'
                            then line_items.quantity
                            else 0
                        end
                    )
                    else '0'
                    end as output_qty_right,

                    ifnull(ifnull((
                        select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else 0
                                    end
                                )
                                ,0)
                            )
                        from (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l) li
                        where li.part_id = line_items.part_id
                        and li.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                        and li.rn <= line_items.rn
                        order by input_date asc, li.id asc)
                    ,0) - ifnull((
                        select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else 0
                                    end
                                )
                                ,0)
                            )
                        from (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l)  li
                        where li.part_id = line_items.part_id
                        and li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                        and li.rn <= line_items.rn
                        order by input_date asc, li.input_date asc)
                    ,0),0)
                    as qty_balance_right,

                    (
                        case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                        then 2
                        else  (
                            case
                                when datediff(now(), line_items.certificate_date) >= line_items.shelf_life_alarm
                                    then 0
                                when datediff(now(), line_items.certificate_date - INTERVAL " . LineItemSettings::SHELF_LIFE_WARNING_ALARM_IN_DAYS . " DAY) > line_items.shelf_life_alarm
                                    then 1
                                    else 2
                            end
                        )
                        end
                    )
                    as is_shelf_life_ok,

                    datediff(now(), line_items.certificate_date) shelf_life_diff,

                    'piece' as qty_unit_left
                from users,
                    parts,
                    stock_items,

                    (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l) line_items
                    left join stocks on stocks.id = line_items.stock_id
                    left join shops on shops.id = line_items.shop_id,

                    a_t_a_chapters,
                    owners

                where users.id = ?

                and parts.id = line_items.part_id
                and stock_items.id = parts.stock_item_id
                and a_t_a_chapters.id = stock_items.a_t_a_chapter_id

                and owners.id = parts.owner_id

                and parts.stock_item_id = ?
                and line_items.part_id = ?
                and line_items.id = ?

                order by
                    line_items.input_date asc,
                    line_items.rn asc,
                    line_items.id asc
            ",
                [
                    auth()->user()->id,
                    $stockItem->id,
                    $part->id,
                    $lineItem->id,
                ]
            );
        }


        return response()->json($lineItemVal[0] ?? [], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\StockItem $stockItem
     * @param  \App\Part $part
     * @param  $bin
     * @return \Illuminate\Http\Response
     */
    public function findLineItemByBIN(StockItem $stockItem, Part $part, $bin)
    {
        if (!$stockItem) {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }

        if (!$part) {
            return response()->json(['message' => 'The part item doesn\'t exist!'], 409);
        }

        if ($part->stock_item_id != $stockItem->id) {
            return response()->json(['message' => 'The part doesn\'t belong to the stock item list!'], 409);
        }

        $lineItem = LineItem::where('part_id', $part->id)
            ->where('bin', str_replace('SVO-', '', str_replace('SVI-', '', $bin)))->first();

        if (!$lineItem) {
            return response()->json(['message' => 'The line item doesn\'t exist!'], 409);
        }

        return response()->json($lineItem, 200);
    }





    public function firstLineItem(StockItem $stockItem, Part $part)
    {
        if (!$stockItem) {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }

        if (!$part) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }


        $lineItems = DB::select("
            select
                line_items.id as id,

                case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    then concat('SVO-', line_items.bin)
                    else concat('SVI-', line_items.bin)
                end as 'input / output_doc_num_center',
                "
            .
            ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE
                ?
                ""
                :
                "line_items.part_num as part_num_left,")
            .
            "

                line_items.input_date as 'input / output_date_center',

                concat(
                    line_items.condition,
                    case when line_items.unserviceable_condition is null
                        then ''
                        else concat(' (',line_items.unserviceable_condition,')')
                    end
                    ) as condition_left,

                line_items.certificate_date as certificate_date_center,

            "
            .
            ($stockItem->is_shelf_life_applicable
                ?
                "
                        line_items.shelf_life as shelf_life_right,
                        line_items.shelf_life_alarm as shelf_life_alarm_right,
                        "
                :
                "")
            .
            "
                concat(
                    line_items.location,
                    case when line_items.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                        then
                            concat(' (',
                                stocks.name
                            ,' - ',
                                line_items.stock_position
                            ,')')
                        else ''
                    end
                ) as location_center,


                line_items.invoice_ref as invoice_ref_center,


                case when line_items.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    then
                    (
                        case when line_items.condition = '" . ConditionEnum::SERVICEABLE . "'
                            then line_items.quantity
                            else (
                                case
                                    when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                        -line_items.quantity
                                    else
                                        0
                                end
                            )
                        end
                    )
                    else '0'
                end as input_qty_right,

                case when line_items.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                then
                (
                    case when line_items.condition = '" . ConditionEnum::SERVICEABLE . "'
                        then line_items.quantity
                        else (
                            case
                                when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                    -line_items.quantity
                                else
                                    0
                            end
                        )
                    end
                )
                else '0'
                end as output_qty_right,

                ifnull(ifnull((
                    select sum(
                            ifnull(
                            (
                                case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                    then li.quantity
                                    else (
                                        case
                                            when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                                -li.quantity
                                            else
                                                0
                                        end
                                    )
                                end
                            )
                            ,0)
                        )
                    from (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l) li
                    where li.part_id = line_items.part_id
                    and li.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    and li.rn <= line_items.rn
                    order by input_date asc, li.id asc)
                ,0) - ifnull((
                    select sum(
                            ifnull(
                            (
                                case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                    then li.quantity
                                    else (
                                        case
                                            when stock_items.component_type = '" . ComponentTypeEnum::EXPENDABLE . "' then
                                                -li.quantity
                                            else
                                                0
                                        end
                                    )
                                end
                            )
                            ,0)
                        )
                    from (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l)  li
                    where li.part_id = line_items.part_id
                    and li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                    and li.rn <= line_items.rn
                    order by input_date asc, li.input_date asc)
                ,0),0)
                as qty_balance_right,
            "
            .
            ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE
                ?
                "
                    quantity_units.code as qty_unit_left
                    "
                :
                "
                    'piece' as qty_unit_left
                    ")
            .
            "
            from users,
                parts,
                stock_items,
                (select row_number() over (order by input_date asc, id asc) rn, l.* from line_items l) line_items,
                a_t_a_chapters,
                "
            .
            ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE
                ?
                "
                quantity_units,
                "
                :
                "
                ")
            .
            "
                stocks,
                owners

            where users.id = ?

            and parts.id = line_items.part_id
            and stock_items.id = parts.stock_item_id
            and a_t_a_chapters.id = stock_items.a_t_a_chapter_id

            "
            .
            ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE
                ?
                "
                and quantity_units.id = parts.quantity_unit_id
                "
                :
                "")
            .
            "
            and stocks.id = line_items.stock_id
            and owners.id = parts.owner_id

            and parts.stock_item_id = ?
            and line_items.part_id = ?

            order by
                line_items.input_date asc,
                line_items.rn asc,
                line_items.id asc
        ", [
            auth()->user()->id,
            $stockItem->id,
            $part->id
        ])[0] ?? [];


        // foreach($lineItems as $lineItem) {
        //     $lineItem["input qty_right"]
        // }
        // // $total =


        return response()->json($lineItems);
    }



    public function lastLineItem(StockItem $stockItem, Part $part, $id)
    {
        if (!$stockItem) {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }
        if (!$part) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }

        // $lineItemVal = LineItem::where('part_id', $part->id)
        //     ->orderBy('input_date', 'desc')
        //     ->select([
        //         'id as id',
        //         DB::raw("(

        //         ) as qtn"),
        //     ])
        //     ->first();

        $lineItem = LineItem::find($id);

        if ($lineItem) {

            $lastLinePositionInWhereClause = "
                and (
                    case when cast(li.input_date as date) = '" . Carbon::parse($lineItem->input_date)->format('Y-m-d') . "'
                        then cast(li.input_date as date) <= '" . Carbon::parse($lineItem->input_date)->format('Y-m-d') . "' and li.id < " . $lineItem->id . "
                        else cast(li.input_date as date) <= '" . Carbon::parse($lineItem->input_date)->format('Y-m-d') . "' and li.id != " . $lineItem->id . "
                    end
                    )
                ";

            if ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE) {

                $lineItemVal = LineItem::join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                    ->join('parts', 'parts.id', '=', 'line_items.part_id')
                    ->join('stock_items', 'stock_items.id', '=', 'parts.stock_item_id')
                    ->where('line_items.part_id', $part->id)
                    ->where('parts.stock_item_id', $stockItem->id)
                    ->groupBy([
                        'parts.id',
                        'parts.serial_num',
                        'parts.batch_num',
                        'parts.quantity_alarm',
                    ])
                    ->select([
                        DB::raw("
                            (
                                select li.id
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as id"),

                        DB::raw("
                            (
                                select concat((
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 'SVO'
                                    else 'SVI'
                                    end
                                ), '-', li.bin) as bin
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as bin"),

                        DB::raw("
                            (
                                select (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 'out'
                                    else 'in'
                                    end
                                    ) as ls_bin
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as out_in"),


                        DB::raw("
                            (
                                select li.input_date
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as input_date"),

                        DB::raw("
                            (
                                select
                                (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then null
                                    else datediff(now(), li.certificate_date)
                                    end
                                )
                                as is_shelf_life_ok
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as days_diff"),

                        DB::raw("
                            (
                                select
                                (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 2
                                    else  (
                                        case
                                            when datediff(now(), li.certificate_date) >= li.shelf_life_alarm
                                                then 0
                                            when datediff(now(), li.certificate_date - INTERVAL " . LineItemSettings::SHELF_LIFE_WARNING_ALARM_IN_DAYS . " DAY) > li.shelf_life_alarm
                                                then 1
                                                else 2
                                        end
                                    )
                                    end
                                )
                                as is_shelf_life_ok
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as is_shelf_life_ok"),


                        DB::raw("
                            (
                                select li.shelf_life
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as shelf_life"),

                        DB::raw("
                            (
                                select li.shelf_life_alarm
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as shelf_life_alarm"),



                        DB::raw("
                            (
                                case when ((
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else -li.quantity
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                ) -
                                (
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else -li.quantity
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                )) < parts.quantity_alarm
                                    then 0
                                when ((
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else -li.quantity
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                ) -
                                (
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else -li.quantity
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                )) = parts.quantity_alarm
                                    then 1
                                    else 2
                                end
                            )
                            as is_qty_ok"),


                        'parts.quantity_alarm as qty_alarm',


                        DB::raw("
                            (
                                select li.location
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as location"),

                        DB::raw("
                            (
                                select li.stock_id
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as stock_id"),



                        DB::raw("
                            (
                                select li.condition
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as 'condition'"),


                        DB::raw("
                            (
                                select li.certificate_date
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as certificate_date"),

                        DB::raw("
                            (
                                select
                                    case when li.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                        then
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else -li.quantity
                                            end
                                        )
                                        else '0'
                                    end as input_qty_right
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as input_qty"),


                        DB::raw("
                            (
                                select
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else -li.quantity
                                        end
                                    )
                                    else '0'
                                    end as output_qty_right
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as output_qty"),



                        DB::raw("
                        (
                            select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else -li.quantity
                                    end
                                )
                                ,0)
                            ) as quantity
                            from line_items li
                            where li.part_id = parts.id
                            and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                        ) -
                        (
                            select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else -li.quantity
                                    end
                                )
                                ,0)
                            ) as quantity
                            from line_items li
                            where li.part_id = parts.id
                            and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                        )
                    as qty_balance"),

                    ])->first();
            } else {

                $lineItemVal = LineItem::join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                    ->join('parts', 'parts.id', '=', 'line_items.part_id')
                    ->join('stock_items', 'stock_items.id', '=', 'parts.stock_item_id')
                    ->where('line_items.part_id', $part->id)
                    ->where('parts.stock_item_id', $stockItem->id)
                    ->groupBy([
                        'parts.id',
                        'parts.serial_num',
                        'parts.batch_num',
                        'parts.quantity_alarm',
                    ])
                    ->select([
                        DB::raw("
                            (
                                select li.id
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as id"),

                        DB::raw("
                            (
                                select li.part_num
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as part_num"),

                        DB::raw("
                            (
                                select concat((
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 'SVO'
                                    else 'SVI'
                                    end
                                ), '-', li.bin) as bin
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as bin"),

                        DB::raw("
                            (
                                select (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 'out'
                                    else 'in'
                                    end
                                    ) as ls_bin
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as out_in"),


                        DB::raw("
                            (
                                select li.input_date
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as input_date"),

                        DB::raw("
                            (
                                select li.time_since_new
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as time_since_new"),

                        DB::raw("
                            (
                                select li.cycles_since_new
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as cycles_since_new"),

                        DB::raw("
                            (
                                select li.days_since_new
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as days_since_new"),

                        DB::raw("
                            (
                                select li.time_since_overhaul
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as time_since_overhaul"),

                        DB::raw("
                            (
                                select li.cycles_since_overhaul
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as cycles_since_overhaul"),

                        DB::raw("
                            (
                                select li.days_since_overhaul
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as days_since_overhaul"),

                        DB::raw("
                            (
                                select
                                (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then null
                                    else datediff(now(), li.certificate_date)
                                    end
                                )
                                as is_shelf_life_ok
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as days_diff"),

                        DB::raw("
                            (
                                select
                                (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 2
                                    else  (
                                        case
                                            when datediff(now(), li.certificate_date) >= li.shelf_life_alarm
                                                then 0
                                            when datediff(now(), li.certificate_date - INTERVAL " . LineItemSettings::SHELF_LIFE_WARNING_ALARM_IN_DAYS . " DAY) > li.shelf_life_alarm
                                                then 1
                                                else 2
                                        end
                                    )
                                    end
                                )
                                as is_shelf_life_ok
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as is_shelf_life_ok"),


                        DB::raw("
                            (
                                select li.shelf_life
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as shelf_life"),

                        DB::raw("
                            (
                                select li.shelf_life_alarm
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as shelf_life_alarm"),



                        DB::raw("
                            (
                                case when ((
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else 0
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                ) -
                                (
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else 0
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                )) < parts.quantity_alarm
                                    then 0
                                when ((
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else 0
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                ) -
                                (
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else 0
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                )) = parts.quantity_alarm
                                    then 1
                                    else 2
                                end
                            )
                            as is_qty_ok"),


                        'parts.quantity_alarm as qty_alarm',


                        DB::raw("
                            (
                                select li.location
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as location"),

                        DB::raw("
                            (
                                select li.stock_id
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as stock_id"),

                        DB::raw("
                            (
                                select li.condition
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as 'condition'"),

                        DB::raw("
                            (
                                select li.unserviceable_condition
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as 'unserviceable_condition'"),


                        DB::raw("
                            (
                                select li.certificate_date
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as certificate_date"),

                        DB::raw("
                            (
                                select
                                    case when li.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                        then
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else 0
                                            end
                                        )
                                        else '0'
                                    end as input_qty_right
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as input_qty"),


                        DB::raw("
                            (
                                select
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else 0
                                        end
                                    )
                                    else '0'
                                    end as output_qty_right
                                from line_items li
                                where li.part_id = parts.id
                                " . $lastLinePositionInWhereClause . "
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as output_qty"),



                        DB::raw("
                        (
                            select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else 0
                                    end
                                )
                                ,0)
                            ) as quantity
                            from line_items li
                            where li.part_id = parts.id
                            and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                        ) -
                        (
                            select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else 0
                                    end
                                )
                                ,0)
                            ) as quantity
                            from line_items li
                            where li.part_id = parts.id
                            and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                        )
                    as qty_balance"),

                    ])->first();
            }
        } else {

            if ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE) {

                $lineItemVal = LineItem::join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                    ->join('parts', 'parts.id', '=', 'line_items.part_id')
                    ->join('stock_items', 'stock_items.id', '=', 'parts.stock_item_id')
                    ->where('line_items.part_id', $part->id)
                    ->where('parts.stock_item_id', $stockItem->id)
                    ->groupBy([
                        'parts.id',
                        'parts.serial_num',
                        'parts.batch_num',
                        'parts.quantity_alarm',
                    ])
                    ->select([
                        DB::raw("
                            (
                                select li.id
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as id"),

                        DB::raw("
                            (
                                select concat((
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 'SVO'
                                    else 'SVI'
                                    end
                                ), '-', li.bin) as bin
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as bin"),

                        DB::raw("
                            (
                                select (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 'out'
                                    else 'in'
                                    end
                                    ) as ls_bin
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as out_in"),


                        DB::raw("
                            (
                                select li.input_date
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as input_date"),

                        DB::raw("
                            (
                                select
                                (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then null
                                    else datediff(now(), li.certificate_date)
                                    end
                                )
                                as is_shelf_life_ok
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as days_diff"),

                        DB::raw("
                            (
                                select
                                (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 2
                                    else  (
                                        case
                                            when datediff(now(), li.certificate_date) >= li.shelf_life_alarm
                                                then 0
                                            when datediff(now(), li.certificate_date - INTERVAL " . LineItemSettings::SHELF_LIFE_WARNING_ALARM_IN_DAYS . " DAY) > li.shelf_life_alarm
                                                then 1
                                                else 2
                                        end
                                    )
                                    end
                                )
                                as is_shelf_life_ok
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as is_shelf_life_ok"),


                        DB::raw("
                            (
                                select li.shelf_life
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as shelf_life"),

                        DB::raw("
                            (
                                select li.shelf_life_alarm
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as shelf_life_alarm"),



                        DB::raw("
                            (
                                case when ((
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else -li.quantity
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                ) -
                                (
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else -li.quantity
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                )) < parts.quantity_alarm
                                    then 0
                                when ((
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else -li.quantity
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                ) -
                                (
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else -li.quantity
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                )) = parts.quantity_alarm
                                    then 1
                                    else 2
                                end
                            )
                            as is_qty_ok"),


                        'parts.quantity_alarm as qty_alarm',


                        DB::raw("
                            (
                                select li.location
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as location"),

                        DB::raw("
                            (
                                select li.stock_id
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as stock_id"),



                        DB::raw("
                            (
                                select li.condition
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as 'condition'"),


                        DB::raw("
                            (
                                select li.certificate_date
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as certificate_date"),

                        DB::raw("
                            (
                                select
                                    case when li.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                        then
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else -li.quantity
                                            end
                                        )
                                        else '0'
                                    end as input_qty_right
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as input_qty"),


                        DB::raw("
                            (
                                select
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else -li.quantity
                                        end
                                    )
                                    else '0'
                                    end as output_qty_right
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as output_qty"),



                        DB::raw("
                        (
                            select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else -li.quantity
                                    end
                                )
                                ,0)
                            ) as quantity
                            from line_items li
                            where li.part_id = parts.id
                            and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                        ) -
                        (
                            select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else -li.quantity
                                    end
                                )
                                ,0)
                            ) as quantity
                            from line_items li
                            where li.part_id = parts.id
                            and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                        )
                    as qty_balance"),

                    ])->first();
            } else {

                $lineItemVal = LineItem::join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                    ->join('parts', 'parts.id', '=', 'line_items.part_id')
                    ->join('stock_items', 'stock_items.id', '=', 'parts.stock_item_id')
                    ->where('line_items.part_id', $part->id)
                    ->where('parts.stock_item_id', $stockItem->id)
                    ->groupBy([
                        'parts.id',
                        'parts.serial_num',
                        'parts.batch_num',
                        'parts.quantity_alarm',
                    ])
                    ->select([
                        DB::raw("
                            (
                                select li.id
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as id"),


                        DB::raw("
                            (
                                select li.part_num
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as part_num"),

                        DB::raw("
                            (
                                select concat((
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 'SVO'
                                    else 'SVI'
                                    end
                                ), '-', li.bin) as bin
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as bin"),

                        DB::raw("
                            (
                                select (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 'out'
                                    else 'in'
                                    end
                                    ) as ls_bin
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as out_in"),


                        DB::raw("
                            (
                                select li.input_date
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as input_date"),

                        DB::raw("
                            (
                                select li.time_since_new
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as time_since_new"),

                        DB::raw("
                            (
                                select li.cycles_since_new
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as cycles_since_new"),

                        DB::raw("
                            (
                                select li.days_since_new
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as days_since_new"),

                        DB::raw("
                            (
                                select li.time_since_overhaul
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as time_since_overhaul"),

                        DB::raw("
                            (
                                select li.cycles_since_overhaul
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as cycles_since_overhaul"),

                        DB::raw("
                            (
                                select li.days_since_overhaul
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as days_since_overhaul"),

                        DB::raw("
                            (
                                select
                                (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then null
                                    else datediff(now(), li.certificate_date)
                                    end
                                )
                                as is_shelf_life_ok
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as days_diff"),

                        DB::raw("
                            (
                                select
                                (
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then 2
                                    else  (
                                        case
                                            when datediff(now(), li.certificate_date) >= li.shelf_life_alarm
                                                then 0
                                            when datediff(now(), li.certificate_date - INTERVAL " . LineItemSettings::SHELF_LIFE_WARNING_ALARM_IN_DAYS . " DAY) > li.shelf_life_alarm
                                                then 1
                                                else 2
                                        end
                                    )
                                    end
                                )
                                as is_shelf_life_ok
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as is_shelf_life_ok"),


                        DB::raw("
                            (
                                select li.shelf_life
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as shelf_life"),

                        DB::raw("
                            (
                                select li.shelf_life_alarm
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as shelf_life_alarm"),



                        DB::raw("
                            (
                                case when ((
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else 0
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                ) -
                                (
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else 0
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                )) < parts.quantity_alarm
                                    then 0
                                when ((
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else 0
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                ) -
                                (
                                    select sum(
                                        ifnull(
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else 0
                                            end
                                        )
                                        ,0)
                                    ) as quantity
                                    from line_items li
                                    where li.part_id = parts.id
                                    and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                                )) = parts.quantity_alarm
                                    then 1
                                    else 2
                                end
                            )
                            as is_qty_ok"),


                        'parts.quantity_alarm as qty_alarm',


                        DB::raw("
                            (
                                select li.location
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as location"),

                        DB::raw("
                            (
                                select li.stock_id
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as stock_id"),

                        DB::raw("
                            (
                                select li.condition
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as 'condition'"),

                        DB::raw("
                            (
                                select li.unserviceable_condition
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as 'unserviceable_condition'"),


                        DB::raw("
                            (
                                select li.certificate_date
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as certificate_date"),

                        DB::raw("
                            (
                                select
                                    case when li.location in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                        then
                                        (
                                            case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                                then li.quantity
                                                else 0
                                            end
                                        )
                                        else '0'
                                    end as input_qty_right
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as input_qty"),


                        DB::raw("
                            (
                                select
                                    case when li.location not in ('" . LineItemLocationEnum::STOCK_A . "', '" . LineItemLocationEnum::STOCK_B . "')
                                    then
                                    (
                                        case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                            then li.quantity
                                            else 0
                                        end
                                    )
                                    else '0'
                                    end as output_qty_right
                                from line_items li
                                where li.part_id = parts.id
                                order by li.input_date desc, li.id desc
                                limit 1
                            )
                            as output_qty"),



                        DB::raw("
                        (
                            select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else 0
                                    end
                                )
                                ,0)
                            ) as quantity
                            from line_items li
                            where li.part_id = parts.id
                            and li.location in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                        ) -
                        (
                            select sum(
                                ifnull(
                                (
                                    case when li.condition = '" . ConditionEnum::SERVICEABLE . "'
                                        then li.quantity
                                        else 0
                                    end
                                )
                                ,0)
                            ) as quantity
                            from line_items li
                            where li.part_id = parts.id
                            and li.location not in ('" . LineItemLocationEnum::STOCK_A . "','" . LineItemLocationEnum::STOCK_B . "')
                        )
                    as qty_balance"),

                    ])->first();
            }
        }







        return response()->json($lineItemVal, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LineItem  $lineItem
     * @return \Illuminate\Http\Response
     */
    public function edit(LineItem $lineItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LineItem  $lineItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockItem $stockItem, Part $part, LineItem $lineItem)
    {
        return $this->defaultAction($request, $stockItem, $part, $lineItem->id);
    }



    private function defaultAction(Request $request, StockItem $stockItem, Part $part, $id)
    {
        if (!$stockItem) {
            return response()->json(['message' => 'The stock item doesn\'t exist!'], 409);
        }

        if (!$part) {
            return response()->json(['message' => 'The part doesn\'t exist!'], 409);
        }

        if ($part->stock_item_id != $stockItem->id) {
            return response()->json(['message' => 'The part doesn\'t belong to the stock item list!'], 409);
        }


        //$lastLineItem = $this->lastLineItem($stockItem, $part, $id);


        $lineItem = null;
        $actionStr = "";

        if ($id) {
            $lineItem = LineItem::find($id);
            $actionStr = "updated";
        } else {
            $lineItem = new LineItem();
            $lineItem->bin = LineItem::max('bin') + 1;
            $actionStr = "created";
        }

        if ($lineItem) {

            $location = request()->get('location');


            switch ($location) {
                case LineItemLocationEnum::STOCK_A:
                case LineItemLocationEnum::STOCK_B:


                    $validate['did_it_come_from_mro_or_st'] = ['nullable'];

                    $validate['condition'] = ['required', 'string'];
                    $validate['unserviceable_condition'] = ['nullable', 'string'];


                    $validate['time_since_new'] = ['nullable', 'numeric'];
                    $validate['cycles_since_new'] = ['nullable', 'numeric'];
                    $validate['days_since_new'] = ['nullable', 'numeric'];
                    $validate['time_since_overhaul'] = ['nullable', 'numeric'];
                    $validate['cycles_since_overhaul'] = ['nullable', 'numeric'];
                    $validate['days_since_overhaul'] = ['nullable', 'numeric'];

                    $validate['part_num'] = ['nullable'];


                    $validate['note'] = ['nullable', 'string'];


                    $validate['invoice_ref'] = ['nullable', 'string'];



                    $validate['certificate_date'] = ['nullable', 'string'];

                    $validate['input_date'] = ['required', 'string'];


                    $validate['location'] = ['required', 'string'];
                    $validate['stock_id'] = ['nullable', 'numeric'];
                    $validate['stock_position'] = ['nullable', 'string'];


                    $validate['condition'] = ['required', 'string'];

                    $validate['technician_id'] = ['required', 'string'];

                    if ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE) {
                        $validate['quantity'] = ['required', 'numeric'];
                    } else {
                        $validate['unserviceable_condition'] = ['nullable', 'string'];
                    }

                    if ($stockItem->is_shelf_life_applicable) {
                        $validate['shelf_life'] = ['required', 'numeric'];
                        $validate['shelf_life_alarm'] = ['required', 'numeric'];
                    }

                    break;
                case LineItemLocationEnum::MRO:


                    $validate['condition'] = ['required', 'string'];
                    $validate['unserviceable_condition'] = ['nullable', 'string'];


                    $validate['time_since_new'] = ['nullable', 'numeric'];
                    $validate['cycles_since_new'] = ['nullable', 'numeric'];
                    $validate['days_since_new'] = ['nullable', 'numeric'];
                    $validate['time_since_overhaul'] = ['nullable', 'numeric'];
                    $validate['cycles_since_overhaul'] = ['nullable', 'numeric'];
                    $validate['days_since_overhaul'] = ['nullable', 'numeric'];

                    $validate['part_num'] = ['nullable'];


                    $validate['note'] = ['nullable', 'string'];


                    $validate['invoice_ref'] = ['nullable', 'string'];



                    $validate['certificate_date'] = ['nullable', 'string'];
                    $validate['input_date'] = ['required', 'string'];

                    $validate['location'] = ['required', 'string'];


                    $validate['condition'] = ['required', 'string'];

                    $validate['technician_id'] = ['required', 'string'];

                    if ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE) {
                        $validate['quantity'] = ['required', 'numeric'];
                    } else {
                        $validate['unserviceable_condition'] = ['nullable', 'string'];
                    }

                    if ($stockItem->is_shelf_life_applicable) {
                        $validate['certificate_date'] = ['required', 'string'];
                        $validate['shelf_life'] = ['required', 'numeric'];
                        $validate['shelf_life_alarm'] = ['required', 'numeric'];
                    }

                    break;
                case LineItemLocationEnum::SERVICE:


                    $validate['condition'] = ['required', 'string'];
                    $validate['unserviceable_condition'] = ['nullable', 'string'];


                    $validate['time_since_new'] = ['nullable', 'numeric'];
                    $validate['cycles_since_new'] = ['nullable', 'numeric'];
                    $validate['days_since_new'] = ['nullable', 'numeric'];
                    $validate['time_since_overhaul'] = ['nullable', 'numeric'];
                    $validate['cycles_since_overhaul'] = ['nullable', 'numeric'];
                    $validate['days_since_overhaul'] = ['nullable', 'numeric'];

                    $validate['part_num'] = ['nullable'];

                    $validate['note'] = ['nullable', 'string'];


                    $validate['invoice_ref'] = ['nullable', 'string'];



                    $validate['certificate_date'] = ['nullable', 'string'];
                    $validate['input_date'] = ['required', 'string'];

                    $validate['location'] = ['required', 'string'];


                    $validate['condition'] = ['required', 'string'];

                    $validate['shop_id'] = ['required', 'string'];

                    if ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE) {
                        $validate['quantity'] = ['required', 'numeric'];
                    } else {
                        $validate['unserviceable_condition'] = ['nullable', 'string'];
                    }

                    if ($stockItem->is_shelf_life_applicable) {
                        $validate['certificate_date'] = ['required', 'string'];
                        $validate['shelf_life'] = ['required', 'numeric'];
                        $validate['shelf_life_alarm'] = ['required', 'numeric'];
                    }

                    break;
                case LineItemLocationEnum::TRANSFER_TO:


                    $validate['condition'] = ['required', 'string'];
                    $validate['unserviceable_condition'] = ['nullable', 'string'];


                    $validate['time_since_new'] = ['nullable', 'numeric'];
                    $validate['cycles_since_new'] = ['nullable', 'numeric'];
                    $validate['days_since_new'] = ['nullable', 'numeric'];
                    $validate['time_since_overhaul'] = ['nullable', 'numeric'];
                    $validate['cycles_since_overhaul'] = ['nullable', 'numeric'];
                    $validate['days_since_overhaul'] = ['nullable', 'numeric'];

                    $validate['part_num'] = ['nullable'];

                    $validate['note'] = ['nullable', 'string'];


                    $validate['invoice_ref'] = ['nullable', 'string'];



                    $validate['certificate_date'] = ['nullable', 'string'];
                    $validate['input_date'] = ['required', 'string'];

                    $validate['location'] = ['required', 'string'];


                    $validate['condition'] = ['required', 'string'];

                    $validate['stock_id'] = ['required', 'string'];

                    if ($stockItem->component_type === ComponentTypeEnum::EXPENDABLE) {
                        $validate['quantity'] = ['required', 'numeric'];
                    } else {
                        $validate['unserviceable_condition'] = ['nullable', 'string'];
                    }

                    if ($stockItem->is_shelf_life_applicable) {
                        $validate['certificate_date'] = ['required', 'string'];
                        $validate['shelf_life'] = ['required', 'numeric'];
                        $validate['shelf_life_alarm'] = ['required', 'numeric'];
                    }

                    break;
            }


            $validatedData = request()->validate($validate);

            $location = $validatedData['location'];


            switch ($location) {
                case LineItemLocationEnum::STOCK_A:
                case LineItemLocationEnum::STOCK_B:

                    $lineItem->did_it_come_from_mro_or_st = $validatedData['did_it_come_from_mro_or_st']  ? true : false;

                    $lineItem->certificate_date = Carbon::parse($validatedData['certificate_date'])->setTimezone(auth()->user()->timezone);
                    $lineItem->input_date = Carbon::parse($validatedData['input_date'])->setTimezone(auth()->user()->timezone);

                    $lineItem->technician_id = $validatedData['technician_id'];

                    $lineItem->condition = $validatedData['condition'];

                    if ($stockItem->component_type !== ComponentTypeEnum::EXPENDABLE) {
                        $unserviceableCondition = $validatedData['unserviceable_condition'] ?? null;
                        if ($unserviceableCondition && $validatedData['condition'] === ConditionEnum::UNSERVICEABLE) {
                            $lineItem->unserviceable_condition = $unserviceableCondition;
                        }




                        $lineItem->time_since_new = $validatedData['time_since_new'];
                        $lineItem->cycles_since_new = $validatedData['cycles_since_new'];
                        $lineItem->days_since_new = $validatedData['days_since_new'];

                        $lineItem->time_since_overhaul = $validatedData['time_since_overhaul'];
                        $lineItem->cycles_since_overhaul = $validatedData['cycles_since_overhaul'];
                        $lineItem->days_since_overhaul = $validatedData['days_since_overhaul'];

                        $lineItem->part_num = $validatedData['part_num'];
                    }

                    if ($stockItem->is_shelf_life_applicable) {
                        $lineItem->shelf_life = $validatedData['shelf_life'];
                        $lineItem->shelf_life_alarm = $validatedData['shelf_life_alarm'];
                    }


                    $lineItem->note = $validatedData['note'];

                    $lineItem->stock_id = $validatedData['stock_id'];

                    $stockPosition = $validatedData['stock_position'] ?? null;
                    if ($stockPosition) {
                        $lineItem->stock_position = $stockPosition;
                    }


                    if ($validatedData['quantity'] ?? null) {
                        $lineItem->quantity = $validatedData['quantity'];
                    }

                    if ($validatedData['invoice_ref'] ?? null) {
                        $lineItem->invoice_ref = $validatedData['invoice_ref'];
                    }

                    $lineItem->action_by_storekeeper_id = auth()->user()->id;
                    $lineItem->action_by_storekeeper_id_at = now();

                    break;
                case LineItemLocationEnum::MRO:


                    $lineItem->certificate_date = Carbon::parse($validatedData['certificate_date'])->setTimezone(auth()->user()->timezone);
                    $lineItem->input_date = Carbon::parse($validatedData['input_date'])->setTimezone(auth()->user()->timezone);

                    $lineItem->technician_id = $validatedData['technician_id'];

                    $condition = $validatedData['condition'];
                    $lineItem->condition = $condition;

                    if ($stockItem->component_type !== ComponentTypeEnum::EXPENDABLE) {
                        $unserviceableCondition = $validatedData['unserviceable_condition'] ?? null;
                        if ($unserviceableCondition && $condition === ConditionEnum::UNSERVICEABLE) {
                            $lineItem->unserviceable_condition = $unserviceableCondition;
                        }


                        $lineItem->action_by_storekeeper_id = auth()->user()->id;
                        $lineItem->action_by_storekeeper_id_at = now();

                        $lineItem->time_since_new = $validatedData['time_since_new'];
                        $lineItem->cycles_since_new = $validatedData['cycles_since_new'];
                        $lineItem->days_since_new = $validatedData['days_since_new'];

                        $lineItem->time_since_overhaul = $validatedData['time_since_overhaul'];
                        $lineItem->cycles_since_overhaul = $validatedData['cycles_since_overhaul'];
                        $lineItem->days_since_overhaul = $validatedData['days_since_overhaul'];

                        $lineItem->part_num = $validatedData['part_num'];
                    }

                    if ($stockItem->is_shelf_life_applicable) {
                        $lineItem->shelf_life = $validatedData['shelf_life'];
                        $lineItem->shelf_life_alarm = $validatedData['shelf_life_alarm'];
                    }


                    $lineItem->note = $validatedData['note'];



                    if ($validatedData['quantity'] ?? null) {
                        $lineItem->quantity = $validatedData['quantity'];
                    }

                    if ($validatedData['invoice_ref'] ?? null) {
                        $lineItem->invoice_ref = $validatedData['invoice_ref'];
                    }

                    break;
                case LineItemLocationEnum::SERVICE:


                    $lineItem->certificate_date = Carbon::parse($validatedData['certificate_date'])->setTimezone(auth()->user()->timezone);
                    $lineItem->input_date = Carbon::parse($validatedData['input_date'])->setTimezone(auth()->user()->timezone);

                    $lineItem->shop_id = $validatedData['shop_id'];

                    $condition = $validatedData['condition'];
                    $lineItem->condition = $condition;

                    if ($stockItem->component_type !== ComponentTypeEnum::EXPENDABLE) {
                        $unserviceableCondition = $validatedData['unserviceable_condition'] ?? null;
                        if ($unserviceableCondition && $condition === ConditionEnum::UNSERVICEABLE) {
                            $lineItem->unserviceable_condition = $unserviceableCondition;
                        }


                        $lineItem->time_since_new = $validatedData['time_since_new'];
                        $lineItem->cycles_since_new = $validatedData['cycles_since_new'];
                        $lineItem->days_since_new = $validatedData['days_since_new'];

                        $lineItem->time_since_overhaul = $validatedData['time_since_overhaul'];
                        $lineItem->cycles_since_overhaul = $validatedData['cycles_since_overhaul'];
                        $lineItem->days_since_overhaul = $validatedData['days_since_overhaul'];

                        $lineItem->part_num = $validatedData['part_num'];
                    }

                    if ($stockItem->is_shelf_life_applicable) {
                        $lineItem->shelf_life = $validatedData['shelf_life'];
                        $lineItem->shelf_life_alarm = $validatedData['shelf_life_alarm'];
                    }


                    $lineItem->note = $validatedData['note'];


                    $lineItem->action_by_storekeeper_id = auth()->user()->id;
                    $lineItem->action_by_storekeeper_id_at = now();


                    if ($validatedData['quantity'] ?? null) {
                        $lineItem->quantity = $validatedData['quantity'];
                    }

                    if ($validatedData['invoice_ref'] ?? null) {
                        $lineItem->invoice_ref = $validatedData['invoice_ref'];
                    }

                    break;
                case LineItemLocationEnum::TRANSFER_TO:


                    $lineItem->certificate_date = Carbon::parse($validatedData['certificate_date'])->setTimezone(auth()->user()->timezone);
                    $lineItem->input_date = Carbon::parse($validatedData['input_date'])->setTimezone(auth()->user()->timezone);

                    $lineItem->stock_id = $validatedData['stock_id'];

                    $condition = $validatedData['condition'];
                    $lineItem->condition = $condition;

                    if ($stockItem->component_type !== ComponentTypeEnum::EXPENDABLE) {
                        $unserviceableCondition = $validatedData['unserviceable_condition'] ?? null;
                        if ($unserviceableCondition && $condition === ConditionEnum::UNSERVICEABLE) {
                            $lineItem->unserviceable_condition = $unserviceableCondition;
                        }


                        $lineItem->time_since_new = $validatedData['time_since_new'];
                        $lineItem->cycles_since_new = $validatedData['cycles_since_new'];
                        $lineItem->days_since_new = $validatedData['days_since_new'];

                        $lineItem->time_since_overhaul = $validatedData['time_since_overhaul'];
                        $lineItem->cycles_since_overhaul = $validatedData['cycles_since_overhaul'];
                        $lineItem->days_since_overhaul = $validatedData['days_since_overhaul'];

                        $lineItem->part_num = $validatedData['part_num'];
                    }

                    if ($stockItem->is_shelf_life_applicable) {
                        $lineItem->shelf_life = $validatedData['shelf_life'];
                        $lineItem->shelf_life_alarm = $validatedData['shelf_life_alarm'];
                    }


                    $lineItem->note = $validatedData['note'];


                    $lineItem->action_by_storekeeper_id = auth()->user()->id;
                    $lineItem->action_by_storekeeper_id_at = now();


                    if ($validatedData['quantity'] ?? null) {
                        $lineItem->quantity = $validatedData['quantity'];
                    }

                    if ($validatedData['invoice_ref'] ?? null) {
                        $lineItem->invoice_ref = $validatedData['invoice_ref'];
                    }

                    break;
            }



            $lineItem->location = $location;

            $lineItem->part_id = $part->id;

            if ($lineItem->save()) {
                return response()->json([
                    'message' => 'The line item is ' . $actionStr . '',
                    'bin' => (LineItemLocationEnum::STOCK_A == $lineItem->location || LineItemLocationEnum::STOCK_B == $lineItem->location ? 'SVI-' : 'SVO-') . $lineItem->bin
                ], 201);
            } else {
                return response()->json(['message' => 'The line item can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The line item doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LineItem  $lineItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockItem $stockItem, Part $part, LineItem $lineItem)
    {
        if ($lineItem) {
            if ($lineItem->delete()) {
                return response()->json(['message' => 'The line item is deleted'], 201);
            } else {
                return response()->json(['message' => 'The line item can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The line item doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\LineItem');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'line_item')
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
