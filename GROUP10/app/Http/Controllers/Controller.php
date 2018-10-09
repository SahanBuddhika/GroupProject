<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function insert(Request $req)
    {
        $name = $req -> input('name');
        $quantity = $req -> input('quantity');
        $unitprice = $req -> input('unitprice');
        $expiredate = $req -> input('expiredate');
        $releventspecies = $req -> input('releventspecies');

        $data = array('name'=>$name,'quantity'=>$quantity,'unitprice'=>$unitprice,'expiredate'=>$expiredate,'releventspecies'=>$releventspecies);

        DB::table('addstock')->insert($data);
    }
}