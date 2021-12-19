<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Houseowner;
use App\Models\Report;


class ReportController extends Controller
{
    public function report(Request $request){

        return view('pages.owners.report');
    
    }
    
    public function reportSubmit(Request $request){

        $var = new Report();
        $var->rp_description= $request->desc ;
        $var->rp_submittedby= $request->session()->get('id');
       
        $var->save();
        return "Reported!";
    
    }
}
