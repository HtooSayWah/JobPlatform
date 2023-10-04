<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    //
    public function index(){
        
        $data = Specialization::all();      
        $empData = Employer::all();  
        return view('admin.job',['specs' =>$data,'emps'=>$empData]);
        

    }
    public function create(){
        // $validator = validator(request()->all(),[
        //     'name' => 'required',
        // ]);
        // if($validator ->fails()){
        //     return back()->withErrors($validator);
        // }
        

        $job = new Job;
        $job -> title = request()-> title;
        $job -> description = request()-> description;
        $job -> employer_id = request()-> employer_id;
        $job -> specializaion_id = request()-> specializaion_id;
        $job -> location =  request()-> location;
        $job -> status = "open";
        $job -> salary = request()->salary;
        $job -> responsibility = request()->responsibility;
        $job -> requirement = request()->requirement;
        //$job -> type = request()->type;
        $job ->closing_date = request()->closing_date;
        $job -> type = request()->type;//type


        $job->save();
        return redirect(("/home"));
    }

    
}
