<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Activitylog\Traits\LogsActivity;

class Airport extends Model
{
    use LogsActivity, CausesActivity;

    // protected static $logAttributes = ['col'];
    protected static $logAttributes = [
        'name',
        'description',
        'iata_code',
        'icao_code',
        'latitude',
        'longitude',
        'altitude_m',
        'time_zone_offset',
        'time_zone_letter',
        'time_zone_dst',
        'city_id',
    ];

    protected static $logOnlyDirty = true;

    protected static $submitEmptyLogs = false;

    protected static $logName = 'airport';

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->description = "{$eventName}";
    }

    public function getAirportNameAttribute()
    {
        return "{$this->city_name} ({$this->iata_code})";
    }

    public function city()
    {
        return $this->belongsTo('App\City', 'city_id');
    }
}
