<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use App\Models\ContactUs;

class Contactcontroller extends Controller
{
    public function create()
    {
        return view('contact');
    }
    // public function send()
    // {
    //     $data=request()->validate([
    //     'name'=>'required|min:3',
    //     'email'=>'required|email',
    //     'massage'=>'required|min:8',
    //     ]);
    //     Mail::to('receipentmail@gmail.com')->send(new ContactUs($data));
    //     dd('sent');
        
    // }
    public function contact_mail_send( Request $request)
    {
        // dd($request->all());
        Mail::to('doaadewedar63@gmail.com')->send(new ContactMail($request));
        return redirect('contact');
    }
}
