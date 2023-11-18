<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class examplecontroller extends Controller
{
    public function test1(){
        return view("login");//the name of method is test1 and it will return to login page
    }
}
