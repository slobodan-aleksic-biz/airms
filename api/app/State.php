<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Activitylog\Traits\LogsActivity;

class State extends Model
{
    use LogsActivity, CausesActivity;

    // protected static $logAttributes = ['col'];
    protected static $logAttributes = [
        'name',
        'code',
        'country_id',
    ];

    protected static $logOnlyDirty = true;

    protected static $submitEmptyLogs = false;

    protected static $logName = 'state';

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->description = "{$eventName}";
    }
}
