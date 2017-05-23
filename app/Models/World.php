<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class World extends Model
{
    public function stories()
    {
        return $this->hasMany('App\Models\Story');
    }

    public function characters()
    {
        return $this->hasMany('App\Models\Character');
    }
}
