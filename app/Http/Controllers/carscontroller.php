<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carscontroller extends Controller
{
    public function cars(){
        return view("car");//the name of method is test1 and it will return to login page
    }
}
