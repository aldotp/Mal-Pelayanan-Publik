<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{

    function index(){
        // menampilkan form memasukan email dan password
        return view("sesi/login");
    }

    function login(Request $request){
        // menampilkan proses login
        Session::flash('email', $request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);
        $infologin= [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            // kalau authentikasi sukses
            return redirect('admin')->with('Success', 'Berhasil Login');
            // return view("admin", [
            //     'name' => $request->name
            // ]);
        } else {
            // kalau authentikasi gagal
            return redirect('login')->withErrors('Username atau Password yang dimasukan salah');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('login')->with('Success', 'Berhasil Logout');
    }

    function register(){
        // untuk menampilkan form register
        return view('sesi.register');
    }

    function createAccount(Request $request){
        // untuk memasukan data

        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required | min:6'
        ],[
            'name.required'=>'Name wajib diisi',
            'email.required'=>'Email wajib diisi',
            'email.email'=>'Silahkan masukan email yang valid',
            'email.unique'=>'Email sudah digunakan',
            'password.required'=>'Password wajib diisi',
            'password.min'=>'Password minimal 6 karakater'
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ];

        User::create($data);

        $infologin= [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            // kalau authentikasi sukses
            return redirect('admin')->with('Success', 'Berhasil Register dan Login',Auth::user()->name);
            // return view("admin", [
            //     'name' => $request->name
            // ]);
        } else {
            // kalau authentikasi gagal
            return redirect('login')->withErrors('Username atau Password yang dimasukan salah');
        }
    }
}