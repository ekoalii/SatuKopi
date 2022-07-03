<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index($id_barang)
    {
        $detail = DB::table('tb_barang')->where('id_brg', $id_barang)->get();

        return view('detail', ['detail' => $detail]);    
    }
}
