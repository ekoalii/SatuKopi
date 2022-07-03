<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   public function index()
   {
       return view('admin/login');
   }

   public function postLogin(Request $request)
   {
        $username = $request->uname1;
        $password = md5($request->pwd1);
        
        $usr =  DB::table('tb_user')->where('username', $username)->where('password', $password)->where('role_id', 1)->get();

        $cek = $usr->count();

        if($cek > 0){
            session_start();
            $_SESSION['status'] = "login";
            return redirect('/dashboard');
        }else{
            return redirect('/admin/login'); 
            echo "<script>alert('Username atau Password salah!');</script>";
            
        }
   } 

   public function postLogout()
   {
        session_start();
        session_destroy();
        return redirect('admin/login');
   }
}
