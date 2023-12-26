<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

 public function create(){
            
     return view('blogs.create');
}

public function store(){
      $user = Auth::user();


      $blog = new Blog();
 
     $blog->username = $user->username;
     $blog->tittle = request('tittle');
     $blog->content = request('content');
     
 
     $blog->save();
     
 
     return redirect()->route('blogs.show');
}

public function show(){
      $user = Auth::user();

      $blogs = Blog::where('username', $user->username)->orderBy('created_at', 'desc')->get();

      return view('blogs.my_blogs', [
            'blogs' => $blogs  
          ]);

}

public function destroy($id){

      $blog = Blog::findOrFail($id);
      $blog->delete();
   
      return redirect('/my_blogs');
   
   }

public function showall(){
      
       $blogs = Blog::orderBy('created_at', 'desc')->get();

      return view('blogs.blog_feed', [
            'blogs' => $blogs  
          ]);

}
   
    
         
}
