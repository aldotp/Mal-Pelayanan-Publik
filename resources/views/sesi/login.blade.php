@extends('layout.aplikasi')

@section('title', 'Login')

@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1 class="text-center">Login</h1>
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input placeholder="masukan email" type="email" value= "{{ Session::get('email') }}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input placeholder="masukan password" type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        <p class="text-center">Belum Punya akun? <a href="/register">Register</a></p>
    </div>

@endsection
