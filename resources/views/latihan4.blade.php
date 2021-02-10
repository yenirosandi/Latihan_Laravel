@extends('layout')
@section('task','Anak-anak AMBIZ itu paling banyak datang dari universitas apa ya? Coba tolong tampilkan 10 TOP UNIVERSITIES dengan jumlah anak2nya!')

@section('content')
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>10 TOP UNIVERSITIES</th>
                <th>Jumlah User</th>
            </tr>
        </thead>
        <tbody>
        @foreach($L4 as $data)
            <tr>
                <td>{{$no}}<?php $no++;?></td>
                <td>{{$data->university_name}}</td>
                <td>{{$data->total}} orang</td>
            </tr>
        @endforeach
        </tfoot>
    </table>
@endsection