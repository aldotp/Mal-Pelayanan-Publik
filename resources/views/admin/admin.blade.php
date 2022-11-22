
@extends('layout.aplikasi')

@section('title', 'Admin')

@section('konten')
<h1 class="text-center">Halaman Dashboard Admin</h1>
<div class="d-flex flex-row border">
    <div class="d-flex flex-column border rounded p-2 m-3">
        <h4 class="text-center">Input Data</h4>
        <ul class="mt-2">
            <li><a href="/wilayah">Wilayah</a></li>
            <li><a href="/opd">Organisasi Perangkat Daerah</a></li>
            <li><a href="/layanan">Layanan</a></li>
            {{-- <li><a href="/pengajuan">Pengajuan</a></li> --}}
        </ul>
    </div>


    <div class="container m-3">
        <h2 class="text-center" >Riwayat Permintaan Layanan</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Perihal</th>
                    <th>Deskripsi</th>
                    <th>Nama Layanan</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->perihal}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td>{{$item->nama_layanan}}</td>
                    <td>
                        @if ($item->upload)
                            <a href="{{ url('files').'/'.$item->upload}}">Bukti</a>
                        @endif
                    </td>
                    <td>
                        <form action="{{ URL('pengajuan/', $item->id)}}">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-secondary btn-sm bg-primary" href="{{ url('/pengajuan/'.$item->id) }}">Approve</button>
                        </form>
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
        {{-- {{ $data->links() }} --}}
@endsection

