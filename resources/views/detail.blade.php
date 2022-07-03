@extends('layout/Main')
@section('title','Satu Kopi | detail')
@section('content')
<div>
    <br>
    <br>
    <div class="container">
    <br><br><br>

    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
        @foreach ($detail as $brg)
            <div class="row">
                <div class="col-md-4">
                    <img src="/upload/{{ $brg->gambar }}" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong>{{ $brg->nama_brg }}</strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong>{{ $brg->keterangan }}</strong></td>
                        </tr>

                        <tr>
                            <td>Kategori</td>
                            <td><strong>{{ $brg->kategori }}</strong></td>
                        </tr>

                        <tr>
                            <td>Stok</td>
                            <td><strong>{{ $brg->stok }}</strong></td>
                        </tr>

                        <tr>
                            <td>Harga</td>
                            <td><strong>Rp {{ number_format($brg->harga, 0,',','.') }}</strong></div></td>
                        </tr>
                    </table>
                    <a href="/home/tambah/{{$brg->id_brg}}" class="btn btn-sm btn-primary mt-1">Tambah ke Keranjang</a>
                    <a href="/home" class="btn btn-sm btn-danger">Kembali</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
</div>
@endsection