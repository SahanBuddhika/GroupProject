<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Clients;
use App\Medicine;
use App\reportMedicine;
use App\treatement_records;

class PostToPets extends Controller
{
    public function show($id)
    {
       
        $pets= Pets::find($id);
        
        // return view('petprofile.petprofile1')->with('pets',$pets);
        
        

        
        return view('petprofile.create',['pets'=>$pets,'man'=>$man]);
    }

    public function create(){
        
        // $medicineList=DB::table('medicines')
        //                 ->groupBy('country')
        //                 ->get();
        $man=5;
        $pet=Pets::all();
        $medicine=Medicine::all();
        

        
        return view('petprofile.create',['pet'=>$pet,'man'=>$man,'medicine'=>$medicine]);
    }

    public function store(Request $request){
      $post =new treatement_records;
      $post->Title=$request->input('title');
      $post->discription=$request->input('specialNote');
      $post->quantity=$request->input('quantity');
      $post->medicine=$request->input('inputGroupSelect01');
      $post->save();

      
      return redirect('/create');
    
        
    }
    
    // public function store1(Request $request){
    //     $record=new reportMedicine;
    //     $record->type=$request->input('x');
    //     $record->quantityOfIssue=$request->input('quantity');
        
    //     return redirect('/create');
      
          
    //   }


//       public function store(Request $request)
// {
//     switch ($request->input('action')) {
//         case 'save':
//         $post =new Pets;
//         $post->colour=$request->input('title');
//         $post->species=$request->input('specialNote');
//         $post->save();
  
        
        

//             break;

//         case 'add':
//              $record=new reportMedicine;
//         $record->type=$request->input('x');
//         $record->quantityOfIssue=$request->input('quantity');
        
//         return redirect('/create');
      
//             break;

//         case 'advanced_edit':
//             // Redirect to advanced edit
//             break;
//     }
// }


  

}
