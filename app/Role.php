<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = ['name'];

    function user(){
        return $this->hasOne('App/User','role_id');
    }
}
