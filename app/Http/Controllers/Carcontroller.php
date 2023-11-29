<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;//to be able to see the model 

class Carcontroller extends Controller
{
    private $colunm = ['car_name','dascription','price'];//this will used in update method 
    /**
     *
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars=Car::get();
        return view('car',compact('cars'));//for download the data and 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cars=new Car;//we use the same names of the field inside the table
        $cars->car_name=$request->title;
        $cars->dascription=$request->description;
        $cars->purchase=$request->remember;
        $cars->price=$request->price;
        if(isset($request->remember)){

            $cars->purchase = true;

        }else{

            $cars->purchase = false;

        }
        $cars->save();
        return "cars data added sussessfully";

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car=Car::findOrFail($id);
        return view('details',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car=Car::findOrFail($id);
        return view('updatecar',compact('car'));
        
        // return view('updatecar');
    //    return "car id is".$id ;//edit method for update


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Car::where('id',$id)->update($request->only($this->colunm));//here i used the name in the name o the colunmsarray
        return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id',$id)->delete();
        return 'cardestroy';
    }
}
