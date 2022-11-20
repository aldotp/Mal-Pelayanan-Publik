
@extends('layout.aplikasi')

@section('title', 'Admin')

@section('konten')
<h1>Halaman Admin</h1>
<div class="d-flex flex-row border">
    <div class="d-flex flex-column border rounded p-2">
        <h4>Input Data</h4>
        <ul>
            <li><a href="/wilayah">Wilayah</a></li>
            <li><a href="/opd">Organisasi Perangkat Daerah</a></li>
            <li><a href="/layanan">Layanan</a></li>
            <li><a href="/pengajuan">Pengajuan</a></li>
        </ul>
    </div>


    <div class="p-2 ml-5">
        <h1>Permintaan Layanan</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, nulla? Sapiente illum laudantium autem rem eum, molestias fuga maiores cum doloribus, incidunt laboriosam, optio inventore veniam illo eos! Omnis, vero.</p>

    </div>
  </div>



@endsection

