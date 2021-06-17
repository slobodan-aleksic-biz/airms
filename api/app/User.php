<?php

namespace App;

use App\Enums\EntityEnum;
use App\Enums\UserRoleEnum;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Activitylog\Traits\LogsActivity;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable, LogsActivity, CausesActivity;

    // protected static $logAttributes = ['col'];
    protected static $logAttributes = [
        'name',
        'email',
        'password',
        'is_active',
        'entity',
        'role',
    ];

    protected static $logOnlyDirty = true;

    protected static $submitEmptyLogs = false;

    protected static $logName = 'user';

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->description = "{$eventName}";
    }

    /**
     * The authentication provider.
     * @var \Tymon\JWTAuth\Contracts\Providers\Auth
     */
    protected $auth;


    public function authenticate($token = false)
    {
        $id = $this->getPayload($token)->get('sub');
        if (!User::find($id)) {
            return false;
        }
        return User::find($id);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'boolean',
        'last_seen_at' => 'datetime'
    ];


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    public function getAvatarImageAttribute(): string
    {
        if ($this->avatar) {
            // return Storage::disk()->url('avatars/users/' . $this->avatar);
        }

        // $hash = md5(strtolower($this->email));
        // return "https://www.gravatar.com/avatar/{$hash}?d=retro";
        return asset('assets/img/users/avatar.png');
    }

    public function applyTimezone(\DateTime $dateTime)
    {
        return Carbon::parse($dateTime)
            ->timezone($this->timezone);
    }

    public function applyUTCTimeZone(\DateTime $dateTime)
    {
        return Carbon::parse($dateTime)
            ->timezone('UTC');
    }


    public function scopeActiveCaptains($q) {
        $q->orderBy('name', 'asc')
        ->where('is_active', 1)
        ->where('entity', EntityEnum::CREW_MEMBER)
        ->where('role', UserRoleEnum::CAPTAIN)
        ->select([
            'id',
            'name',
            'email',
            'timezone',
            'created_at',
            'updated_at',
        ]);
    }

    public function scopeActiveEngineers($q) {
        $q->orderBy('name', 'asc')
        ->where('is_active', 1)
        ->where('entity', EntityEnum::PART_145)
        ->where('role', UserRoleEnum::ENGINEER)
        ->select([
            'id',
            'name',
            'email',
            'timezone',
            'created_at',
            'updated_at',
        ]);
    }

    public function scopeActiveTechnicians($q) {
        $q->orderBy('name', 'asc')
        ->where('is_active', 1)
        ->where('entity', EntityEnum::PART_145)
        ->where('role', UserRoleEnum::TECHNICIAN)
        ->select([
            'id',
            'name',
            'email',
            'timezone',
            'created_at',
            'updated_at',
        ]);
    }

}
