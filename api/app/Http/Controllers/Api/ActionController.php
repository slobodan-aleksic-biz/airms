<?php

namespace App\Http\Controllers\App;

use App\Action;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actions = Action::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->orderBy('actions.name', 'asc')
            ->select([
                'actions.id as id',
                'actions.name as name_left',
                'actions.description as description_left',
                DB::raw("convert_tz(actions.created_at, 'UTC', users.timezone) as created_at_left"),
                DB::raw("convert_tz(actions.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();

        return response()->json($actions);
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
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function show(Action $action)
    {
        if ($action) {
            return response()->json($action, 200);
        } else {
            return response()->json(['message' => 'The action doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function edit(Action $action)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Action $action)
    {
        return $this->defaultAction($request, $action->id);
    }



    private function defaultAction(Request $request, $id)
    {
        $action = null;
        $actionStr = "";

        if ($id) {
            $action = Action::find($id);
            $actionStr = "updated";
        } else {
            $action = new Action();
            $actionStr = "created";
        }

        if ($action) {

            $validatedData = request()->validate([
                'name' => ['required', 'string', 'unique:actions,name,' . $id],
                'description' => ['required', 'string'],
            ]);

            $action->name = $validatedData['name'];
            $action->description = $validatedData['description'];

            if ($action->save()) {
                return response()->json(['message' => 'The action is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The action can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The action doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function destroy(Action $action)
    {
        if ($action) {
            if ($action->delete()) {
                return response()->json(['message' => 'The action is deleted'], 201);
            } else {
                return response()->json(['message' => 'The action can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The action doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\Action');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'action')
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
