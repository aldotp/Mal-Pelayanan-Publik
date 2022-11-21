
@extends('layout.aplikasi')

@section('title', 'Admin')

@section('konten')
<h1 class="text-center">Halaman Dashboard Admin</h1>
<div class="d-flex flex-row border">
    <div class="d-flex flex-column border rounded p-2">
        <h4 class="text-center">Input Data</h4>
        <ul class="mt-2">
            <li><a href="/wilayah">Wilayah</a></li>
            <li><a href="/opd">Organisasi Perangkat Daerah</a></li>
            <li><a href="/layanan">Layanan</a></li>
            {{-- <li><a href="/pengajuan">Pengajuan</a></li> --}}
        </ul>
    </div>


    <div class=" container">
        <h2 class="text-center" >Riwayat Permintaan Layanan</h2>
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
                        <a class="btn btn-secondary btn-sm" href="{{ url('/pengajuan/'.$item->id) }}">Approve</a>
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
    </div>
  </div>



@endsection

