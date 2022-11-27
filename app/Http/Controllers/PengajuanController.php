<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Layanan;
use App\Models\Opd;
use App\Models\RiwayatPermintaanUpload;
use App\Models\SyaratLayanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('riwayat_permintaan_layanan')
                    ->join('layanan', "layanan.id", "=", "riwayat_permintaan_layanan.id_layanan")
                    ->join('syarat_layanan', "syarat_layanan.id", "=", "riwayat_permintaan_layanan.id_syarat_layanan")
                    ->where('riwayat_permintaan_layanan.id_user', "=", Auth::user()->id)
                    ->select('riwayat_permintaan_layanan.*', "layanan.nama_layanan", "syarat_layanan.nama")
                    ->get();


        // dd($data);
        // return view('input.pengajuan.index', ['data'=> $data]);
        return view('input.pengajuan.index',)->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $syarat_layanan = SyaratLayanan::all();
        $layanan = Layanan::all();
        return view('input.pengajuan.create', compact('layanan', 'syarat_layanan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Session::flash('perihal', $request->kode);
        $request->validate([
            'perihal'=>'required',
            'upload' => 'required'
        ]);


        $id_user = Auth::id();
        $file = $request->file('upload');
        if ($file){
            $file_ekstensi = $file->extension();
            $file_nama = date('ymdhis') . "." . $file_ekstensi;
            $file->move(public_path('files'), $file_nama);

            $data = [
                'perihal'=>$request->input('perihal'),
                'deskripsi'=>$request->input('deskripsi'),
                'id_layanan'=>$request->input('id_layanan'),
                'id_syarat_layanan'=>$request->input('id_syarat_layanan'),
                'upload'=> $file_nama,
                'id_user'=>$id_user
                // 'status'=>$request->input('status'),
            ];

        }


        $riwayat = [
            'id_syarat_layanan'=>$request->input('id_syarat_layanan'),
        ];

        Pengajuan::create($data);
        RiwayatPermintaanUpload::create($riwayat);
        return redirect('pengajuan')->with('Success', 'Berhasil Input Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {

        $data = DB::table('riwayat_permintaan_layanan')
                    ->join('layanan', "layanan.id", "=", "riwayat_permintaan_layanan.id_layanan")
                    ->join('syarat_layanan', "syarat_layanan.id", "=", "riwayat_permintaan_layanan.id_syarat_layanan")
                    ->where('riwayat_permintaan_layanan.id', "=", $id)
                    ->select('riwayat_permintaan_layanan.*', "layanan.nama_layanan", "syarat_layanan.nama")
                    ->get();

        // $data = Pengajuan::where('id', $id)->first();
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
        $datas = DB::table('riwayat_permintaan_layanan')
        ->join('layanan', "layanan.id", "=", "riwayat_permintaan_layanan.id_layanan")
        ->join('syarat_layanan', "syarat_layanan.id", "=", "riwayat_permintaan_layanan.id_syarat_layanan")
        ->where('riwayat_permintaan_layanan.id', "=", $id)
        ->select('riwayat_permintaan_layanan.*', "layanan.nama_layanan", "syarat_layanan.nama")
        ->get();
        $syarat_layanan = SyaratLayanan::all();
        $layanan = Layanan::all();
        // $data = Pengajuan::where("id", $id)->first();
        // return view('input.pengajuan.edit')->with('data', $data);
        return view('input.pengajuan.edit', compact('layanan'), compact('syarat_layanan'))->with('datas', $datas);
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
        $request->validate([
            'perihal'=>'required',
            'upload' => 'required'
        ]);

        $id_user = Auth::id();
        $file = $request->file('upload');
        if ($file){
            $file_ekstensi = $file->extension();
            $file_nama = date('ymdhis') . "." . $file_ekstensi;
            $file->move(public_path('files'), $file_nama);

            $data = [
                'perihal'=>$request->input('perihal'),
                'deskripsi'=>$request->input('deskripsi'),
                'id_layanan'=>$request->input('id_layanan'),
                'id_syarat_layanan'=>$request->input('id_syarat_layanan'),
                'upload'=> $file_nama,
                'id_user'=>$id_user
                // 'status'=>$request->input('status'),
            ];
        }

        $data = [
            'perihal'=>$request->input('perihal'),
            'deskripsi'=>$request->input('deskripsi'),
            'id_layanan'=>$request->input('id_layanan'),
            'id_syarat_layanan'=>$request->input('id_syarat_layanan'),
            // 'upload'=> $file_nama,
            'id_user'=>$id_user
            // 'status'=>$request->input('status'),
        ];


        Pengajuan::where('id', $id)->update($data);
        return redirect('pengajuan')->with('Success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data = $file_nama;

        RiwayatPermintaanUpload::where('id_permintaan_layanan',$id)->delete();
        Pengajuan::where('id', $id)->delete();
        // File::delete(public_path('foto') . '/' . $data-> upload );
        if( auth()->user()->is_admin == 1 ){
            return redirect('admin')->with('Success', 'Berhasil Delete Data');
        }
        return redirect('pengajuan')->with('Success', 'Berhasil Delete Data');
    }
}
