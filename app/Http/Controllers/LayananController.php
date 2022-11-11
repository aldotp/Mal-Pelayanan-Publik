<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Opd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Layanan::orderBy('id', 'asc')->paginate(5);
        return view('input.layanan.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $wilayah = Wilayah::all();
        $opd = Opd::all();
        return view('input.layanan.create', compact('opd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama_layanan', $request->kode);
        $request->validate([
            'nama_layanan'=>'required',
        ]);
        $data = [
            'nama_layanan'=>$request->input('nama_layanan'),
            'id_opd'=>$request->input('id_opd'),
        ];
        Layanan::create($data);
        return redirect('layanan')->with('Success', 'Berhasil Input Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Layanan::where('id', $id)->first();
        return view('input.layanan.detail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opd = Opd::all();
        $data = Layanan::where("id", $id)->first();
        return view('input.layanan.edit', compact('opd'))->with('data', $data);
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
            'nama_layanan'=>'required',
        ]);
        $data = [
            'nama_layanan'=>$request->input('nama_layanan'),
            'id_opd'=>$request->input('id_opd'),
        ];
        Layanan::where('id', $id)->update($data);
        return redirect('layanan')->with('Success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Layanan::where('id', $id)->delete();
        return redirect('layanan')->with('Success', 'Berhasil Delete Data');
    }
}
