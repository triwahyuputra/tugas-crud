@extends('adminlte.master')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($pertanyaan as $key => $item)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->judul}}</td>
            <td>{{ $item->isi}}</td>
        </tr>
    @endforeach       
    </tbody>
</table>
@endsection