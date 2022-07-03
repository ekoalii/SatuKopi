<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = DB::table('tb_keranjang')->get();

        $total = DB::table('tb_keranjang')->sum('price');
        return view('keranjang', ['keranjang' => $keranjang], ['total' => $total]);    
    }

    public function tambah($id_barang)
    {
        $barang = DB::table('tb_barang')->where('id_brg', $id_barang)->get();
        
        foreach ($barang as $brg) {
            DB::table('tb_keranjang')->insert([
                'id' => $brg->id_brg,
                'qty' => 1,
                'price' => $brg->harga,
                'name' => $brg->nama_brg
            ]);
        }
        return back();
    }

    public function hapus()
    {
        DB::table('tb_keranjang')->delete();

        return redirect('/keranjang');
    }
    
}
