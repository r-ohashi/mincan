<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Posts;

class CommentsController extends Controller
{
    public function index($id)
    {
        $comments = Comment::all();
        $post = Posts::find($id);
        
        return view('comments.index', [
            'comments' => $comments,
            'post' => $post,
        ]);
    }
    
    public function store(Request $request)
    {
        $post = Posts::find($request->query("post_id"));
        $request->user()->comments()->create([
            'content' => $request->content,
            'post_id' => $request->post_id,
        ]);
        
        return redirect()->route('comments.index', ['id' => $post->id]);
    }
    
    public function destroy($id)
    {
        $comment = Comment::find($id);
        
        if (\Auth::id() === $comment->user_id){
            $comment->delete();
        }
        
        return back();
    }
    
    public function create(Request $request)
    {
        $comment = new Comment;
        $post = Posts::find($request->query("post_id"));
        
       
    }
}
