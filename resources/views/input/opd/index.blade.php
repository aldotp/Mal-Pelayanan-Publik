
@extends('layout.aplikasi')

@section('title', 'Wilayah')

@section('konten')
<h1>Organisasi Perangkat Daerah</h1>
<a href="/opd/create" class="btn btn-primary">Tambah Data Opd</a>
<a href="/admin" class="btn btn-secondary">Kembali</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIP Kepala</th>
                <th>Nama Kepala</th>
                <th>Nama Pimpinan</th>
                <th>Id Wilayah</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->nip_kepala}}</td>
                <td>{{$item->nama_kepala}}</td>
                <td>{{$item->nama_pimpinan}}</td>
                <td>{{$item->id_wilayah}}</td>
                <td>
                    <a class="btn btn-secondary btn-sm" href="{{ url('/opd/'.$item->id) }}">Detail</a>
                    <a class="btn btn-warning btn-sm" href="{{ url('/opd/'.$item->id. '/edit') }}">Edit</a>
                    <form action="{{ '/opd/'.$item->id}}" method="post">
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

