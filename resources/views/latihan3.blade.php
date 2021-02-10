@extends('layout')
@section('task','Yen, dari seluruh data AMBIZ, Anak-anak itu paling banyak tertarik pada industri apa ya? Tolong tampilin 10 TOP INDUSTRIES yaa dengan jumlah anak2nya masing-masing!')

@section('content')
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>10 TOP INDUSTRIES</th>
                <th>Jumlah User</th>
            </tr>
        </thead>
        <tbody>
        @foreach($L3 as $data)
            <tr>
                <td>{{$no}}<?php $no++;?></td>
                <td>{{$data->name}}</td>
                <td>{{$data->total}} orang</td>
            </tr>
        @endforeach
        </tfoot>
    </table>
@endsection