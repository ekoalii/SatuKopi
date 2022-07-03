@extends('layout/Main')
@section('title','Satu Kopi | keranjang')
@section('content')
<div>
    <br>
    <br>
    <div class="container">
    <br><br>
    <h2>Keranjang Belanja</h2>

    <table class="table table-bordered table-striped table-hover ">
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>

        <?php $no =1; ?>
        @foreach ($keranjang as $keranjang)
        
        <tr>
            <td>{{ $no }} <?php $no++; ?></td>
            <td>{{$keranjang->name}}</td>
            <td>{{$keranjang->qty}}</td>
            <td>Rp {{number_format($keranjang->price, 0,',','.')}}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="3" class="text-center">TOTAL</td>
            <td align="left">Rp {{number_format($total, 0,',','.')}}</td>
        </tr>
    </table>

    <div align="right">
        <a href="/keranjang/hapus"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
        <a href="/home"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
        <a href="/pembayaran"><div class="btn btn-sm btn-success">Lanjutkan Pembayaran</div></a>
    </div>
</div>
</div>
@endsection