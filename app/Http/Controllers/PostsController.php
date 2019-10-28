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
        $this->validate($request, [
            'title' => 'required',
            'style' => 'required',
            'ages' =>  'required',
            'places' => 'required',
            'date1' =>'required',
            'date2' =>'required',
            'content' => 'required|max:1000',          
            'date1' => 'after:yesterday',
            'date2' => 'after:yesterday',
            'date1' => 'before:data2',
        ]);        

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
 
    public function search(Request $request) {
   
    	$style_query = $request->query("style_keyword");
    	$age_query = $request->query("age_keyword");
    	$place_query = $request->query("place_keyword");
    	$date1_query = $request->query("date1_keyword");
    	$date2_query = $request->query("date2_keyword");
    	
    	$query = Post::query();
    
    	if (!empty($style_query)) {
    		$query->where('style', 'LIKE', '%'.$style_query.'%');
    	}
    	if (!empty($age_query)) {
    		$query->where('age', 'LIKE', '%'.$age_query.'%');
    	}
    	if (!empty($place_query)) {
    		$query->where('place', 'LIKE', '%'.$place_query.'%');
    	}
    	if (!empty($date1_query)) {
    		$query->whereDate('date1', '>=', $date1_query);
    	}
    	if (!empty($date2_query)) {
    		$query->whereDate('date2', '<=', $date2_query);
    	}
    	
    	$posts = $query->paginate(10);
    
            return view('welcome',[
        	'posts' => $posts,
        ]);
    }
}
