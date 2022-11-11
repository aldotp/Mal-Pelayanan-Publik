
@extends('layout.aplikasi')

@section('title', 'Tambah Opd ')

@section('konten')
    <form method="post" action="/siswa" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama">Nomor Induk</label>
            <input type="text" class="form-control" id="nomor_induk" placeholder="Nomor Induk" name="nomor_induk" value=" {{ Session::get('nomor_induk') }}">
        </div>
        <div class="mb-3">
            <label for="nip_kepala">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value=" {{ Session::get('nama') }}">
        </div>
        <div class="mb-3">
            <label for="nama_kepala">Alamat</label>
            <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat">{{ Session::get('alamat') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/siswa" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
@endsection

