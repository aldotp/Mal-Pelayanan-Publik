
@extends('layout.aplikasi')

@section('title', 'Pengajuan')

@section('konten')
<h1>Pengajuan</h1>
<a href="/pengajuan/create" class="btn btn-primary">Tambah Data Pengajuan</a>
<a href="/home" class="btn btn-secondary">Kembali</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Perihal</th>
                <th>Deskripsi</th>
                <th>Id Layanan</th>
                <th>File</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->perihal}}</td>
                <td>{{$item->deskripsi}}</td>
                <td>{{$item->nama_layanan}}</td>
                <td>
                    @if ($item->upload)
                        <a href="{{ url('files').'/'.$item->upload}}">Bukti</a>
                    @endif
                </td>
                @if ($item->status == 0)
                    <td>Pending</td>
                @elseif($item->status == 1)
                    <td>Approve</td>
                @else
                    <td>Gagal</td>
                @endif
                {{-- <td>{{$item->status}}</td> --}}
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
    <h2>Notes</h2>
    <ul>
        <li>Status 0 = Pending</li>
        <li>Status 1 = Approve</li>
        <li>Status 2 = Deleted</li>
    </ul>

    {{-- {{ $data->links() }} --}}
@endsection

