<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
   public function index()
   {
       return view('register');
   }

   public function simpan(Request $request)
    {
        DB::table('tb_user')->insert([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => md5($request->password_1),
            'role_id' => 2
        ]);
        return view('/login');
    }
   
}
