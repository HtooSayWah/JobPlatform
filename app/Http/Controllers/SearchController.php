<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    public function jobsList(){
        //request()-> title
       
        $jobs = Job::where('title', 'LIKE', '%' . request()-> search . '%')        
        ->simplePaginate(10);
        return view('joblist', compact('jobs'));
    }
    public function jobsListwithSpec($id){
        $jobs = Job::where('specializaion_id', 'LIKE', '%' . $id . '%')
        ->simplePaginate(10);
        return view('joblist', compact('jobs'));
    }
}
