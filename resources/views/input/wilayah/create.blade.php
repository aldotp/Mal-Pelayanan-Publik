
@extends('layout.aplikasi')

@section('title', 'Tambah Wilayah ')

@section('konten')
    <form method="post" action="/wilayah">
        @csrf
        <div class="mb-3">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" id="kode" placeholder="Kode" name="kode" value=" {{ Session::get('kode') }}">
        </div>
        <div class="mb-3">
            <label for="nama">Nama Wilayah</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{ Session::get('nama') }}">
        </div>
        <div class="mb-3">
            <label for="level">Level</label>
            <input type="text" class="form-control" id="level" placeholder="Level" name="level" value=" {{ Session::get('level') }}">
        </div>
        <div class="mb-3">
            <label for="id_parent">Level Parent</label>
            <select class="form-control" name="id_parent" id="id_parent">
                @foreach($wilayah as $value)
                <option value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/wilayah" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
@endsection

