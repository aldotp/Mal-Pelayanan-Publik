<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::orderBy('nomor_induk', 'asc')->paginate(5);
        return view('input.siswa.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_induk'=>'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'foto' => 'mimes:jpeg,jpg,png,gif'
        ],[
            'nomor_induk.required' => 'Nomor induk wajib diisi',
            'nomor_induk.numeric' => 'Nomor induk wajib diisi dalam angka',
            'nama.required' => 'Nama Wajib diisi',
            'alamat.required'=> 'Alamat wajib diisi',
            'foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF'
        ]);

        $foto_file = $request->file('foto');
        if ($foto_file){
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);

            $data = [
                'nomor_induk'=>$request->input('nomor_induk'),
                'nama' => $request->input('nama'),
                'alamat'=> $request->input('alamat'),
                'foto' => $foto_nama
            ];

        } else {
            $data = [
                'nomor_induk'=>$request->input('nomor_induk'),
                'nama' => $request->input('nama'),
                'alamat'=> $request->input('alamat'),
                'foto' => null
            ];
        }


        siswa::create($data);
        return redirect('siswa')->with('Success', 'Berhasil Input Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::where('nomor_induk', $id)->first();
        return view('input.siswa.detail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::where("nomor_induk", $id)->first();
        return view('input.siswa.edit')->with('data', $data);
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
            'nama' => 'required',
            'alamat' => 'required',
        ],[
            'nomor_induk.numeric' => 'Nomor induk wajib diisi dalam angka',
            'nama.required' => 'Nama Wajib diisi',
            'alamat.required'=> 'Alamat wajib diisi',
            'foto.required'=> 'Silahkan masukan foto',
        ]);

        $data = [
            'nama' => $request->input('nama'),
            'alamat'=> $request->input('alamat'),
        ];

        if ($request->hasFile('foto')){
            $request->validate([
                'foto' => 'required|mimes:jpeg,jpg,png,gif',

            ],[
                'foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF'
            ]);

            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);
            // upload fotobaru
            // sudah terupload ke directory


            // hapus foto lama
            $data_foto = Siswa::where('nomor_induk', $id)->first();
            File::delete(public_path('foto').'/'.$data_foto->foto);

            $data = [
                'foto' => $foto_nama
            ];
        }



        Siswa::where('nomor_induk', $id)->update($data);
        return redirect('siswa')->with('Success', 'Berhasil Update Data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa::where('nomor_induk', $id)->first();
        File::delete(public_path('foto') . '/' . $data->foto);
        Siswa::where('nomor_induk', $id)->delete();
        return redirect('siswa')->with('Success', 'Berhasil Delete Data');
    }
}
