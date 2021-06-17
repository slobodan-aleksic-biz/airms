<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;

class ShopController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::
            join('cities', 'cities.id', '=', 'shops.city_id')
            ->join('states', 'states.id', '=', 'cities.state_id')
            ->join('countries', 'countries.id', '=', 'states.country_id')
            ->join('users as users', function ($q) {
                $q->where('users.id', '=', auth()->user()->id);
            })
            ->orderBy('shops.name', 'asc')
            ->select([
                'shops.id as id',
                'shops.name as name_left',
                'shops.address as address_left',
                'shops.phone as phone_left',
                'shops.email as email_left',
                'shops.description as description_left',

                DB::raw("concat(cities.name,' (',states.name,' - ',countries.name,')') as 'city/state/country_left'"),

                DB::raw("convert_tz(shops.created_at, 'UTC', users.timezone) as created_at_left"),
                DB::raw("convert_tz(shops.updated_at, 'UTC', users.timezone) as updated_at_left"),
            ])->get();

        return response()->json($shops);
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
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        if ($shop) {

            $shop = Shop::join('cities', 'cities.id', '=', 'shops.city_id')
                ->join('states', 'states.id', '=', 'cities.state_id')
                ->join('countries', 'countries.id', '=', 'states.country_id')
                ->join('users as users', function ($q) {
                    $q->where('users.id', '=', auth()->user()->id);
                })
                ->where('shops.id', $shop->id)
                ->orderBy('shops.name', 'asc')
                ->select([
                    'shops.id as id',
                    'shops.name as name_left',
                    'shops.address as address_left',
                    'shops.phone as phone_left',
                    'shops.email as email_left',
                    'shops.description as description_left',

                    'cities.id as city_id',
                    'states.id as state_id',
                    'countries.id as country_id',

                    DB::raw("convert_tz(shops.created_at, 'UTC', users.timezone) as created_at_left"),
                    DB::raw("convert_tz(shops.updated_at, 'UTC', users.timezone) as updated_at_left"),
                ])->first();

            return response()->json($shop, 200);
        } else {
            return response()->json(['message' => 'The shop doesn\'t exist!'], 409);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        return $this->defaultAction($request, $shop->id);
    }

    private function defaultAction(Request $request, $id)
    {
        $shop = null;
        $actionStr = "created";

        if ($id) {
            $shop = Shop::find($id);
            $actionStr = "updated";
        } else {
            $shop = new Shop();
        }

        if ($shop) {

            $validatedData = request()->validate([
                'name' => ['required', 'string', 'unique:shops,name,' . $id],
                'address' => ['required', 'string'],
                'phone' => ['required', 'string'],
                'email' => ['required', 'email', 'string', 'unique:shops,email,' . $id],
                'description' => ['nullable', 'string'],
                'city_id' => ['required', 'numeric'],
            ]);

            $shop->name = $validatedData['name'];
            $shop->address = $validatedData['address'];
            $shop->phone = $validatedData['phone'];
            $shop->email = $validatedData['email'];
            $shop->description = $validatedData['description'];
            $shop->city_id = $validatedData['city_id'];

            if ($shop->save()) {
                return response()->json(['message' => 'The shop is ' . $actionStr . ''], 201);
            } else {
                return response()->json(['message' => 'The shop can\'t be ' . $actionStr . '!'], 409);
            }
        } else {
            return response()->json(['message' => 'The shop doesn\'t exists!'], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        if ($shop) {
            if ($shop->delete()) {
                return response()->json(['message' => 'The shop is deleted'], 201);
            } else {
                return response()->json(['message' => 'The shop can\'t be deleted!'], 409);
            }
        } else {
            return response()->json(['message' => 'The shop doesn\'t exists!'], 409);
        }
    }


    public function activities()
    {
        $subjectId = request()->get('subject_id') ?? null;

        $activities = Activity::join('users', 'users.id', '=', 'activity_log.causer_id')
            ->join('users as usr', function ($q) {
                $q->where('usr.id', '=', auth()->user()->id);
            })
            ->where('activity_log.subject_type', 'App\Shop');
        if ($subjectId) {
            $activities->where('activity_log.subject_id', $subjectId);
        }
        $activities = $activities->where('activity_log.log_name', 'shop')
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
