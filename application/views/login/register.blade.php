@extends('login/template')
@section('title','Register')
@section('icerik')
<div class="col-lg-12">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Welcome</h1>
        </div>
        <form action="{{base_url('login/register')}}" method="post" class="user">
            <input type="hidden" id="sonucDeger" value="{{@$hata}}" />                     
            <div class="form-group">
                <input type="txt" class="form-control form-control-user" name="name" value="{{set_value('name')}}" placeholder="Enter Name...">
            </div>
            <div class="form-group">
                <input type="txt" class="form-control form-control-user" name="lastname" value="{{set_value('lastname')}}" placeholder="Enter Lastname...">
            </div>
            <div class="form-group">
                <input type="txt" class="form-control form-control-user" name="kadi" value="{{set_value('kadi')}}" placeholder="Enter User Name...">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" name="password" value="{{set_value('password')}}" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" name="confirm_password" value="{{set_value('confirm_password')}}" placeholder="Confirm Password">
            </div> 
            <input type="submit" name="register" class="btn btn-primary btn-user btn-block" value="Register">
        </form>        
    </div>
</div>
@endsection