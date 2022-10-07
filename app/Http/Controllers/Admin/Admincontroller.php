<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admincontroller extends Controller
{

    public function adminLogin(Request $request){

        $request->validate([
            'email'     => 'required|email|exists:admins,email',
            'password'  =>'required'
        ],[
            'email.exists'     => 'Admin does not exist please register',
        ]);


            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password] )){

                return redirect('admin/dashboard')->with('success','Login successful');

               }else{
               return redirect()->back()->with('error','Email and Password does not match');
            }


    }



    public function adminLogout (){

        Auth::guard('admin')->logout();

        return redirect('/');

    }
}
