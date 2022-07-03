<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    
   public function index()
   {
        session_start();

        if(!$_SESSION){
            return redirect()->route('loginUser');
        }
        
        $total = DB::table('tb_keranjang')->sum('price');

        return view('pembayaran', ['total' => $total]);
   }

   public function proses(Request $request)
   {
        date_default_timezone_set('Asia/Jakarta');

        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $invoice = array (
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
        );
        DB::table('tb_invoice')->insert($invoice);

        $id_invoice = DB::table('tb_invoice')->latest('id')->first();

        $keranjang = DB::table('tb_keranjang')->get();

        foreach($keranjang as $item){
            $data = array(
                'id_invoice' => $id_invoice->id,
                'id_brg' => $item->id,
                'nama_brg' => $item->name,
                'jumlah' => $item->qty,
                'harga' => $item->price,
            );
            DB::table('tb_pesanan')->insert($data);
        }
        DB::table('tb_keranjang')->delete();

        return redirect('/pembayaran/selesai');
   }

   public function selesai()
   {
        return view('pembayaran_selesai');
   }
   
}
