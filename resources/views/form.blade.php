@extends('adminlte.master')

@section('content')
<form action="/pertanyaan" method="POST">
    @csrf
    <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" class="form-control" placeholder="Enter title" name="judul" id="judul">
    </div>
    <div class="form-group">
        <label for="isi">Isi:</label>
        <input type="text" class="form-control" placeholder="Enter content" name="isi" id="isi">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection