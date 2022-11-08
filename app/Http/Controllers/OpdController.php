<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OpdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Opd::orderBy('id', 'asc')->paginate(5);
        return view('input.opd.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wilayah = Wilayah::all();
        return view('input.opd.create', compact('wilayah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama', $request->kode);
        Session::flash('nip_kepala', $request->nama);
        Session::flash('nama_kepala', $request->level);
        Session::flash('nama_pimpinan', $request->level);
        $request->validate([
            'nama'=>'required',
            'nip_kepala' =>'required',
            'nama_kepala' => 'required',
            'nama_pimpinan' => 'required',
            'id_wilayah' => 'required',
        ]);
        $data = [
            'nama'=>$request->input('nama'),
            'nip_kepala'=>$request->input('nip_kepala'),
            'nama_kepala'=>$request->input('nama_kepala'),
            'nama_pimpinan'=>$request->input('nama_pimpinan'),
            'id_wilayah'=>$request->input('id_wilayah'),
        ];
        Opd::create($data);
        return redirect('opd')->with('Success', 'Berhasil Input Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Opd::where('id', $id)->first();
        return view('input.opd.detail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wilayah = Wilayah::all();
        $data = Opd::where("id", $id)->first();
        return view('input.opd.edit', compact('wilayah'))->with('data', $data);
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
            'nama'=>'required',
            'nip_kepala' =>'required',
            'nama_kepala' => 'required',
            'nama_pimpinan' => 'required',
            'id_wilayah' => 'required',
        ]);
        $data = [
            'nama'=>$request->input('nama'),
            'nip_kepala'=>$request->input('nip_kepala'),
            'nama_kepala'=>$request->input('nama_kepala'),
            'nama_pimpinan'=>$request->input('nama_pimpinan'),
            'id_wilayah'=>$request->input('id_wilayah'),
        ];
        Opd::where('id', $id)->update($data);
        return redirect('opd')->with('Success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Opd::where('id', $id)->delete();
        return redirect('opd')->with('Success', 'Berhasil Delete Data');
    }
}
