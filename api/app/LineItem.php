<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Activitylog\Traits\LogsActivity;

class LineItem extends Model
{
    use LogsActivity, CausesActivity;

    // protected static $logAttributes = ['col'];
    protected static $logAttributes = [

        'bin',

        'part_num',

        'certificate_date',
        'input_date',

        'invoice_ref',

        'quantity',

        'condition',
        'unserviceable_condition',

        'shelf_life',
        'shelf_life_alarm',

        'note',

        'location',
        'location_txt',

        'stock_id',
        'stock_position',

        'time_since_new',
        'cycles_since_new',
        'days_since_new',

        'time_since_overhaul',
        'cycles_since_overhaul',
        'days_since_overhaul',

        'aircraft_id',

        'shop_id',

        'part_id',

        'action_by_storekeeper_id',
        'action_by_storekeeper_id_at',

        'action_by_engineer_id',
        'action_by_engineer_id_at',

        'work_or_engineering_order',
        'technician_id',

        'did_it_come_from_mro_or_st',

    ];

    protected static $logOnlyDirty = true;

    protected static $submitEmptyLogs = false;

    protected static $logName = 'line_item';

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->description = "{$eventName}";
    }

    protected $cast = [
        'is_serviceable' => 'boolean',
        'did_it_come_from_mro_or_st' => 'boolean',
    ];

    public function part(): BelongsTo
    {
        return $this->belongsTo('App\Part', 'part_id');
    }
}
