
@extends('layout.aplikasi')

@section('title', 'Wilayah')

@section('konten')
<h1>Wilayah</h1>
<a href="/wilayah/create" class="btn btn-primary">Tambah Data Wilayah</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Wilayah</th>
                <th>Level</th>
                <th>Parent</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->kode}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->level}}</td>
                <td>{{$item->id_parent}}</td>
                {{-- @foreach($wilayah as $value)
                <td value="{{$value->id}}">{{$value->nama}}</td>
                @endforeach --}}
                <td>
                    <a class="btn btn-secondary btn-sm" href="{{ url('/wilayah/'.$item->id) }}">Detail</a>
                    <a class="btn btn-warning btn-sm" href="{{ url('/wilayah/'.$item->id. '/edit') }}">Edit</a>
                    <form action="{{ '/wilayah/'.$item->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </thead>
    </table>
    {{ $data->links() }}
@endsection

