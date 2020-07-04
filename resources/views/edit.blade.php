@extends('adminlte/master')

@section('content')
<h3 class="ml-3 mt-3">Edit Pertanyaan</h3>
<form action="/pertanyaan/{{$pertanyaan->id}}" method="POST" class="ml-3 mt-3">
    @csrf
    @method('PUT');
    <div class="form-group">
        <label for="judul">Judul:</label>
    <input type="text" class="form-control" value="{{$pertanyaan->judul}}" placeholder="Enter title" name="judul" id="judul">
    </div>
    <div class="form-group">
        <label for="isi">Isi:</label>
        <input type="text" class="form-control" value="{{$pertanyaan->isi}}" placeholder="Enter content" name="isi" id="isi">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection