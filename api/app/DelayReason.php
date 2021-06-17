<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Activitylog\Traits\LogsActivity;

class DelayReason extends Model
{
    use LogsActivity, CausesActivity;

    // protected static $logAttributes = ['col'];
    protected static $logAttributes = [
        'code_id',
        'code_str',
        'reason',
        'description',
        'delay_type_id',
    ];

    protected static $logOnlyDirty = true;

    protected static $submitEmptyLogs = false;

    protected static $logName = 'delay_reason';

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->description = "{$eventName}";
    }
}
