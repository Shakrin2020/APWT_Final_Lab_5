<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Add;
use App\Models\Houseowner;

class AddController extends Controller
{
    public function addList(){

        $adds = Add:: all();
        return view('pages.adds.addlist')->with('adds', $adds);
    }

    public function APIList(){

        return  Add:: all();
        
    }
    
}
