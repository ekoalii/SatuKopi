<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
   {
    session_start();

    if(!$_SESSION){
      return redirect()->route('login');
    }
       return view('admin/index');
   }
   
}
