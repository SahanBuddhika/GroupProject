<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Clients;

class PostToPets extends Controller
{
    public function show($id)
    {
       
        $pets= Pets::find($id);
        
        return view('petprofile.petprofile1')->with('pets',$pets);

        
    }

    public function create(){
        
        // $medicineList=DB::table('medicines')
        //                 ->groupBy('country')
        //                 ->get();
        $man=5;
        $pet=Pets::all();

        
        return view('petprofile.create',['pet'=>$pet,'man'=>$man]);
    }

    public function store(Request $request){
      $post =new Pets;
      $post->colour=$request->input('title');
      $post->species=$request->input('specialNote');
      $post->save();

      
      return redirect('/create');
    
        
    }


  

}
