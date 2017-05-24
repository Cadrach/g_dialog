<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\World;

class IndexController extends Controller{

    public function getIndex(){

        $world = World::with(
            'stories',
            'characters',
            'characters.attributes',
            'characters.attributes.attribute'
        )->find(1);

        echo '<pre>';
        print_r($world->toArray());
        return $world;
    }

}
