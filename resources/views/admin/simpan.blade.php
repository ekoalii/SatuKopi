@extends('layout/Dashboard')
@section('title','Admin Satu Kopi')
@section('judul','Simpan Barang')
@section('content')

<h3 class="my-4">Data Yang Di Input : </h3>

<table class="table table-bordered table-striped">
    <tr>
        <td style="width:150px">Nama</td>
        <td>{{ $data->nama_brg }}</td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td>{{ $data->keterangan }}</td>
    </tr>
    <tr>
        <td>Kategori</td>
        <td>{{ $data->kategori }}</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>{{ $data->harga }}</td>
    </tr>
    <tr>
        <td>Stok</td>
        <td>{{ $data->stok }}</td>
    </tr>
    <tr>
        <td>Gambar Produk</td>
        <td>{{ $data->gambar }}</td>
    </tr>
</table>

<a href="/barang" class="btn btn-primary">Kembali</a>

@endsection