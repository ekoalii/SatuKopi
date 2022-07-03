@extends('layout/Blank')
@section('title','Satu Kopi | login')
@section('blank')
<div class="container col-md-4 text-center" style="margin-top:250px;">
    <div class="card">
        <div class="card-body">
            <h1>Login</h1>
        <form method="POST" action="/prosesLogin">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="uname1" id="uname1" required="" placeholder="Username">
                <div class="invalid-feedback">Oops, you missed this one.</div>
            </div>
            <div class="form-group mt-2">
                <input type="password" class="form-control form-control-user" name="pwd1" id="pwd1" required="" autocomplete="new-password" placeholder="Password">
                <div class="invalid-feedback">Enter your password too!</div>
            </div>
            <button type="submit" class="btn btn-danger btn-user btn-block mt-2" id="btnLogin">Login</button>
        </form>
        <div class="text-center">
            <div class="row mt-4">
                <h6>belum punya akun? <a class="small" href="/register">Register!</a></h6>
            </div>
            <a class="small" href="/admin/login">Admin?</a>
        </div>
  </div>
</div>

</div>
@endsection