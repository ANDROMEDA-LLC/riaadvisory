@extends('backend/template')
@section('title','Profile')
@section('css')
<link href="{{base_url('assets/backend')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="{{base_url('vendor/ckeditor/ckeditor')}}/ckeditor.js" type="text/javascript"></script>
<script src="{{base_url('assets/backend')}}/js/custom/profile.js" type="text/javascript"></script>

@endsection
@section('icerik')
<section class="content-header">
    <h1>
        About Us
    </h1>
</section>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">About Us Update</h6>
    </div>
    <div class="card-body">
        <form class="row" id="form" method="POST">
            <input name="profile_update" type="hidden" value="1">
            <div class="col-12">
                <div class="form-group">
                    <div class="form-group">
                        <label for="icerik">Name</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{$profile->ad_soyad}}" placeholder="Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="icerik">E-mail</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" value="{{$profile->email}}" placeholder="E-mail" />
                        </div>
                    </div>
                </div>
                <div class="form-group save_cancel_button" id="sakliLoad">
                    <input id="kaydet" type="submit" value="Update" class="btn btn-info float-right" />
                </div>
            </div>
        </form>
    </div>
</div>
@endsection