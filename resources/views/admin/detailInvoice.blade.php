@extends('layout/Dashboard')
@section('title','Admin Satu Kopi')
@section('content')
<div class="container-fluid">
    <h4>Detail Pesanan </h4>

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>ID BARANG</th>
            <th>NAMA PRODUK</th>
            <th>JUMLAH PESANAN</th>
            <th>HARGA SATUAN</th>
        </tr>

    
        @foreach ($pesanan as $psn) 

        <tr>
            <td><?php echo $psn->id_brg ?></td>
            <td><?php echo $psn->nama_brg ?></td>
            <td><?php echo $psn->jumlah ?></td>
            <td><?php echo number_format($psn->harga,0,',','.') ?></td>
        </tr>

        @endforeach

        <tr>
            <td colspan="3" align="right">Grand Total</td>
            <td align="left">Rp. {{ number_format($jumlah,0,',','.') }}</td>
        </tr>

    </table>

    <a href="/invoice"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>
@endsection