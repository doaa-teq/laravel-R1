<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trait\Common;

class examplecontroller extends Controller
{
  use Common;
    public function test1(){
        return view("login"); //the name of method is test1 and it will return to login page
    }

    public function showimage(){
      return view("images");
    }//the name of method is test1 and it will return to login page
    public function uploud(Request $request){
      // $file_extension = $request->image->getClientOriginalExtension();
      //   $file_name = time() . '.' . $file_extension;
      //   $path = 'assets\images';
      //   $request->image->move($path, $file_name);
      //   return 'Uploaded';
      $filename=$this->uploadFile($request->image,'assets\images');
      return $filename;
    }//the name of method is test1 and it will return to login page
    
}
