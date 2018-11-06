<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    //

    public function pets(){
        return $this->hasMany('App\petlist');
    }
}
