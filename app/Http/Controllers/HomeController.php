<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $barang = DB::table('tb_barang')->get();

        return view('home', ['barang' => $barang]);    
    }
}
