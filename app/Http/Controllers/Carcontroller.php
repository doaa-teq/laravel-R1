<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;//to be able to see the model 
use App\Models\Category;

class Carcontroller extends Controller
{
    private $colunm = ['car_name','dascription','price','category_id'];//this will used in update method 
    /**
     *
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars=Car::get();
        $categories=Category::select('id','categoryName')->get();
        return view('car',compact('cars', 'categories'));//for download the data and 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::select('id','categoryName')->get();//to get certain dat from the category table
        return view('addcar',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cars=new Car;//we use the same names of the field inside the table
        $cars->car_name=$request->car_name;
        $cars->dascription=$request->dascription;
        $cars->purchase=$request->remember;
        $cars->price=$request->price;
        $cars->category_id=$request->category_id;
        if(isset($request->remember)){

            $cars->purchase = true;

        }else{

            $cars->purchase = false;

        }
        $cars->save();
        return "cars data added sussessfully";
    //     $data = $request->only($this->column);
    //     $data['published'] = isset($data['published'])? true : false;
    //     $request->validate(['car_name'=>'required|string',
    //     'description'=>'required|string',

    // ]);
    //  Car::create($data);
    //   return "done";
        

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
        
        $car = Car::findOrFail($id);
        $categories=Category::select('id','categoryName')->get();//to get certain dat from the category table
        return view('updatecar', compact('car', 'categories'));
        
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
        return redirect ('car');
    }
    public function Trashed(){
        $cars=Car::onlyTrashed()->get();
        return view('Trashed',compact('cars'));
    }
    public function restore(string $id){
        Car::where('id',$id)->restore();
        return redirect ('car');
    }
    public function delete(string $id){
        Car::where('id',$id)->forceDelete();
        return redirect ('Trashed');
}
}