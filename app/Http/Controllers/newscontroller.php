<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;//to be able to see the model 

class newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nes=Journal::get();
        return view('data',compact('nes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news');//the main homepage part should be avaliable not commented 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nes=new Journal;//we use the same names of the field inside the table
        $nes->title=$request->titles;
        $nes->content=$request->contents;
        $nes->auther=$request->authers;
        $nes->published=$request->publisheds;
        if(isset($request->publisheds)){

            $nes->published = true;

        }else{

            $nes->published = false;

        }
        $nes->save();
        return "news data added sussessfully";
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ness=Journal::findOrFail($id);
        return view('updatejournal',compact('ness'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
