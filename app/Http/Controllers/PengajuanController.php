<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Pengajuan::orderBy('id', 'asc')->paginate(5);
        return view('input.pengajuan.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $wilayah = Wilayah::all();
        $layanan = Layanan::all();
        return view('input.pengajuan.create', compact('layanan'));
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
        ]);
        $data = [
            'perihal'=>$request->input('perihal'),
            'deskripsi'=>$request->input('deskripsi'),
            'id_layanan'=>$request->input('id_layanan'),
        ];
        Pengajuan::create($data);
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
        $Layanan = Layanan::all();
        $data = Pengajuan::where("id", $id)->first();
        return view('input.pengajuan.edit', compact('layanan'))->with('data', $data);
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
        ]);
        $data = [
            'perihal'=>$request->input('perihal'),
            'deskripsi'=>$request->input('deskripsi'),
            'id_layanan'=>$request->input('id_layanan'),
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
        Pengajuan::where('id', $id)->delete();
        return redirect('pengajuan')->with('Success', 'Berhasil Delete Data');
    }
}