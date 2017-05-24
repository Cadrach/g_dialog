<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function attributes()
    {
        return $this->hasMany('App\Models\CharacterAttribute');
    }
}
