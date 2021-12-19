<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add;

class AddAPIController extends Controller
{
    //
    public function list(){
        $adds = Add::all();
        return $adds;
    }
}
