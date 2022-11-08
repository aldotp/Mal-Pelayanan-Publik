<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Wilayah::all();
        // return $data;
        // $data = Wilayah::orderBy('kode', 'asc')->get();
        $wilayah = Wilayah::all();
        $data = Wilayah::orderBy('id', 'asc')->paginate(5);
        return view('input.wilayah.index', compact('wilayah'))->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // menampilkan for
        $wilayah = Wilayah::all();
        return view('input.wilayah.create', compact('wilayah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // mengirim post daftar
        Session::flash('kode', $request->kode);
        Session::flash('nama', $request->nama);
        Session::flash('level', $request->level);
        $request->validate([
            'kode'=>'required|numeric',
            'nama' =>'required',
            'level' => 'required',
            'id_parent' => 'required|numeric'
        ]);
        $data = [
            'kode'=>$request->input('kode'),
            'nama'=>$request->input('nama'),
            'level'=>$request->input('level'),
            'id_parent'=>$request->input('id_parent'),
        ];
        Wilayah::create($data);
        return redirect('wilayah')->with('Success', 'Berhasil Input Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Wilayah::where('id', $id)->first();
        return view('input.wilayah.detail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // tampilkan data edit
        $wilayah = Wilayah::all();
        $data = Wilayah::where("id", $id)->first();
        return view('input.wilayah.edit', compact('wilayah'))->with('data', $data);
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
        //proses edit disini
        $request->validate([
            'kode'=>'required|numeric',
            'nama' =>'required',
            'level' => 'required',
            'id_parent' => 'required|numeric'
        ]);
        $data = [
            'kode'=>$request->input('kode'),
            'nama'=>$request->input('nama'),
            'level'=>$request->input('level'),
            'id_parent'=>$request->input('id_parent'),
        ];
        Wilayah::where('id', $id)->update($data);
        return redirect('wilayah')->with('Success', 'Berhasil Update Data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wilayah::where('id', $id)->delete();
        return redirect('wilayah')->with('Success', 'Berhasil Delete Data');
    }
}
