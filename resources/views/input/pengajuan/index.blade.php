
@extends('layout.aplikasi')

@section('title', 'Pengajuan')

@section('konten')
<h1>Pengajuan</h1>
<a href="/pengajuan/create" class="btn btn-primary">Tambah Data Pengajuan</a>
<a href="/admin" class="btn btn-secondary">Kembali</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>perihal</th>
                <th>Deskripsi</th>
                <th>Id Layanan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->perihal}}</td>
                <td>{{$item->deskripsi}}</td>
                <td>{{$item->id_layanan}}</td>
                <td>
                    <a class="btn btn-secondary btn-sm" href="{{ url('/pengajuan/'.$item->id) }}">Detail</a>
                    <a class="btn btn-warning btn-sm" href="{{ url('/pengajuan/'.$item->id. '/edit') }}">Edit</a>
                    <form action="{{ '/pengajuan/'.$item->id}}" method="post">
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

