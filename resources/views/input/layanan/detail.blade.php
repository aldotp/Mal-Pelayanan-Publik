
@extends('layout.aplikasi')

@section('title', 'Detail Wilayah')

@section('konten')
    <div>
        <a href="/wilayah" class="btn btn-secondary">Kembali</a>
        <h1> {{ $data->nama}}</h1>
        <p> <b>Kode</b> {{ $data->kode}}</p>
        <p> <b>Level</b> {{ $data->level}}</p>
        <p> <b>Parent_id</b> {{ $data->id_parent}}</p>

    </div>
@endsection

