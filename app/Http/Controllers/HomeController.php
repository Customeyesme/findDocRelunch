<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show user data for api.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home');
    }

    /**
     * Show user data for api.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function apiLoggedUser(Request $request) {
        return $request->user();
    }
}
