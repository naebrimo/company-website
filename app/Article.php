<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function navlink()
    {
        return $this->belongsTo('App\Navlink');
    }
}
