<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
 public function profileView(Request $request){
    //checking the user

    $user = Auth() -> user();
    return view ('profileView',['user'=>$user]);


 }
      public function profileUpdate(Request $request){
 // Validate the input data
       $request->validate([
        'name' => 'required|string|max:30',
         'email' => 'required|email|max:30',
]);

       // Get the authenticated user
       $user = Auth::user();

       // Update the user's profile data
    //    $user->update ([

    //        'name' => $request->input('name'),
    //        'email' => $request->input('email'),
    //        'password' => $request->input('password')
           
    //    ]);
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->save();
        

  


    return redirect()->route('profile')->with('success', 'Profile updated successfully!'); 



      }
    
 
}
