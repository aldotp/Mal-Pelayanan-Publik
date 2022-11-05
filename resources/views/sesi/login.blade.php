@extends('layout.aplikasi')

@section('title', 'Login')

@section('konten')
    <div class=" w-25 p-3 center border rounded px-3 py-3 mx-auto position-absolute top-50 start-50 translate-middle">
        <h1 class="text-center">Login</h1>
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input placeholder="Masukan Email" type="email" value= "{{ Session::get('email') }}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input placeholder="Masukan Password" type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button name="submit" type="submit" class="btn btn-primary w-15 ">Login</button>
            </div>
        </form>
        <p class="text-center">Belum Punya akun? <a href="/register">Register</a></p>
    </div>

@endsection
