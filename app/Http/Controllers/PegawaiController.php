<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use mysqli;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepegawai()
    {
        $pegawai = Pegawai::all();
       

        return view('home', compact('pegawai'));
    }
   
   public function delete($nik)
    {
        $pegawai = Pegawai::findOrFail($nik);
        $pegawai->delete();

        return redirect()->route('home');
    }

   public function updateedit(Request $request)
    {
        $this-> validate($request, [
            'nik' => 'required',
            'nama_pegawai' => 'required',
            'no_telp' => 'required',
            'email' => 'required'
        ]);

        $pegawai= Pegawai::findOrFail($nik);
        $pegawai->nik = $request->nik;
        $pegawai->nama_pegawai = $request->nama;
        $pegawai->no_telp = $request->no_telp;
        $pegawai->email = $request->email;
        $pegawai->save();

        return redirect()->route('home', $pegawai->nik);
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
