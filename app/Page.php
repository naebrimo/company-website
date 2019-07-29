<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];

    public function carousels()
    {
        return $this->hasMany('App\Carousel')->where('active', TRUE);
    }

    public function navlinks()
    {
        return $this->hasMany('App\Navlink')->where('active', TRUE);
    }
}
