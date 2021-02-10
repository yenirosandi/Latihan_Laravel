@extends('layout')
@section('task','Tolong tampilkan nama, email, nomor telefon, dan universitas untuk anak-anak yang daftar AMBIZ sejak Juni 2020 dan TERTARIK pada Internship DAN Full-Time sekaligus')

@section('content')
<table id="example" class="table table-striped table-bordered table-active" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No.Telpon</th>
                <th>Universitas</th>
                <th>Internship Status</th>
                <th>Full-Time Status</th>
                <th>Waktu Daftar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($L2 as $data)
            <tr>
                <td>{{$no}}<?php $no++;?></td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone_number}}</td>
                <td>{{$data->university_name}}</td>
                <td class="{{$data->internship_status==1 ? 'table-success':'table-danger'}}">{{$data->internship_status}}</td>
                <td class="{{$data->job_status==1 ? 'table-success':'table-danger'}}">{{$data->job_status}}</td>
                <td>{{$data->created_at}}</td>
            </tr>
        @endforeach
        </tfoot>
    </table>
@endsection