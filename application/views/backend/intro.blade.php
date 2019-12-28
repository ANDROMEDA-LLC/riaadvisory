@extends('backend/template')
@section('title','Blog')
@section('css')
<link href="{{base_url('assets/backend')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="{{base_url('vendor/ckeditor/ckeditor')}}/ckeditor.js" type="text/javascript"></script>
<script src="{{base_url('assets/backend')}}/js/custom/intro.js" type="text/javascript"></script>
<script type="text/javascript">
    CKEDITOR.replace('intro_content', {
        language: 'en',
        removePlugins: 'about',
        allowedContent: true
    });
</script>
@endsection
@section('icerik')
<section class="content-header">
    <h1>
        Intro
    </h1>
</section>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Intro Update</h6>
    </div>
    <div class="card-body">
        <form class="row" id="form" method="POST">
            <input name="intro_update" type="hidden" value="1">
            <div class="col-12">
                <div class="form-group">
                    <div class="form-group">
                        <label for="icerik">Content</label>
                        <div class="form-group">
                            <textarea name="content" id="intro_content">{{$intro->content}}</textarea>
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