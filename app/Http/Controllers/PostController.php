<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('posts');
    }
    public function add(Request $request){
        // dd($request);
        $post = new Post;
        // 'project_id','name', 'location', 'latitude','longitude','exec','cost','timespan','goal','post_date'
        $post->title = $request->title; 
        $post->content = $request->content;
    
        $save = $post->save();
        // dd($save);
        if($save){
            return back()->with('success','post creation Successful');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
}