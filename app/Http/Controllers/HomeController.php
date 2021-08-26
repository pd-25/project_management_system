<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     // user function start---

     public function index()
     {
         return view('index');
 
     }
 

    public function about_us()
    {
        return view('about-us');

    }

    public function portfolio()
    {
        return view('portfolio');

    }

    public function resume()
    {
        return view('resume');

    }

    public function service()
    {
        return view('service');

    }

    public function contact()
    {
        return view('contact');

    }

    //user function end---


    //admin function starts---
      //---
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    //----


  
    //----

    
    
//----

    public function notification()
    {
        return view('admin.notification');
    }
    //----
    
    public function userprofile()
    {
        return view('admin.userprofile');
    }
    //---


    public function tablelist()
{
    return view('admin.table-list');
}
//--

/*
public function projectmanagement()
{
    return view('admin.projectmanagement');
}*/
//--

public function rtl()
{
    return view('admin.rtl');
}
//--

public function login()
{
    return view('admin.adminlogin');
}

//admin function end ----


    
}


