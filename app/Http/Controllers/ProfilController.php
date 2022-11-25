<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function index()
    {
        $data = DB::table('users')
                    ->join('profil_user', "profil_user.id_user", "=", "users.id")
                    ->where('users.id', "=", Auth::user()->id)
                    ->select('users.*', "profil_user.*")
                    ->get();

        return view('user.profil.index')->with('data', $data);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $profil = [
            "name"=> $request->name,
            "alamat"=> $request->alamat,
            "no_telp"=> $request->no_telp
        ];
        $name = [
            "name"=> $request->name,
        ];
        // Pengajuan::where('id', $id)->update($data);
        DB::table("users")
            ->where('id', $id)
            ->update($name);

        DB::table("profil_user")
            ->where('id', $id)
            ->update($profil);
        // Profil::where('id', $id)->update($profil);

        // return redirect()->to("/user/profil")->with('Success', 'Berhasil Update Data');
        // return redirect()->route('profil/user')->with('Success', 'Berhasil Update Data');
        return redirect('user/profil')->with('Success', 'Berhasil Update Data');
        // return view('user.profil.index')->with('data', $data);
    }
}
