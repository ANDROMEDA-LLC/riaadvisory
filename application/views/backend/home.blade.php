@extends('backend/template')
@section('title','Home')
@section('icerik')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Home</h1>
</div>
<div class="row" style="padding: 10px 25px;">
    <h3>Last Application</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Position</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personapp as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->position}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="row" style="padding: 10px 25px;">
    <h3>Last Contact</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Company</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contact as $item)
            <tr>
                <td>{{$item->ad_soyad}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->company}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row" style="padding: 10px 25px;">
    <h3>Last Blogs</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog as $item)
            <tr>
                <td>{{$item->baslik}}</td>
                <td>{{$item->create_date}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row" style="padding: 10px 25px;">
    <h3>Last News</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $item)
            <tr>
                <td>{{$item->baslik}}</td>
                <td>{{$item->create_date}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection