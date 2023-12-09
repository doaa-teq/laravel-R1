<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use App\Trait\Common;

class entriescontroller extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $useful=Entry::get();
        return view('exm',compact('useful'));//for download the data and 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entryadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $infs=new Entry;//we use the same names of the field inside the table
        $infs->title=$request->title;
        $infs->describtion=$request->describtion;
        $infs->from_price=$request->from_price;
        $infs->to_price=$request->to_price;
        $filename=$this->uploadFile($request->image,'assets\images');
        $infs['image']=$filename;
        $infs->save();
        return "cars data added sussessfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
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
