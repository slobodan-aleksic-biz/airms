<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->orderBy('owners.name', 'asc')
            ->select([
                'owners.id as id',
                'owners.name as name_left',
                'owners.description as description_left',
                DB::raw("convert_tz(owners.created_at, 'UTC', users.timezone) as created_at_left"),
                DB::raw("convert_tz(owners.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();

        return response()->json($owners);
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
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        if ($owner) {
            return response()->json($owner, 200);
        } else {
            return response()->json(['message' => 'The owner doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        return $this->defaultAction($request, $owner->id);
    }



    private function defaultAction(Request $request, $id)
    {
        $owner = null;
        $actionStr = "";

        if ($id) {
            $owner = Owner::find($id);
            $actionStr = "updated";
        } else {
            $owner = new Owner();
            $actionStr = "created";
        }

        if ($owner) {

            $validatedData = request()->validate([
                'name' => ['required', 'string', 'unique:owners,name,' . $id],
                'description' => ['required', 'string'],
            ]);

            $owner->name = $validatedData['name'];
            $owner->description = $validatedData['description'];

            if ($owner->save()) {
                return response()->json(['message' => 'The owner is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The owner can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The owner doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        if ($owner) {
            if ($owner->delete()) {
                return response()->json(['message' => 'The owner is deleted'], 201);
            } else {
                return response()->json(['message' => 'The owner can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The owner doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\Owner');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'owner')
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
}
