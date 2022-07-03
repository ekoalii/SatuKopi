@extends('layout/Main')
@section('title','Satu Kopi | kategori')
@section('content')
<div class="container">
    <br>
    <br>
    <br>
    <h1>Minuman</h1>
    <div class="row">
        @foreach ($minuman as $brg)
            <div class="card ms-5 mb-5" style="width: 17rem;">
                <img src="/upload/{{ $brg->gambar }}" class="card-img-top mt-2" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1">{{ $brg->nama_brg }}</h5>
                    <small>{{ $brg->keterangan }}</small><br>
                    <span class="badge rounded-pill bg-danger">Rp {{ number_format($brg->harga, 0,',','.') }}</span>
                    <a href="home/tambah/{{$brg->id_brg}}" class="btn btn-sm btn-primary mt-1">Tambah ke Keranjang</a>
                    <a href="/detail/{{$brg->id_brg}}" class="btn btn-sm btn-success mt-1">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection