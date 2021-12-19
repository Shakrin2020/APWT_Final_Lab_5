<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Houseowner;
use App\Models\HouseownersToken;
use Illuminate\Support\Str;
use DateTime;

class LoginAPIController extends Controller
{
    //
    public function  login(Request $req){

        $owner = Houseowner::where('h_uname',$req->uname)->where('h_password', $req->password)->first();
        
        if($owner){
            $api_token = Str::random(64);
            $token = new HouseownersToken();
            $token->userid = $owner->h_id;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            $token->save();
            return $token;
        }
        return "No user found";

    }

  /*  public function  logout(){

        $check_token = HouseownersToken::where('token',$token)->first();
       
        $check_token->expired_at = new DateTime();
        
        return "logged out";
    } */  
}
    


