<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employer;

class EmployerController extends Controller
{
    //
    public function add()
    {   
        return view('admin.employer.add');
    }

    public function create()
    {
        $employer = new Employer;
        $employer->orgname = request()->orgname;  
        $employer->address = request()->address;
        $employer->phoneNo = request()->phoneNo;                 
        $employer->imgPath = request()->file('imgPath')->store('public/images/employer');
        
        // $image = new Image([
        //     'title' => $request->get('imgTitle'),
        //     'image_path' => $imagePath,
        // ]);

        $employer->save();
        return redirect('/home');
    }
}
