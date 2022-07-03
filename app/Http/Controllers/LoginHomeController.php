<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginHomeController extends Controller
{
   public function index()
   {
       return view('login');
   }

   public function postLogin(Request $request)
   { 
        $username = $request->uname1;
        $password = md5($request->pwd1);
        
        $usr =  DB::table('tb_user')->where('username', $username)->where('password', $password)->where('role_id', 2)->get();

        $cek = $usr->count();

        if($cek > 0){
            session_start();
            $_SESSION['status'] = "login";
            return redirect('/');
        }else{
            return redirect('/login'); 
            echo "<script>alert('Username atau Password salah!');</script>";
            
        }
   }

   public function postLogout()
   {
        session_start();
        session_destroy();
        return redirect('/');
   }
   
}
