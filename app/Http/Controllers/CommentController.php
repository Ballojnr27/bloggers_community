<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(){
            
        return view('blogs.comment');
   }
   
   public function store_comment(){
         $blog = Blog::all();
   
   
         $comment = new Comment();
    
        $comment->post_id = 2;
        $comment->comment = request('comment');
        
        
    
        $comment->save();
        
    
        return redirect()->route('blogs.show');
   }

   /*public function store_comment(Request $request)
{
   

    Comment::create([
        'comment' => $request->input('comment'),
        'post_id' => $request->input('post_id'),
    ]);

    return redirect()->back()->with('success', 'Comment posted successfully!');
}*/
  
}
