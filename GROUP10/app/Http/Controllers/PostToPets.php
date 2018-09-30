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


  

}
