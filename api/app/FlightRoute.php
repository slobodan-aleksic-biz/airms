<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Activitylog\Traits\LogsActivity;

class FlightRoute extends Model
{
    use LogsActivity, CausesActivity;

    // protected static $logAttributes = ['col'];
    protected static $logAttributes = [
        'flight_no',
        'origin',
        'destination',
    ];

    protected static $logOnlyDirty = true;

    protected static $submitEmptyLogs = false;

    protected static $logName = 'flight_route';

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->description = "{$eventName}";
    }


    public function fromApt()
    {
        return $this->belongsTo('App\Airport', 'from');
    }

    public function toApt()
    {
        return $this->belongsTo('App\Airport', 'to');
    }

    public function getNameAttribute()
    {
        return "{$this->fromApt->name}   ----   {$this->toApt->name} (BH: {$this->block_hours}) (KM: {$this->km})";
    }

    public function logBook()
    {
        return $this->hasMany('App\LogBook', 'flight_route_id');
    }
}
