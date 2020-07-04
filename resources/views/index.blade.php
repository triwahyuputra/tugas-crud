@extends('adminlte.master')

@section('content')
<a href="/pertanyaan/create" class="btn btn-primary m-3">Buat Pertanyaan Baru</a>
<table class="table ml-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($pertanyaan as $key => $item)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->judul}}</td>
            <td>{{ $item->isi}}</td>
            <td>
                <a href="/pertanyaan/{{$item->id}}" class="btn btn-sm btn-info">Show</a>
                <a href="/pertanyaan/{{$item->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                <form action="/pertanyaan/{{$item->id}}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach       
    </tbody>
</table>
@endsection