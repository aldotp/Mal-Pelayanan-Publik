
@extends('layout.aplikasi')

@section('title', 'Tambah Pengajuan')

@section('konten')
    <form method="post" action="/pengajuan" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="perihal">Perihal</label>
            <input type="text" class="form-control" id="perihal" placeholder="Perihal" name="perihal" value=" {{ Session::get('perihal') }}">
        </div>

        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi"></textarea>
        </div>
        <div class="mb-3">
            <label for="layanan">Layanan</label>
            <select class="form-control" name="id_layanan" id="id_layanan">
                @foreach ($layanan as $value)
                <option value="{{$value->id}}">{{$value->nama_layanan}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_syarat_layanan">Syarat Layanan</label>
            <select class="form-control" name="id_syarat_layanan" id="id_syarat_layanan">
                @foreach ($syarat_layanan as $value)
                <option value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="upload" class="form-label">Upload File</label>
            <input type="file" class="form-control" name="upload" id="upload">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/pengajuan" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
@endsection
