<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;//to be able to see the model 

class newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $columns = ['title', 'content','auther','published'];
    public function index()
    {
        $nes=Journal::get();//associative array that will used in the foreach loop
        return view('data',compact('nes'));//compact for downloading tha data 

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
        // $nes=new Journal;//we use the same names of the field inside the table
        // $nes->title=$request->titles;
        // $nes->content=$request->contents;
        // $nes->auther=$request->authers;
        // $nes->published=$request->publisheds;
        // if(isset($request->publisheds)){

        //     $nes->published = true;

        // }else{

        //     $nes->published = false;

        // }
        // $nes->save();
        // return "news data added sussessfully";
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true : false;
        $request->validate(['title'=>'required|string',
        'content'=>'required|string',
        'auther'=>'required|string',
    ]);
     Journal::create($data);
      return "done";
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ness=Journal::findOrFail($id);//search for the id 
        return view('creative',compact('ness'));//semd to view by compact
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ness=Journal::findOrFail($id);//search for the id 
        return view('updatejournal',compact('ness'));//semd to view by compact
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
        Journal::where('id',$id)->delete();
        return redirect ('trash');
    }
    public function Trashed(){
        $nes=Journal::onlyTrashed()->get();
        return view('trash',compact('nes'));
    }
    public function restore(string $id){
        Journal::where('id',$id)->restore();
        return redirect ('data');
    }
    public function delete(string $id){
        Journal::where('id',$id)->forceDelete();
        return redirect ('trash');
}
}
