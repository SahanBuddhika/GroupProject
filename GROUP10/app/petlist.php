<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petlist extends Model
{
    //

    public function clients(){
        return $this->belongsTo('App\Clients');
    }
}
