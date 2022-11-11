
@extends('layout.aplikasi')

@section('title', 'Wilayah')

@section('konten')
<h1>Layanan</h1>
<a href="/layanan/create" class="btn btn-primary">Tambah Data Wilayah</a>
<a href="/admin" class="btn btn-secondary">Kembali</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Layanan</th>
                <th>Id Opd</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nama_layanan}}</td>
                <td>{{$item->id_opd}}</td>
                {{-- @foreach($opd as $value)
                <td value="{{$value->id}}">{{$value->nama}}</td>
                @endforeach --}}
                <td>
                    <a class="btn btn-secondary btn-sm" href="{{ url('/layanan/'.$item->id) }}">Detail</a>
                    <a class="btn btn-warning btn-sm" href="{{ url('/layanan/'.$item->id. '/edit') }}">Edit</a>
                    <form action="{{ '/layanan/'.$item->id}}" method="post">
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

