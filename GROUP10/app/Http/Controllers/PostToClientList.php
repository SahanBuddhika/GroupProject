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
        $pets= Pets::all();
        $post= Clients::find($id);
        return view('pet.shw')->with('post',$post);

        
    }


}
