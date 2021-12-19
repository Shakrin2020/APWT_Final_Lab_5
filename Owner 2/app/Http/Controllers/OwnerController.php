<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Houseowner;
use App\Models\WantedPost;

class OwnerController extends Controller
{
public function details(){
                           
    return view('pages.owners.ownerDash');
}

public function create(){
    return view('pages.owners.create');
}
public function createSubmit(Request $request){

    //using class validate method

    $this->validate(
        $request,
        [
            'uname'=>'required|min:3',
            'name'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'address'=>'required',

        ],
        [
            'uname.required'=>'Please put owner name',
            'uname.min'=>'Name must be greater than 2 characters'
        ]
    );

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

public function edit(Request $request){
    //
    $id = $request->h_id;
    
    $owner = Houseowner::where('h_id',$id)->first();
   
    return view('pages.owners.edit')->with('owner', $owner);

}

public function editSubmit(Request $request){

    $var = Houseowner::where('h_id',$request->h_id)->first();
    $var->h_uname= $request->h_uname;
    $var->h_name= $request->h_name;
    $var->h_password= $request->h_password;
    $var->h_phone= $request->h_phone;
    $var->h_email= $request->h_email;
    $var->h_dob= $request->h_dob;
    $var->h_gender= $request->h_gender;
    $var->h_address= $request->h_address;
   
    $var->save();
    return redirect()->route('owners.ownerDash');

}
       public function delete(Request $request){

   
        $var = Houseowner::where('h_id',$request->h_id)->first();
        $var->delete();
        
        // return redirect()->route('owners.ownerDash');

        return 'deleted!';
        }

        public function APIreg(Request $request){
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
            return response()->json($var, 201);
        }
    

}




