<?php

namespace App\Http\Controllers;
use App\Models\Report;

use Illuminate\Http\Request;

class ReportAPIController extends Controller
{
    public function reportSubmit(Request $request){

        $var = new Report();
        $var->rp_description= $request->desc ;
        $var->rp_submittedby= 4;
       
        $var->save();
        return "Reported!";
    
    }
}
