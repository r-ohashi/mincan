<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        
        return view('welcome', [
            'posts' => $posts,
        ]);
    }
    
    public function store(Request $request)
    {
        $request->user()->posts()->create([
            'title' => $request->title,
            'style' => $request->style,
            'age' => $request->age,
            'content' => $request->content,
        ]);
        
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $post = Posts::find($id);
        
        if (\Auth::id() === $post->user_id){
            $post->delete();
        }
        
        return redirect ('/');
    }
    
    public function create()
    {
        $post = new Posts;
        
        return view('posts.create', [
            'post' => $post,
        ]);
    }
    
}
