<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller{

    public function index()
    {
        session_start();

        if(!$_SESSION){
        return redirect()->route('login');
        }

        $invoice = DB::table('tb_invoice')->get();

        return view('admin/Invoice', ['invoice' => $invoice]);    
    }

    public function detail($id_invoice)
    {
        $invoice = DB::table('tb_invoice')->where('id', $id_invoice)->get();
        $pesanan = DB::table('tb_pesanan')->where('id_invoice', $id_invoice)->get();

        $jumlah = DB::table('tb_pesanan')->where('id_invoice', $id_invoice)->sum('harga');

        return view('admin/detailInvoice', ['pesanan' => $pesanan], ['jumlah' => $jumlah]);    
    }

}