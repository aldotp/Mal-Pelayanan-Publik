<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.home');
    }

    public function admin()
    {
        $data = Pengajuan::orderBy('id', 'asc')->paginate(5);
        return view('admin.admin')->with('data', $data);
    }
}
