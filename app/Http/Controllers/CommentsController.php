<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        
        return view('comment.index', [
            'comments' => $comments,
        ]);
    }
    
    public function store(Request $request)
    {
        $request->user()->comments()->create([
            'content' => $request->content,
        ]);
        
        return redirect('posts.show');
    }
    
    public function destroy($id)
    {
        $post = Comment::find($id);
        
        if (\Auth::id() === $comment->user_id){
            $comment->delete();
        }
        
        return redirect ('posts.show');
    }
    
    public function create()
    {
        $post = new Comment;
        
        return view('comments.create', [
            'comment' => $comment,
        ]);
    }
}
