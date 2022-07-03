@extends('layout/Main')
@section('title','Satu Kopi | pembayaran')
@section('content')
<div class="container">
    <br><br><br>  
    
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <h4>Total Belanja Anda : Rp {{number_format($total, 0,',','.')}}<h4>
            </div>
            <br><br>

            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form method="post" action="/pembayaran/proses">
            {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control mt-1" value="{{ old('nama') }}">
                    </div>

                    <div class="form-group mt-3">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control mt-1" value="{{ old('alamat') }}"> 
                    </div>

                    <div class="form-group mt-3">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control mt-1" value="{{ old('no_telp') }}">
                    </div>

                    <div class="form-group mt-3">
                        <label>Jasa Pengiriman</label>
                        <select class="form-control mt-1">
                            <option>GOJEK</option>
                            <option>GRAB</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label>Pilih Bank</label>
                        <select class="form-control mt-1">
                            <option>OVO - XXXXXXXXXX</option>
                            <option>GOPAY - XXXXXXXXXX</option>
                            <option>BCA - XXXXXXXXXX</option>
                            <option>BNI - XXXXXXXXXX</option>
                            <option>BRI - XXXXXXXXXX</option>
                            <option>MANDIRI - XXXXXXXXXX</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-sm btn-primary mt-3">Pesan</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection