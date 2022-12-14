
@extends('layout.aplikasi')

@section('title', 'Edit Pengajuan')

@section('konten')
@foreach ($datas as $data)
<h1>Edit </h1>
    <form method="post" action="{{'/pengajuan/'.$data->id }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="perihal">Perihal</label>
            <input type="text" class="form-control" id="perihal" placeholder="Perihal" name="perihal" value=" {{ $data->perihal }}">
        </div>
        <div class="mb-3">
            <label for="Deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" value="{{ $data->deskripsi }}">
        </div>
        <div class="mb-3">
            <label for="id_layanan">Id Layanan</label>
            <select class="form-control" name="id_layanan" id="id_layanan">
                @foreach($layanan as $value)
                <option value="{{$data->id|$value->id}}">{{$value->nama_layanan}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_syarat_layanan">Syarat Layanan</label>
            <select class="form-control" name="id_syarat_layanan" id="id_syarat_layanan">
                @foreach ($syarat_layanan as $value)
                <option value="{{$data->id|$value->id}}">{{ $value->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="upload" class="form-label">Upload File</label>
            <input type="file" class="form-control" name="upload" id="upload">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/pengajuan" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
    @endforeach
    @endsection
