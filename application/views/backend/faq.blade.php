@extends('backend/template')
@section('title','FAQ')
@section('css')
<link href="{{base_url('assets/backend')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="{{base_url('assets/backend')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{base_url('assets/backend')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{base_url('assets/backend')}}/js/custom/faq.js" type="text/javascript"></script>
@endsection
@section('icerik')
<section class="content-header">
    <h1>
        FAQ
    </h1>
</section>
<div class="card shadow mb-4">
    <a href="#collapseCard" id='formToggle' class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard">
        <h6 class="m-0 font-weight-bold text-primary">Add FAQ</h6>
    </a>
    <div class="collapse" id="collapseCard">
        <div class="card-body">
            <form class="row" id="form" method="POST">
                <input name="kapaliacik" type="hidden" value="0">
                <input name="duzenleme" type="hidden" value="">
                <input name="duzenlemeID" type="hidden" value="">
                <input name="eskiBaslik" type="hidden" value="">
                <input name="form_post" type="hidden" value="1">
                <div class="col-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="icerik">Title</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="baslik" placeholder="Title" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="icerik">Content</label>
                            <div class="form-group">
                                <textarea name="icerik" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group save_cancel_button" id="sakliLoad">
                        <input id="kaydet" type="submit" value="Save" class="btn btn-info float-right" />
                        <input id="vazgec" type="button" value="Close" class="btn btn-secondary float-right" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">FAQ Tables</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th style="width: 200px">Transactions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $bilgiler)
                    <tr id="{{ $bilgiler->ID }}">
                        <td>{{ $bilgiler->baslik }}</td>
                        <td>{{ $bilgiler->create_date }}</td>
                        <td class="float-right">
                            <button id="duzenle" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-edit"></i>
                                </span>
                                <span class="text">Edit</span>
                            </button>
                            <button id="sil" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Delete</span>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection