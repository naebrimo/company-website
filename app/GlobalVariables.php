<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalVariables extends Model
{
    use App\Traits\UseUuid;

    protected $guarded = [];
}
