@extends('layout/Dashboard')
@section('title','Admin Satu Kopi')
@section('judul','Edit Data')
@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @foreach($barang as $brg)

    <form action="/barang/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id_brg" value="{{ $brg->id_brg }}"> <br/>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_brg" value="{{ $brg->nama_brg }}">
            </div> 
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan" value="{{ $brg->keterangan }}">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" value="{{ $brg->kategori }}">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="{{ $brg->harga }}">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" class="form-control" name="stok" value="{{ $brg->stok }}">
            </div> 

            <div class="form-group">
                <label>Gambar Produk</label><br>
                <input type="text" name="gambar" class="form-control" value="{{ $brg->gambar }}">
            </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

    </form>
    @endforeach
@endsection