<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //
    public function reply(){
       return $this->hasMany(Reply::class);
    }


    public function path(){
    	return '/threads/'.$this->id;
    }
}
 