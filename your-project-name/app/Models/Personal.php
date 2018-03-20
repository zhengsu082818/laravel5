<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    public function homeuser()
    {
        return $this->belongsTo('App\Models\Homeuser','pid','id');
    }
}
