@extends('layout/Blank')
@section('title','Satu Kopi | register')
@section('blank')
<div class="container col-md-4 text-center" style="margin-top:250px;">
    <div class="card">
        <div class="card-body">
            <h1>Register</h1>
            <form method="POST" action="/register/simpan">
              {{ csrf_field() }}
              <div class="form-group">
                  <input required="" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama Anda" name="nama">
                  <div class="invalid-feedback">Oops, you missed this one.</div>
                </div>
                <div class="form-group mt-2">
                  <input required="" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username" name="username">
                  <div class="invalid-feedback">Oops, you missed this one.</div>
                </div>
                <div class="form-group row mt-2">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input required="" type="password" class="form-control form-control-user" id="password_1" placeholder="Password" name="password_1">
                    <div class="invalid-feedback">Oops, you missed this one.</div>
                  </div>
                  <div class="col-sm-6">
                    <input required="" type="password" class="form-control form-control-user" id="password_2" placeholder="Ulangi Password" name="password_2">
                    <div class="invalid-feedback">Oops, you missed this one.</div>
                  </div>
                </div>
                <button type="submit" class="btn btn-danger btn-user btn-block mt-4" >Register</button>
                
            </form>
        <div class="text-center">
            <div class="row mt-3">
                <h6>sudah punya akun? <a class="small" href="/login">Login!</a></h6>
            </div>
            <a class="small" href="/admin/login">Admin?</a>
        </div>
  </div>
</div>

</div>
@endsection