
@extends('layout.aplikasi')

@section('title', 'Detail Pengajuan')

@section('konten')
    <div>
        @foreach ($data as $item)

        <a href="/pengajuan" class="btn btn-secondary">Kembali</a>
        <h1> {{ $item->perihal }}</h1>
        <p> <b>Deskripsi</b> {{ $item->deskripsi}}</p>
        <p> <b>Layanan</b> {{ $item->nama_layanan}}</p>
        <p> <b>Syarat Layanan</b> {{ $item->nama}}</p>
        @endforeach


    </div>
@endsection
