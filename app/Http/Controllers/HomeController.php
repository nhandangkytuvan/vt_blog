<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon;
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        //$interval = Carbon\CarbonInterval::minutes(3);
        //echo $interval;               
        return view('home');
    }
}
