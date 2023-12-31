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
   
   public function store_comment(){
    $user = Auth::user();    
    $blog = Blog::where('username', $user->uswrname)->get();
         
   
   
         $comment = new Comment();
    
        $comment->post_id = 23;
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
