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
        <h1>Input Organisasi Perangkat Daerah</h1>
        <form action="/sesi/login" method="POST">
            <label for="email" class="form-label">Nama Organisasi</label>
            <input placeholder="Masukan Nama Organisasi" type="text"  name="nama" class="form-control">
            <label for="email" class="form-label">NIP Kepala</label>
            <input placeholder="Masukan NIP Kepala" type="text"  name="nip_kepala" class="form-control">
            <label for="email" class="form-label">Nama Kepala</label>
            <input placeholder="Masukan Nama Kepala" type="text"  name="nama_kepala" class="form-control">
            <label for="email" class="form-label">Nama Pimpinan</label>
            <input placeholder="Masukan Nama Pimpinan" type="text"  name="nama_pimpinan" class="form-control">
            <label for="email" class="form-label">Id Wilayah</label>
            <input placeholder="Masukan Nama Pimpinan" type="text"  name="id_wilayah" class="form-control">
            <button name="submit" type="submit" class="btn btn-primary w-15 m-2 ">Submit</button>
        </form>
    </div>
  </div>



@endsection

