<?php

namespace App\Http\Controllers\Api;

use App\ATAChapter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Activitylog\Models\Activity;

class ATAChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aTAChapters = ATAChapter::join('users as users', function ($q) {
            $q->where('users.id', '=', auth()->user()->id);
        })
            ->orderBy('a_t_a_chapters.code', 'asc')
            ->select([
                'a_t_a_chapters.id',
                'a_t_a_chapters.code as code_left',
                'a_t_a_chapters.name as name_left',
                DB::raw('substring(a_t_a_chapters.description,1,15) as description_left'),

                DB::raw("convert_tz(a_t_a_chapters.created_at, 'UTC', users.timezone) as created_at_left"),
                DB::raw("convert_tz(a_t_a_chapters.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();

        return response()->json($aTAChapters);
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
     * @param  \App\ATAChapter  $aTAChapter
     * @return \Illuminate\Http\Response
     */
    public function show(ATAChapter $aTAChapter)
    {
        if ($aTAChapter) {
            return response()->json($aTAChapter, 200);
        } else {
            return response()->json(['message' => 'The ata chapter doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ATAChapter  $aTAChapter
     * @return \Illuminate\Http\Response
     */
    public function edit(ATAChapter $aTAChapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ATAChapter  $aTAChapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ATAChapter $aTAChapter)
    {
        return $this->defaultAction($request, $aTAChapter->id);
    }


    private function defaultAction(Request $request, $id)
    {
        $ataChapter = null;
        $actionStr = "created";

        if ($id) {
            $ataChapter = ATAChapter::find($id);
            $actionStr = "updated";
        } else {
            $ataChapter = new ATAChapter();
        }

        if ($ataChapter) {

            $validatedData = request()->validate([
                'code' => ['required', 'string', 'min:2', 'max:3', 'unique:a_t_a_chapters,code,' . $id],
                'name' => ['required', 'string', 'max:255'],
                'description' => ['nullable', 'string'],
            ]);

            $ataChapter->code = $validatedData['code'];
            $ataChapter->name = $validatedData['name'];
            $ataChapter->description = $validatedData['description'];

            if ($ataChapter->save()) {
                return response()->json(['message' => 'The ata chapter is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The ata chapter can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The ata chapter doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ATAChapter  $aTAChapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(ATAChapter $aTAChapter)
    {
        if ($aTAChapter) {
            if ($aTAChapter->delete()) {
                return response()->json(['message' => 'The ata chapter is deleted'], 201);
            } else {
                return response()->json(['message' => 'The ata chapter can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The ata chapter doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\ATAChapter');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'ata_chapter')
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
