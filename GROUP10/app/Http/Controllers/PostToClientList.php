<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Pets;

class PostToClientList extends Controller
{
    public function index()
    {
        
        $pet=Clients::all();
        return view('pet.index')->with('pet',$pet);
    }

    public function show($id)
    {
       
        $post= Clients::find($id);
        $pets=Pets::all();
        return view('pet.shw',['post'=>$post,'pets'=>$pets]);

        
    }


}
