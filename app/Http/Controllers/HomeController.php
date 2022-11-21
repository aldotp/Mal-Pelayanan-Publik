<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user()->id;
        return view('user.home', compact('user'));
    }

    public function admin()
    {
        $data = DB::table('riwayat_permintaan_layanan')
                    ->join('layanan', "layanan.id", "=", "riwayat_permintaan_layanan.id_layanan")
                    // ->select('riwayat_permintaan_layanan.*', "layanan.nama_layanan ")
                    ->get();

        // $data = Pengajuan::orderBy('id', 'asc')->paginate(5);
        return view('admin.admin')->with('data', $data);
    }
}
