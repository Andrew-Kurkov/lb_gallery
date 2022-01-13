<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\picture;

class MainController extends Controller
{
    function dd(){
        $test = picture::all();
        dd($test);
    }
    function PicView(){
        $pictures = picture::all();
        return view('main',['pictures' => $pictures]);
    }
    function PicPages($id){
        $p = picture::find($id);

        return view('PicPage',['p' => $p]);

    }
    function addPic(){
        return view('AddPic');

    }
    function Add(Request $r){
        $dir_upload_img = '/uploads/';
        $uploadfile = $dir_upload_img . basename($_FILES['userfile']['name']);
        copy($_FILES['userfile']['tmp_name'], SITE_ROOT.$uploadfile);

        $add = $r->only(['pic_name','pic_author']);
        $add['pic_url'] = $uploadfile;

        $picture = picture::create($add);
        if($picture)
         {
             return redirect('/');
         }
        // //return redirect(route('customer.private'));
        dd($_FILES);
    }

}

