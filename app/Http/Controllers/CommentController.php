<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\User;
use App\Http\Controllers\Auth\BlogController;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(){
            
        return view('blogs.comment');
   }


   
    public function store_comment(Request $request, $postId)
    {

        
        $request->validate([
            'body' => 'required|min:5',
        ]);

        $comment = new Comment([
            'user_id' => auth()->user()->id,
            'post_id' => $postId,
            'body' => $request->input('body'),
        ]);

        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully!');
    }


    public function show_comment($postId)
    {
        $comments = Comment::where('post_id', $postId)->get();
        $commenter = Comment::all();
       // $users = Auth::user()->where(['id', 3])->get();
       $users = User::where('id', $commenter->user_id)->get();
        
        return view('blogs.comment', compact('comments', 'users'));
    }



}

  

