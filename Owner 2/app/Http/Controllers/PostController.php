<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Houseowner;
use App\Models\WantedPost;

class PostController extends Controller
{
    public function wantedPost(){
        return view('pages.owners.wantedpost');
    }
    
    public function wantedPostSubmit(Request $request){
        $this->validate(
            $request,
            [
                'type'=>'required',
                'budget'=>'required',
                'desc'=>'required',
            ],
        );
    
        $var = new WantedPost();
    
        $var->wp_type= $request->type;
        $var->wp_budget= $request->budget;
        $var->wp_description= $request->desc;
        $var->wp_posted_by= $request->session()->get('id');
        
        $var-> save();
        return "Added Successfully!";      
    }

    public function showPost(Request $request){
       // $post = WantedPost::where('wp_posted_by',$request->session()->get('id'))
       
       $post = WantedPost::where('wp_posted_by',$request->session()->get('id'))->first();

        if($post){
            $request->session()->put('wp_id',$post->wp_id);
            $request->session()->put('type',$post->wp_type);
            $request->session()->put('budget',$post->wp_budget);
            $request->session()->put('desc',$post->wp_description);
            
            return view('pages.owners.showPost');
        }

        return "No post yet!";
    }
}