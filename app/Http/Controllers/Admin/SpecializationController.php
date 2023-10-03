<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    //
    public function index(){
        //return "controller - Article List";
       
        //$data = Article::all();
        return view('admin.specialization');
        //return 'Hello This is from Add Specialization';

    }
    public function create(){
        // $validator = validator(request()->all(),[
        //     'name' => 'required',
        // ]);
        // if($validator ->fails()){
        //     return back()->withErrors($validator);
        // }

        $spec = new Specialization;
        $spec -> name = request()-> name;
        $spec->save();
        return redirect(("/home"));
    }
}
