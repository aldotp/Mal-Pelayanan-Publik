
@extends('layout.aplikasi')

@section('title', 'Detail Pengajuan')

@section('konten')
    <div>
        <a href="/pengajuan" class="btn btn-secondary">Kembali</a>
        <h1> {{ $data->perihal}}</h1>
        <p> <b>Kode</b> {{ $data->deskripsi}}</p>
        <p> <b>Parent_id</b> {{ $data->id_layanan}}</p>

    </div>
@endsection

