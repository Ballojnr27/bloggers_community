<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        return view('blogs.index', compact('user'));
       
      
    }

    public function profile(){
        
        $user = Auth::user();
  
        return view('blogs.profile', compact('user'));
           
        }
  
        public function edit_profile(){
              $user = Auth::user();
  
        return view('blogs.edit_profile', compact('user'));      
        }
  
        public function updateProfile(Request $request){
              $user = Auth::user();
  
              $request->validate([
                    'firstname' => 'required|string|max:255',
                    'lastname' => 'required|string|max:255',
                    'username' => 'required|string|max:255',
                    'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:1999',
                    'email' => 'required|email|unique:users,email,' . $user->id,
              ]);
  
              $profileImage = null;

              if (isset($request['profile_image'])) {
                  $profileImage = $request['profile_image']->store('profile_images', 'public');
              }
              
               
  
              $user->firstname=$request->input('firstname');
              $user->lastname=$request->input('lastname');
              $user->username=$request->input('username');
              $user->email=$request->input('email');
              $user->profile_image=$profileImage;
  
              $user->save();
              
              return redirect()->route('blogs.profile')->with('success', 'Profile updated successfully');
        }
   
       
  
      
  
}
