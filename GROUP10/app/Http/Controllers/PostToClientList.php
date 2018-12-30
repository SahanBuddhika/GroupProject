<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\petList;

class PostToClientList extends Controller
{
    public function index()
    {
        
        $pet=Clients::all();
        return view('pet.index')->with('pet',$pet);
    }

    public function show($id)
    {
       
        $post=Clients::find($id);
        return view('pet.shw',['post'=>$post,'pets'=>$post->pet]);
        //return view('pet.shw')->with('post',$post->id);
        


        // $post=Clients::find($id);
        // //$pets=petlist::find($id);

        // return view('pet.shw',['post'=>$post,'pets'=>$post->pets]);

        //return view('pet.shw',['post'=>$post,'pets'=>$pets]);
        //return view('pet.shw',[$post,$pets]);
       // return view('pet.shw',['post'=>$post,'pets'=>$pets]);

        
    }


}
