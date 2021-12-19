<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Houseowner;

class RegisterAPIController extends Controller
{
    public function  register(Request $request){
      
        $var = new Houseowner();

        $var->h_uname= $request->uname;
        $var->h_name= $request->name;
        $var->h_password= $request->password;
        $var->h_phone= $request->phone;
        $var->h_email= $request->email;
        $var->h_dob= $request->dob;
        $var->h_gender= $request->gender;
        $var->h_address= $request->address;
       
        $var-> save();
        return "Added Successfully!";   
    
    }
}