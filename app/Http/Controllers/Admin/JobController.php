<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index(){
        //return "controller - Article List";
       
        //$data = Article::all();
        return view('admin.job');
        //return 'Hello This is from Add Specialization';

    }
}
