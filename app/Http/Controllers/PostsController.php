<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        
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
            'place' => $request->place,
            'date1' =>$request->date1,
            'date2' =>$request->date2,
            'content' => $request->content,
        ]);
        
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $post = Post::find($id);
        
        if (\Auth::id() === $post->user_id){
            $post->delete();
        }
        
        return redirect ('/');
    }
    
    public function create()
    {
        $post = new Post;
        
        return view('posts.create', [
            'post' => $post,
        ]);
    }
    
    public function show($id)
    {
        $post = Post::find($id);
        
        return view('posts.show',[
            'post' => $post,
        ]);
    }
    
}
