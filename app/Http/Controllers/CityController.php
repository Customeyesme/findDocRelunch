<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CityController extends Controller
{

    /**
     *Return a list of cities for the select list on mobile.
     *
     * @return JsonResponse
     */
    public function index(){
       $cities = City::select('id','name')->get();
       return response()->json(['error'=>false, 'message'=>'Cities successfully fetched.', 'data'=>$cities]);
    }
}
