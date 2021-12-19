<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

use App\Models\Houseowner;
use App\Models\WantedPost;

class LoginController extends Controller
{
    public function Login(){

        return view('login');
    }
    public function loginSubmit(Request $request){
        $owner = Houseowner::where('h_uname',$request->uname)
                            ->where('h_password', $request->password)
                            ->first();
        if($owner){
            $request->session()->put('user',$owner->h_name);
            $id =   $request->session()->put('id',$owner->h_id);
            $uname =  $request->session()->put('uname',$owner->h_uname);
            $request->session()->put('phone',$owner->h_phone);
            $request->session()->put('email',$owner->h_email);
            $request->session()->put('dob',$owner->h_dob);
            $request->session()->put('gender',$owner->h_gender);
            $request->session()->put('address',$owner->h_address);

            if ($request->remember) {
                setcookie('remember',$request->uname, time()+36000);
                Cookie::queue('uname',$request->uname."abcde",time()+60);
            }
            
            return redirect()->route('owners.ownerDash');
        }

        return back();
    }
        public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
