<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function index()
    {
        //return view('home');
        $data = Specialization::all();  
        //$userType= auth()->user()->type;      
        //$userType= Auth::user()->type;      
        // return view('home', ['specializations'=>$data,'type'=>$userType]);
        $jobData = Job::all();   
        $banners = banner::all();    
        return view('home', ['specializations'=>$data,'jobs'=>$jobData,'banners'=>$banners]);
    }
    public function search(){
       
        //$jobs = Job::where('title', 'like', '%' . request()->search . '%')->get();
        $jobs = Job::all();
        return view('home', ['searchobs'=>$jobs]); 
          
        //return redirect()->route('home');   
    }
}
