<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Threads extends Model
{
    //
    protected $guarded = [];

    public function creator()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
