<?php

namespace App\Http\Controllers\Api;

use App\Enums\EntityEnum;
use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::join('users as usr', function ($q) {
            $q->where('usr.id', '=', auth()->user()->id);
        })
            ->orderBy('users.name', 'asc')
            ->select([
                'users.id',
                'users.name as name_left',
                DB::raw("replace(upper(users.entity), '_', ' ') as entity_left"),
                DB::raw("replace(upper(users.role), '_', ' ') as role_left"),
                'users.email as email_left',
                'users.timezone as timezone_left',
                DB::raw("
                    case when users.is_active = 1
                        then '<i class=\"badge badge-success\">TRUE</i>'
                        else '<i class=\"badge badge-danger\">FALSE</i>'
                    end as is_active_center"),

                DB::raw("convert_tz(users.last_seen_at, 'UTC', usr.timezone) as last_seen_at_left"),
                'users.last_login_ip as last_login_ip_left',

                DB::raw("convert_tz(users.created_at, 'UTC', usr.timezone) as created_at_left"),
                DB::raw("convert_tz(users.updated_at, 'UTC', usr.timezone) as updated_at_left"),
            ])->get();

        return response()->json($users);
    }

    public function avatar()
    {
        return auth()->user()->avatar_image;
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
    public function store(Request $request)
    {
        return $this->defaultAction($request, null);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json($user, 200);
        } else {
            return response()->json(['message' => 'The user doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->defaultAction($request, $id);
    }

    private function defaultAction(Request $request, $id)
    {
        $user = null;
        $actionStr = "";

        if ($id) {
            $user = User::find($id);
            $actionStr = "updated";
        } else {
            $user = new User();
            $actionStr = "created";
        }

        if ($user) {

            $validatedData = request()->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
                'entity' => ['required', 'string'],
                'role' => ['required', 'string'],
                'timezone' => ['required', 'string'],
                'password' => [$id ? 'nullable' : 'required', 'string', 'min:8', 'confirmed'],
                'is_active' => ['required'],
            ]);

            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->entity = $validatedData['entity'];
            $user->role = $validatedData['role'];
            $user->timezone = $validatedData['timezone'];
            $user->is_active = $validatedData['is_active'];

            $password = $validatedData['password'] ?? null;
            if ($password) {
                $user->password = Hash::make($password);
            }

            if ($user->save()) {
                return response()->json(['message' => 'The user is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The user can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The user doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            if ($user->delete()) {
                return response()->json(['message' => 'The user is deleted'], 201);
            } else {
                return response()->json(['message' => 'The user can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The user doesn\'t exists!'], 409);
        }
    }


    public function enableDisableUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->is_active = $user->is_active ? false : true;
            if ($user->save()) {
                return response()->json(['message' => 'The user is ' . ($user->is_active ? 'disabled' : 'enabled')], 201);
            } else {
                return response()->json(['message' => 'error'], 409);
            }
        } else {
            return response()->json(['message' => 'There is no user'], 409);
        }
    }


    public function timezones()
    {
        $timezoneList = \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);

        return response()->json($timezoneList, 200);
    }

    public function entities()
    {
        $roles = [
            [
                'label' => ucwords(EntityEnum::ADMIN),
                'value' => EntityEnum::ADMIN,
            ],
            [
                'label' => strtoupper(str_replace('_', ' ', EntityEnum::PART_145)),
                'value' => EntityEnum::PART_145,
            ],
            [
                'label' => strtoupper(EntityEnum::CAMO),
                'value' => EntityEnum::CAMO,
            ],
            [
                'label' => strtoupper(EntityEnum::QA),
                'value' => EntityEnum::QA,
            ],
            [
                'label' => strtoupper(EntityEnum::MCC),
                'value' => EntityEnum::MCC,
            ],
            [
                'label' => ucwords(EntityEnum::STOCK),
                'value' => EntityEnum::STOCK,
            ],
            [
                'label' => ucwords(EntityEnum::SCHOOL),
                'value' => EntityEnum::SCHOOL,
            ],
            [
                'label' => ucwords(str_replace('_', ' ', EntityEnum::CREW_MEMBER)),
                'value' => EntityEnum::CREW_MEMBER,
            ],
        ];

        return response()->json($roles, 200);
    }

    public function roles($entity)
    {
        $entities = [];
        switch($entity) {
            case EntityEnum::ADMIN:
                $entities = [
                    [
                        'label' => ucwords(UserRoleEnum::ADMIN),
                        'value' => UserRoleEnum::ADMIN,
                    ],
                ];
            break;
            case EntityEnum::MCC:
                $entities = [
                    [
                        'label' => ucwords(UserRoleEnum::ENGINEER),
                        'value' => UserRoleEnum::ENGINEER,
                    ],
                ];
            break;
            case EntityEnum::PART_145:
                $entities = [
                    [
                        'label' => ucwords(UserRoleEnum::TECHNICIAN),
                        'value' => UserRoleEnum::TECHNICIAN,
                    ],
                ];
            break;
            case EntityEnum::CREW_MEMBER:
                $entities = [
                    [
                        'label' => ucwords(UserRoleEnum::CAPTAIN),
                        'value' => UserRoleEnum::CAPTAIN,
                    ],
                ];
            break;
        }

        return response()->json($entities, 200);
    }

    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\User');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'user')
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


    public function engineers()
    {
        $engineers = User::activeEngineers()->get();

        return response()->json($engineers, 200);
    }

    public function technicians()
    {
        $technicians = User::activeTechnicians()->get();

        return response()->json($technicians, 200);
    }

    public function captains()
    {
        $captains = User::activeCaptains()->get();

        return response()->json($captains, 200);
    }
}
