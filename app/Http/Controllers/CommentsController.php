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
            'post' => $post
        ]);
    }
    
    public function store(Request $request)
    {
        $request->user()->comments()->create([
            'content' => $request->content,
            'post_id' => $request->post_id,
        ]);
        
        return redirect('comments.index');
    }
    
    public function destroy($id)
    {
        $post = Comment::find($id);
        
        if (\Auth::id() === $comment->user_id){
            $comment->delete();
        }
        
        return redirect ('comments.index');
    }
    
    public function create($id)
    {
        $comment = new Comment;
        $post = Posts::find($id);
        
        return view('comments.create', [
            'comment' => $comment,
            'post' => $post,
        ]);
    }
}