<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Activitylog\Traits\LogsActivity;

class Part extends Model
{
    use LogsActivity, CausesActivity;

    // protected static $logAttributes = ['col'];
    protected static $logAttributes = [
        'serial_num',
        'batch_num',

        'quantity_alarm',

        'is_depleted',

        'note',

        'aircraft_type_id',
        'aircraft_id',
        'parent_part_id',

        'owner_id',
        'stock_item_id',

        'quantity_unit_id',

    ];

    protected static $logOnlyDirty = true;

    protected static $submitEmptyLogs = false;

    protected static $logName = 'part';

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->description = "{$eventName}";
    }

    protected $cast = [
        'is_depleted' => 'boolean',
    ];
}
