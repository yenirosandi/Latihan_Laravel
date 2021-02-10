@extends('layout')
@section('task','Jumlah Users lulusan tahun 2020-2021 pada wilayah pulau Jawa saja adalah...')

@section('content')
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Tahun Lulus</th>
                <th>Jumlah User</th>
            </tr>
        </thead>
        <tbody>
        @foreach($L1 as $data)
            <tr>
                <td>{{$data->year_of_graduation}}</td>
                <td>{{$data->total}} orang</td>
            </tr>
        @endforeach
        </tfoot>
    </table>
@endsection