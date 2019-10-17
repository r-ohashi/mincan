<?php

namespace App\Http\Controllers;

use Request;
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
            'age' =>  implode(",", $request->ages),
            'place' => implode(",", $request->places),
            'date1' =>$request->date1,
            'date2' =>$request->date2,
            'content' => $request->content,
            
        ]);
        
        return redirect ('/');
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
 
    public function search() {
   
    	$query = Request::get('q');
    
    	if ($query) {
    		$posts = Post::where('title', 'LIKE', '%'.$query.'%')->paginate(10);
    	}else{
    		$posts = Post::paginate(10);
    	}
    
            return view('welcome',[
        	'posts' => $posts,
        ]);
    }
}
