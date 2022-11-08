
@extends('layout.aplikasi')

@section('title', 'Tambah Wilayah ')

@section('konten')
<h1>Edit </h1>
    <form method="post" action="{{'/wilayah/'.$data->id }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" id="kode" placeholder="Kode" name="kode" value=" {{ $data->kode }}">
        </div>
        <div class="mb-3">
            <label for="nama">Nama Wilayah</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label for="level">Level</label>
            <input type="text" class="form-control" id="level" placeholder="Level" name="level" value=" {{ $data->level }}">
        </div>
        <div class="mb-3">
            <label for="id_parent">Level Parent</label>
            <select class="form-control" name="id_parent" id="id_parent">
                @foreach($wilayah as $value)
                <option value="{{$data->id|$value->id}}">{{$value->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/wilayah" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
@endsection

