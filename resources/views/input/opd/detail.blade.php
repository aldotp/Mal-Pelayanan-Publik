
@extends('layout.aplikasi')

@section('title', 'Detail Opd')

@section('konten')
    <div>
        <a href="/opd" class="btn btn-secondary">Kembali</a>
        <h1> {{ $data->nama}}</h1>
        <p> <b>Nip Kepala</b> {{ $data->nip_kepala}}</p>
        <p> <b>Nama Kepala</b> {{ $data->nama_kepala}}</p>
        <p> <b>Nama Pimpinan</b> {{ $data->nama_pimpinan}}</p>
        <p> <b>Id Wilayah</b> {{ $data->id_wilayah}}</p>

    </div>
@endsection

