<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.adminProfile');
    }

    public function profile()
    {

        return view('admin.adminEditPofile');
    }

    public function update(User $user, Request $request)
    {   
      


        
        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now()
        ]);

    

        // return $this->success('profile','Profile updated successfully!');
        return view('admin.adminProfile');
    }
}
