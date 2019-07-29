<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navlink extends Model
{
    protected $guarded = [];

    public function page()
    {
        return $this->belongsTo('App\User');
    }

    public function articles()
    {
        return $this->hasMany('App\Article')->where('active', TRUE);
    }
}
