@extends('layout.aplikasi')

@section('title', 'Register')

@section('konten')
    {{-- <div class="w-50 center border rounded px-3 py-3 mx-auto"> --}}
    <div class="w-25 p-3 center border rounded px-3 py-3 mx-auto position-absolute top-50 start-50 translate-middle">
        <h1 class="text-center">Register</h1>
        <form action="/sesi/register" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Nama</label>
                <input placeholder="Masukan Nama" type="text" name="name" value=" {{ Session::get('username') }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input placeholder="Masukan email" type="email" value= "{{ Session::get('email') }}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input placeholder="Masukan password" type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-flex justify-content-center ">
                <button name="submit" type="submit" class="btn btn-primary w-15 ">Register</button>
            </div>
        </form>
        <p class="text-center">Sudah mendaftar? <a href="/login">Login</a></p>
    </div>

@endsection
