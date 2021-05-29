@extends('layouts.layoutAdmin')
@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Admin</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Admin</a>
            </div>
        </div>
    </div>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Name </th>
            <th scope="col">No Handphone</th>
            <th scope="col">No Handphone Orang Tua</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">NIK</th>
            <th scope="col">Lainnya</th>
        </tr>
    </thead>
    <tbody>
        
        <tr>
        @foreach( $datas as $dt)
            <td>{{$dt->name}}</td>
            <td>{{$dt->no_hp}}</td>
            <td>{{$dt->no_hp_orangtua}}</td>
            <td>{{$dt->jenis_kelamin}}</td>
            <td>{{$dt->agama}}</td>
            <td>{{$dt->nik}}</td>
            <td><a href="" class="badge badge-warning">Pendampingan</a></td>
        </tr>
        @endforeach
        @endsection