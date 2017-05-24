<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\World;

class ApiController extends Controller{

    public function getWorld($id = 1){
        $world = World::with(
            'stories',
            'stories.objectives',
            'characters',
            'characters.attributes',
            'characters.attributes.attribute'
        )->find($id);

//        echo '<pre>';
//        print_r($world->toArray());
        return $world;
    }

}
