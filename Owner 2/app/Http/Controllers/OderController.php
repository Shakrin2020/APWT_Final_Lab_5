<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orderlist;
use App\Models\Add;

class OderController extends Controller
{
    public function addtoorder(Request $request){
            $order = Add::where('add_id',$request->id)->first();

            $request->session()->put('add_id',$request->id);
            $request->session()->put('add_name',$order->add_name);
            $request->session()->put('add_type',$order->add_type);
            $request->session()->put('add_desc',$order->add_desc);
            $request->session()->put('add_price',$order->add_price);
            
            $var = new Orderlist();

            $var-> o_id = Session::get('add_id');
            $var-> o_name = Session::get('add_name');
            $var-> o_type = Session::get('add_type');
            $var-> o_description = Session::get('add_desc');
            $var-> o_price = Session::get('add_price');
            $var-> o_orderd_by = Session::get('id');
            
            return redirect()->route('oder.ownerOrder');

        }

    
}