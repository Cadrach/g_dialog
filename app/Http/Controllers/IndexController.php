<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\World;

class IndexController extends Controller{

    public function getIndex(){

        $world = World::with('stories', 'characters')->find(1);

        print_r($world->toArray());
        return $world;
    }

}
