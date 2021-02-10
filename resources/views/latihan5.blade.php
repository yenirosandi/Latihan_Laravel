@extends('layout')
@section('task','Tolong tampilkan nama, email, nomor telefon,wilayah tempat tinggal dan universitas untuk anak-anak yang berkuliah di Institut Teknologi Sepuluh Nopember dan Fakultas Computer Science!')

@section('content')
<table id="example" class="table table-striped table-bordered table-active" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No.Telpon</th>
                <th>Tempat Tinggal</th>
                <th>Universitas</th>
            </tr>
        </thead>
        <tbody>
        @foreach($L5 as $data)
            <tr>
                <td>{{$no}}<?php $no++;?></td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone_number}}</td>
                <td>{{$data->kota}}</td>
                <td>{{$data->university_name}}</td>
            </tr>
        @endforeach
        </tfoot>
    </table>
@endsection