<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Trait\Common;

class informationscontroller extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $massage=[
            'title.required'=>'title is required',
            'describtion.required'=>'describtion is required',
            'from_price.required'=>'from_price is required',
            'to_price.required'=>'to_price is required',
        ];
        
        $date=$request->validate(['title'=>'required|string',
        'describtion'=>'required|string',
        'from_price'=>'required',
        'to_price'=>'required',
        'image' => 'required|mimes:png,jpg,jpeg|max:2048',
    ],$massage);
     $filename=$this->uploadFile($request->image,'assets\images');
     $date['image']=$filename;
     Information :: create($date);
      return "done";
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
        //
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
