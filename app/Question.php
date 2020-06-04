<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    //protected $table="questions";

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
