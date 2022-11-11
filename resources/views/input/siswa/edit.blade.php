
@extends('layout.aplikasi')

@section('title', 'Tambah Wilayah ')

@section('konten')
<h1>Edit </h1>
    <form method="post" action="{{'/siswa/'.$data->nomor_induk }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
         <div class="mb-3">
            <label for="nama">Nomor Induk</label>
            <input type="text" class="form-control" id="nomor_induk" placeholder="Nomor Induk" name="nomor_induk" value=" {{ $data->nomor_induk }}">
        </div>
        <div class="mb-3">
            <label for="nip_kepala">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value=" {{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label for="nama_kepala">Alamat</label>
            <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat">{{ $data->alamat }}</textarea>
        </div>
        @if ($data->foto)
        <div class="mb-3">
            <img style="max-width:50px; max-height:50px" src="{{ url('foto').'/'.$data->foto}}">
        </div>
        @endif
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/siswa" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
@endsection

