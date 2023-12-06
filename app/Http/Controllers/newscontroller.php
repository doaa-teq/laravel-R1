<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;//to be able to see the model 
use App\Trait\Common;

class newscontroller extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    private $column = ['title', 'content','auther','published','image'];
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
        $massage=[
            'title.required'=>'title is required',
            'content.required'=>'content is required',
            'auther.required'=>'content is required',
        ];

        // $data = $request->only($this->columns);
        
        $data=$request->validate(['title'=>'required|string',
        'content'=>'required|string',
        'auther'=>'required|string',
        'image' => 'required|mimes:png,jpg,jpeg|max:2048',
    ],$massage);
     $filename=$this->uploadFile($request->image,'assets\images');
     $data['image']=$filename;
     $data['published'] = isset($request['published'])? 1 : 0;
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
        $nes=Journal::findOrFail($id);//search for the id 
        return view('update',compact('nes'));//semd to view by compact
        // return view('updatejournal',compact('ness'));//semd to view by compact
    }
    public function showdata(string $id)
    {  
        $nes=Journal::findOrFail($id);//search for the id 
        return view('update',['nes'=>$nes]);//semd to view by compact
        // return view('updatejournal',compact('ness'));//semd to view by compact
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   $messages= $this->massage();
            
        $data=$request->validate(['title'=>'required|string',
        'content'=>'required|string',
        'auther'=>'required|string',
        'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
        ],$messages);
       
        $data['published'] = isset($request->published);

        // update image if new file selected
        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');
            $data['image']= $fileName;
        }

        //return dd($data);
        Journal::where('id',$id)->update($request->only($this->column));//here i used the name in the name o the colunmsarray
        return $filename;
      }
        // return 'updated';
    

    /**
     * Remove the specified resource from storage.
     */

     public function upd(Request $req)
    {
       $nes=Journal::find($req->id);
       return view('update',compact('nes'));
       $nes->title=$req->title;
       $nes->content=$req->content;
       $nes->auther=$req->auther;
       $filename=$this->uploadFile($req->image,'assets\images');
       $nes['image']=$filename;
       $nes['published'] = isset($req['published'])? 1 : 0;
       $nes->save();
       return view('data');

    }
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
// public function showimage(){
//     return view("images");
//   }//the name of method is test1 and it will return to login page
//   public function uploud(Request $request){
//     // $file_extension = $request->image->getClientOriginalExtension();
//     //   $file_name = time() . '.' . $file_extension;
//     //   $path = 'assets\images';
//     //   $request->image->move($path, $file_name);
//     //   return 'Uploaded';
//    //the name of method is test1 and it will return to login page
  
}
