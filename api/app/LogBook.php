<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Activitylog\Traits\LogsActivity;

class LogBook extends Model
{
    use LogsActivity, CausesActivity;

    // protected static $logAttributes = ['col'];
    protected static $logAttributes = [
        'flight_route_id',
        'aircraft_id',
        'captain_id',
        'flight_cycles',
        'block_time_start',
        'flight_time_start',
        'flight_time_end',
        'block_time_end',
        'reason_1',
        'delay_in_min_1',
        'reason_2',
        'delay_in_min_2',
        'reason_3',
        'delay_in_min_3',
    ];

    protected static $logOnlyDirty = true;

    protected static $submitEmptyLogs = false;

    protected static $logName = 'log_book';

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->description = "{$eventName} {$this->aircraft->id}";
    }


    protected $table = "log_book";



    public function aircraft()
    {
        return $this->belongsTo('App\Aircraft', 'aircraft_id');
    }

    public function flightRoute()
    {
        return $this->belongsTo('App\FlightRoute', 'flight_route_id');
    }

    public function getNameAttribute()
    {
        $flightType = str_replace('_',' ',strtoupper($this->flight_type));
        return "{$flightType}  --- {$this->flightRoute->fromApt->name}   ----   {$this->flightRoute->toApt->name} ({$this->flightRoute->block_hours})";
    }

    public function getName2Attribute()
    {
        $flightType = $this->flightRoute->fromApt->name.' - '.$this->flightRoute->toApt->name;
        return "{$flightType}";
    }
}
