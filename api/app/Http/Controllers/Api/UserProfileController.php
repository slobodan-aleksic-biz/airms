<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function avatar()
    {
        return response()->json(auth()->user()->avatar_image);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
        if($user) {
            if($user->delete()) {
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
        if($user) {
            $user->is_active = $user->is_active ? false : true;
            if($user->save()) {
                return response()->json(['message' => 'The user is '.($user->is_active ? 'disabled' : 'enabled')], 201);
            } else {
                return response()->json(['message' => 'error'], 409);
            }
        } else {
            return response()->json(['message' => 'There is no user'], 409);
        }

    }
}
