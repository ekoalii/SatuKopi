@extends('layout/Dashboard')
@section('title','Admin Satu Kopi')
@section('judul','Tambah Barang')
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

<form action="/barang/simpan" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_brg" value="{{ old('nama_brg') }}">
            </div> 
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan" value="{{ old('keterangan') }}">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" id="kategori" name="kategori">
                  <option value="Makanan">Makanan</option>
                  <option value="Minuman">Minuman</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="{{ old('harga') }}">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" class="form-control" name="stok" value="{{ old('stok') }}">
            </div> 

            <div class="form-group">
                <label>Gambar Produk</label><br>
                <input type="file" name="gambar" class="form-control" value="{{ old('gambar') }}">
            </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>

    </form>

@endsection