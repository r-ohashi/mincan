<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use App\Comment;
use App\Post;
use App\User;

class CommentsController extends Controller
{
    public function index($id)
    {
        $post = Post::find($id);
        $comments = Comment::orderBy('created_at', 'desc')->where('post_id', $post->id)->paginate(10);
        
        return view('comments.index', [
            'comments' => $comments,
            'post' => $post,
        ]);
    }
    
    public function store(Request $request)
    {
         //$this->validate($request, [
            //'comment_content' => 'required',
        //]);
        
        $post = Post::find($request->query("post_id"));
        $request->user()->comments()->create([
            'comment_content' => $request->comment_content,
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
        $post = Post::find($request->query("post_id"));
        
       
    }
}
