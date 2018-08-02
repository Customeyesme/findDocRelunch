<?php

namespace App\Http\Controllers;

use App\Specialty;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    /**
     *Return a list of cities for the select list on mobile.
     *
     * @return JsonResponse
     */
    public function index(){
        $cities = Specialty::select('id','name')->get();
        return response()->json(['error'=>false, 'message'=>'Specialties successfully fetched.', 'data'=>$cities]);
    }
}
