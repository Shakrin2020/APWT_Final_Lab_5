<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WantedPost;

class PostAPIController extends Controller
{
    public function showpost(){
        $posts = WantedPost::all();
        return $posts;
    }

    public function wantedPostSubmit(Request $request){
    
        $var = new WantedPost();
    
        $var->wp_type= $request->type;
        $var->wp_budget= $request->budget;
        $var->wp_description= $request->desc;
        $var->wp_posted_by= 4;
        
        $var-> save();
        return "Added Successfully!";      
    }
}
