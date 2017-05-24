<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\World;

class IndexController extends Controller{

    public function getIndex(){
        return view('index');
    }

}
