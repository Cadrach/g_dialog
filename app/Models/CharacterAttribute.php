<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharacterAttribute extends Model
{
    public function attribute()
    {
        return $this->hasOne('App\Models\Attribute', 'id');
    }

    public function target()
    {
        return $this->hasOne('App\Models\Character', 'target_id');
    }
}
