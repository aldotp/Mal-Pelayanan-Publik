
@extends('layout.aplikasi')

@section('title', 'Detail Wilayah')

@section('konten')
    <div>
        <a href="/layanan" class="btn btn-secondary">Kembali</a>
        <h1> {{ $data->nama_layanan	}}</h1>
        <p> <b>Id Opd</b> {{ $data->id_opd}}</p>

    </div>
@endsection

