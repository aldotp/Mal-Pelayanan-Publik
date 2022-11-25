
@extends('layout.aplikasi')

@section('title', 'Wilayah')

@section('konten')
<h1>Profil</h1>
@foreach ($data as $item)

<form method="post" action="{{'profil/'.$item->id }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="kode">Name</label>
        <input type="text" class="form-control" id="nama" placeholder="Name" name="name" value=" {{ $item->name }}">
    </div>
    <div class="mb-3">
        <label for="nama_kepala">Alamat</label>
        <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="{{ $item->alamat }} ">
        {{-- <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="{{ $item->alamat }}"></textarea> --}}
    </div>
    <div class="mb-3">
        <label for="level">No Telpon</label>
        <input type="text" class="form-control" id="no_telp" placeholder="Nomer Telpon" name="no_telp" value="{{ $item->no_telp }} ">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/user" class="btn btn-secondary">Kembali</a>
    </div>
</form>
@endforeach
@endsection

