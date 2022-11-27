<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\RiwayatPermintaanUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $data = DB::table('riwayat_permintaan_layanan')
        // ->join('layanan', "layanan.id", "=", "riwayat_permintaan_layanan.id_layanan")
        // // ->select('riwayat_permintaan_layanan.*', "layanan.nama_layanan ")
        // ->get();

        $data = DB::table('riwayat_permintaan_layanan')
        ->join('layanan', "layanan.id", "=", "riwayat_permintaan_layanan.id_layanan")
        ->join('syarat_layanan', "syarat_layanan.id", "=", "riwayat_permintaan_layanan.id_syarat_layanan")
        ->join('users', "users.id", "=", "riwayat_permintaan_layanan.id_user")
        ->select('riwayat_permintaan_layanan.*', "layanan.nama_layanan", "syarat_layanan.nama", "users.name")
        ->get();

        // $data = Pengajuan::orderBy('id', 'asc')->paginate(5);
        return view('admin.admin')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pengajuan::where('id', $id)->first();
        return view('input.pengajuan.detail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'status'=>1
        ];
        Pengajuan::where('id', $id)->update($data);
        return redirect('admin')->with('Success', 'Berhasil Approve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RiwayatPermintaanUpload::where('id_permintaan_layanan',$id)->delete();
        Pengajuan::where('id', $id)->delete();
        // File::delete(public_path('foto') . '/' . $data-> upload );
        // if( auth()->user()->is_admin == 1 ){
        return redirect("admin")->with('Success', 'Berhasil Delete Data');
        // }
        // return redirect('pengajuan')->with('Success', 'Berhasil Delete Data');
    }

    // public function approve(Request $request, $id)
    // {

    //     $data = [
    //         'status'=>1
    //     ];
    //     Pengajuan::where('id', $id)->update($data);
    //     return redirect('admin')->with('Success', 'Berhasil Approve');
    // }
}
