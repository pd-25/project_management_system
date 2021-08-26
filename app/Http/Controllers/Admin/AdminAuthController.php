<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admins;


class AdminAuthController extends Controller
{
    //
    function login(){
        return view('admin.adminLogin');
    }

    function authLogin(Request $request){
       /*$request->validate([
           'email'=>'required|email',
           'password'=>'required'
       ]);*/
       $email = $request->post('email');
       $password = $request->post('password');


       $admin = Admins::where(['email'=>$email])->first();
       if($admin){
           if(Hash::check($password, $admin->password)){
               $request->session()->put('LoggedAdmin', $admin->id);
               return redirect('admin.dashboard');
           }else{
               return back()->with('fail', 'invailed password');
           }
       }else{
        return back()->with('fail', 'invailed email');
       }
    }
}
