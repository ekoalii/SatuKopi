@extends('layout/Main')
@section('title','Satu Kopi')
@section('content')
<div>
    <br>
    <br>
    <div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner"  style="height: 300px">
        <div class="carousel-item active" style="height: 300px">
        <img src="img\carousel1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>SATU KOPI</h5>
            <p>Rasa Adalah Tujuan.</p>
        </div>
        </div>
        <div class="carousel-item" style="height: 300px">
        <img src="img\carousel2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>SATU KOPI</h5>
            <p>Enjoy Your Meal.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <div class="container">
        <br>
        <h1>Products</h1>
        <br>
        <div class="row">

            @foreach ($barang as $brg)
            <div class="card ms-5 mb-5" style="width: 17rem;">
                <img src="/upload/{{ $brg->gambar }}" class="card-img-top mt-2" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1">{{ $brg->nama_brg }}</h5>
                    <small>{{ $brg->keterangan }}</small><br>
                    <span class="badge rounded-pill bg-danger">Rp {{ number_format($brg->harga, 0,',','.') }}</span>
                    <a href="home/tambah/{{$brg->id_brg}}" class="btn btn-sm btn-primary mt-1">Tambah ke Keranjang</a>
                    <a href="home/detail/{{$brg->id_brg}}" class="btn btn-sm btn-success mt-1">Detail</a>
                </div>
            </div>
            @endforeach
        
        </div>
    </div>
</div>
</div>
@endsection