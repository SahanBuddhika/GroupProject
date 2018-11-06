<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Clients;
use App\Medicine;
use App\reportMedicine;


class PostToPets1 extends Controller
{
    
    public function create(){
        
        // $medicineList=DB::table('medicines')
        //                 ->groupBy('country')
        //                 ->get();
        $man=5;
        $pet=Pets::all();
        $medicine=Medicine::all();
        

        
        return view('petprofile.create1',['pet'=>$pet,'man'=>$man,'medicine'=>$medicine]);
    }


    public function store(Request $request)
    {
        switch ($request->input('action')) {
            case 'save':
            $post =new Pets;
            $post->colour=$request->input('title');
            $post->species=$request->input('specialNote');
            $post->save();
            return redirect('/create1');
            
            case 'add':
            $record=new reportMedicine;
            $record->type=$request->input('x');
            $record->quantityOfIssue=$request->input('quantity');
            return redirect('/create1');
            
                break;
    
            case 'advanced_edit':
                // Redirect to advanced edit
                break;
        }         
    
}
}