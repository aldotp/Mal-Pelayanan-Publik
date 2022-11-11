
@extends('layout.aplikasi')

@section('title', 'Wilayah')

@section('konten')
<h1>Siswa</h1>
<a href="/siswa/create" class="btn btn-primary">Tambah Data Siswa</a>
<a href="/admin" class="btn btn-secondary">Kembali</a>
    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nomor Induk</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>
                    @if ($item-> foto)
                        <img style="max-width:50px; max-height:50px" src="{{ url('foto'). '/'.$item->foto }}" alt="">
                    @endif

                </td>
                <td>{{$item->nomor_induk}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->alamat}}</td>
                <td>
                    <a class="btn btn-secondary btn-sm" href="{{ url('/siswa/'.$item->nomor_induk) }}">Detail</a>
                    <a class="btn btn-warning btn-sm" href="{{ url('/siswa/'.$item->nomor_induk. '/edit') }}">Edit</a>
                    <form action="{{ '/siswa/'.$item->nomor_induk}}" method="post">
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

