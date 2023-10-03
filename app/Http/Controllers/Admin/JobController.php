<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    //
    public function index(){
        //return "controller - Article List";
       
        //$data = Article::all();
        //$users = DB::select('select * from student');   
             
        $data = DB::select('select * from specializations');
        //$result = json_decode($data, true);
        return view('admin.job',['specs' =>$data]);
        //return 'Hello This is from Add Specialization';

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
        $job -> employer_id = 1;
        $job -> specializaion_id = request()-> specializaion_id;
        $job -> location =  request()-> location;
        $job -> status = "open";
        $job -> salary = request()->salary;
        $job -> responsibility = request()->responsibility;
        $job -> requirement = request()->requirement;
        //$job -> type = request()->type;
        $job -> type = "open";


        $job->save();
        return redirect(("/home"));
    }

    
}
