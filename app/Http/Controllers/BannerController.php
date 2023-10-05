<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function add()
    {   
        //resources\views\employer
        return view('admin.banner');
    }

    public function create()
    {
        $employer = new banner;
        $employer->name = request()->name;                 
        $employer->imgPath = request()->file('imgPath')->store('public/images/banner');
        
        // $image = new Image([
        //     'title' => $request->get('imgTitle'),
        //     'image_path' => $imagePath,
        // ]);

        $employer->save();
        return redirect('/home');
    }
}
