<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ForgotPassController extends Controller
{
    public function showResetForm(){
            
        return view('for_pass');
   }

 
//  private $user;

  public function resetPassword(Request $request)
  {
      $request->validate([
          'email' => 'required|email|exists:users,email',
          'security_ques' => 'required',
          'password' => 'required|confirmed|min:8',
        ]);

      $user = User::where('email', $request->input('email'))->first();

      //var_dump($this->user);
      

      if ($user->security_ques === $request->security_ques ) {
          
        $user->password = Hash::make($request->input('password'));
        $user->save();
          // Send notification to the user

          return redirect()->route('login')->withInput()->withErrors(['email' => 'Password changed successfully, please login with your new password.']);
      }

      return back()->withInput()->withErrors(['security_ques' => 'Your answer is incorrect.']);
 
    }
   
  }

