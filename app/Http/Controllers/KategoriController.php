<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori');    
    }

    public function makanan()
    {
        $makanan = DB::table('tb_barang')->where('kategori', 'Makanan')->get();

        return view('k_makanan', ['makanan' => $makanan]);    
    }

    public function minuman()
    {
        $minuman = DB::table('tb_barang')->where('kategori', 'Minuman')->get();

        return view('k_minuman', ['minuman' => $minuman]);    
    }
    
}
