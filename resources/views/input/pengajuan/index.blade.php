
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
                <th>Nama Layanan</th>
                <th>Syarat Layanan</th>
                <th>File</th>
                <th>Status</th>
                <th class="text-center">Aksi</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->perihal}}</td>
                <td>{{$item->deskripsi}}</td>
                <td>{{$item->nama_layanan}}</td>
                <td>{{$item->nama}}</td>
                <td>
                    @if ($item->upload)
                        <a href="{{ url('files').'/'.$item->upload}}">Bukti</a>
                    @endif
                </td>
                @if ($item->status == 0)
                    <td class="text-primary"><b>Pending</b></td>
                @elseif($item->status == 1)
                    <td style="color: green;"><b>Approve</b></td>
                @else
                    <td class="text-danger"><b>Gagal</b></td>
                @endif
                {{-- <td>{{$item->status}}</td> --}}
                <td>
                    <div class="row">
                        <div>
                            <a class="btn btn-secondary btn-sm" href="{{ url('/pengajuan/'.$item->id) }}">Detail</a>
                        </div>
                        <div>
                            <a class="btn btn-warning btn-sm" href="{{ url('/pengajuan/'.$item->id. '/edit') }}">Edit</a>
                        </div>
                        <div>
                            <form action="{{ '/pengajuan/'.$item->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </thead>
    </table>

    {{-- {{ $data->links() }} --}}
@endsection

