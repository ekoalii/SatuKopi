@extends('layout/Main')
@section('title','Satu Kopi | kategori')
@section('content')
<div>
    <br>
    <br>
    <div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <a href="kategori/makanan" style="text-decoration:none;">
            <div class="card">
            <img src="img\makanan.png" class="card-img-top" style="height: 450px;">
            <div class="card-body" style="color: black;">
                <h5 class="card-title">Makanan</h5>
                <p class="card-text">Daftar Makanan</p>
            </div>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="kategori/minuman" style="text-decoration:none;">
            <div class="card">
            <img src="img\minuman.png" class="card-img-top" style="height: 450px;">
            <div class="card-body" style="color: black;">
                <h5 class="card-title">Minuman</h5>
                <p class="card-text">Daftar Minuman</p>
            </div>
            </div>
        </a>
    </div>
    </div>
</div>
</div>
@endsection