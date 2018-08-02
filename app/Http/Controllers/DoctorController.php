<?php

namespace App\Http\Controllers;

use App\City;
use App\Doctor;
use App\Institution;
use App\Specialty;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors= Doctor::take(10)->get();
        return response()->json(['error'=>false,'message'=>'Resources fetched successfully.','data'=>$doctors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::where('visible',true)->get();
        $institutions = Institution::where('visible',true)->get();
        $specialties = Specialty::where('visible',true)->get();
        return view('client.register',['cities'=>$cities,'institutions'=>$institutions,'specialties'=>$specialties]);
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
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return response()->json(['error'=>false,'message'=>'Resource fetched successfully.','data'=>$doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $location
     * @param $specialty
     * @return JsonResponse
     */
    public function filter($location,$specialty)
    {
        $doctors = Doctor::where('city_id',$location)->whereHas('specialties', function($q) use ($specialty) {$q->where('specialty_id', '=', $specialty);})->get();
        return response()->json(['error'=>false,'message'=>'Doctors fetched successfully.','data'=>$doctors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
