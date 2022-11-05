
@extends('layout.aplikasi')

@section('title', 'Input Wilayah')

@section('konten')
<h1>Halaman Admin</h1>
<div class="d-flex flex-row">
    <div class="d-flex flex-column border rounded p-2">
        <h2>Input Data</h2>
        <ul>
            <li><a href="/wilayah">Wilayah</a></li>
            <li><a href="/opd">Organisasi Perangkat Daerah</a></li>
            <li><a href="/layanan">Layanan</a></li>
        </ul>
    </div>

    <div class="p-2 ml-5">
        <h1>Input Layanan</h1>
        <form action="/sesi/login" method="POST">
            <label for="email" class="form-label">Nama Layanan</label>
            <input placeholder="Masukan Nama Layanan" type="text"  name="nama_layanan" class="form-control">
            <label for="email" class="form-label">Nama Wilayah</label>
            <input placeholder="Masukan Nama Wilayah" type="text"  name="wilayah" class="form-control">
            <label for="email" class="form-label">id_opd</label>
            <input placeholder="Masukan Level" type="text"  name="wilayah" class="form-control">
            <button name="submit" type="submit" class="btn btn-primary w-15 m-2 ">Submit</button>
        </form>
    </div>
  </div>



@endsection

