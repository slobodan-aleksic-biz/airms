<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Activitylog\Traits\LogsActivity;

class StockItem extends Model
{
    use LogsActivity, CausesActivity;

    // protected static $logAttributes = ['col'];
    protected static $logAttributes = [
        'init_part_num',
        'name',
        'description',
        'component_type',
        'is_consumable',
        'is_recoverable',
        'is_dangerous_goods',
        'is_shelf_life_applicable',
        'a_t_a_chapter_id',
    ];

    protected static $logOnlyDirty = true;

    protected static $submitEmptyLogs = false;

    protected static $logName = 'stock_item';

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->description = "{$eventName}";
    }

    protected $cast = [
        'is_consumable' => 'boolean',
        'is_recoverable' => 'boolean',
        'is_dangerous_goods' => 'boolean',
        'is_shelf_life_applicable' => 'boolean',
    ];
}
