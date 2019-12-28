@extends('login/template')
@section('title','Login')
@section('icerik')
<div class="col-lg-2"></div>
<div class="col-lg-8">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
        </div>
        <form action="{{base_url('login')}}" method="post" class="user">
            <input type="hidden" id="sonucDeger" value="{{@$hata}}" />
            <div class="form-group">
                <input type="txt" class="form-control form-control-user" name="email" value="{{set_value('email')}}" placeholder="Enter User E-mail...">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" name="sifre" placeholder="Password">
            </div>
            <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="Login">
        </form>
        <hr>
    </div>
    <div class="col-lg-2"></div>
</div>
@endsection