
@extends('layout.aplikasi')

@section('title', 'Tambah Pengajuan')

@section('konten')
    <form method="post" action="/pengajuan">
        @csrf
        <div class="mb-3">
            <label for="perihal">Perihal Pengajuan</label>
            <input type="text" class="form-control" id="perihal" placeholder="Perihal Pengajuan" name="perihal" value=" {{ Session::get('perihal') }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi Pengajuan</label>
            <select class="form-control" name="deskripsi" id="deskripsi">
                @foreach($opd as $value)
                <option value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/layanan" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
@endsection


$table->id();
$table->string('perihal');
$table->string('deskripsi');
$table->unsignedBigInteger('id_layanan');
$table->timestamps();