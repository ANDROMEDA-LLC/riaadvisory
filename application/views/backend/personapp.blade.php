@extends('backend/template')
@section('title','View Application')
@section('css')
<link href="{{base_url('assets/backend')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="{{base_url('assets/backend')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{base_url('assets/backend')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{base_url('assets/backend')}}/js/custom/personapp.js" type="text/javascript"></script>
@endsection
@section('icerik')
<section class="content-header">
    <h1>
    View Application
    </h1>
</section>
<div class="card shadow mb-4">
    <a href="#collapseCard" id='formToggle' class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard">
        <h6 class="m-0 font-weight-bold text-primary">View Application</h6>
    </a>
    <div class="collapse" id="collapseCard">
        <div class="card-body">
            <form class="row" id="form" method="POST">
                <input name="kapaliacik" type="hidden" value="0" >
                <input name="duzenleme" type="hidden" value="" >
                <input name="duzenlemeID" type="hidden" value="" >
                <input name="eskiBaslik" type="hidden" value="" >
                <input name="form_post" type="hidden" value="1" >
                <div class="col-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="icerik">Name</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name"  placeholder="Name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="icerik">E-mail</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email"  placeholder="E-mail"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="icerik">Phone</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone"  placeholder="Phone"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="icerik">Position</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="position"  placeholder="Position"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="icerik">Message</label>
                            <div class="form-group">
                                <textarea name="icerik" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="icerik">File Link</label>
                            <div class="form-group" id='file_link'>
                            <button class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                <i class="fas fa-download"></i>
                                </span>
                                <span class="text">Download</span>
                            </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group save_cancel_button" id="sakliLoad">                        
                        <input id="vazgec" type="button" value="Close" class="btn btn-secondary float-right" />
                    </div>
                </div>                 
            </form>
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">View Application Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Position</th>
                        <th>Date</th>
                        <th style="width: 220px">Transactions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $bilgiler)
                    <tr id="{{ $bilgiler->ID }}">
                        <td>{{ $bilgiler->name }}</td>
                        <td>{{ $bilgiler->email}}</td>
                        <td>{{ $bilgiler->phone}}</td>
                        <td>{{ $bilgiler->position}}</td>
                        <td>{{ $bilgiler->create_date}}</td>
                        <td class="float-right">
                            <button id="duzenle" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-edit"></i>
                                </span>
                                <span class="text">View</span>
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