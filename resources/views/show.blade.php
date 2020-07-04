@extends('adminlte/master')

@section('content')
<div class="ml-3 mt-3">
    <h3>Detail</h3>
    <ul class="list-group">
        <li class="list-group-item">Judul: {{$pertanyaan->judul}} </li>
        <li class="list-group-item">Isi: {{$pertanyaan->isi}}</li>
    </ul>
</div>
@endsection