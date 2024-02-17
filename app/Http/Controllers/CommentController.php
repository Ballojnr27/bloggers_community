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
            'body' => 'required',
        ]);

        $comment = new Comment([
            'user_id' => auth()->user()->id,
            'post_id' => $postId,
            'body' => $request->input('body'),
        ]);

       $comment->save();

        return redirect()->route('comments.show', $postId)->with('success', 'Comment submitted successfully');//back()->with('success', 'Comment added successfully!');
    }


    public function show_comment($postId)
    {
        
        $comments = Comment::with('user')->where('post_id', $postId)->orderBy('created_at', 'desc')->get();
       
        return view('blogs.comment', compact('comments'));
    }

    public function destroy_comment(Comment $comment){

        //$comment = Comment::findOrFail($postId);
        $comment->delete();
        return redirect()->back();
     
     }
  



}

  

