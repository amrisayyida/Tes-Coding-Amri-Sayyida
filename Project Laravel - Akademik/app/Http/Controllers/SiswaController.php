<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\WaliSiswa;
Use File;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'title'       => 'Data Master',
            'active_master' => 'active',
            'active_sub'  => 'active',
            'breadcumb1'  => 'Data Master',
            'breadcumb2'  => 'Data Siswa',
        );

        $siswa = Siswa::all();
        $wali = WaliSiswa::all();

        return view('siswa.list' , $data, ['tbl_siswa' => $siswa, 'tbl_walisiwa' => $wali]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required',
            'nohp_siswa' => 'required',
            'jenkel' => 'required',
            'tgl_lahir' => 'required',
            'tempat_lahir' => 'required',
            'id_walisiswa' => 'nullable',
            'alamat' => 'required',
            'foto_siswa' => 'required|mimes:jpg,jpeg,png|max:5000',
        ]);

        $siswa = new Siswa;
        $wali = new WaliSiswa;

        $fotoSiswa = date('YmdHis').'.'.$request->foto_siswa->extension();  
         
        $request->foto_siswa->move(public_path('image/siswa'), $fotoSiswa);
 
        $siswa->nis= $request->input('nis');
        $siswa->nama_siswa = $request->input('nama_siswa');
        $siswa->nohp_siswa = $request->input('nohp_siswa');
        $siswa->jenkel = $request->input('jenkel');
        $siswa->tgl_lahir = $request->input('tgl_lahir');
        $siswa->tempat_lahir = $request->input('tempat_lahir');
        $siswa->id_walisiswa = $request->input('id_walisiswa');
        $siswa->alamat = $request->input('alamat');
        $siswa->foto_siswa = $fotoSiswa;
 
        $siswa->save();
 
        return redirect('/siswa')->with(key: 'added', value:true);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = array(
            'title'       => 'Data Master',
            'active_side' => 'active',
            'active_sub'  => 'active',
            'breadcumb1'  => 'Data Master',
            'breadcumb2'  => 'Data Siswa',
        );
        $wali = WaliSiswa::all();
        $siswa = Siswa::find($id);
        $walii = WaliSiswa::find($id);
        return view('siswa.show', $data, ['tbl_siswa' => $siswa, 'tbl_walisiwaa' => $walii, 'tbl_walisiwa' => $wali]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required',
            'nohp_siswa' => 'required',
            'jenkel' => 'required',
            'tgl_lahir' => 'required',
            'tempat_lahir' => 'required',
            'id_walisiswa' => 'required',
            'alamat' => 'required',
            'foto_siswa' => 'mimes:jpg,jpeg,png|max:5000',
        ]);

        $siswa = Siswa::find($id);
        $wali = WaliSiswa::find($id);

        if($request->has('foto_siswa')){
            //hapus file lama
            file::delete('image/siswa'. $siswa->foto_siswa);

            $fotoSiswa = time().'.'.$request->foto_siswa->extension();  
         
            $request->foto_siswa->move(public_path('image/siswa'), $fotoSiswa);

            $siswa->foto_siswa = $fotoSiswa;
        }
 
        $siswa->nis= $request->input('nis');
        $siswa->nama_siswa = $request->input('nama_siswa');
        $siswa->nohp_siswa = $request->input('nohp_siswa');
        $siswa->jenkel = $request->input('jenkel');
        $siswa->tgl_lahir = $request->input('tgl_lahir');
        $siswa->tempat_lahir = $request->input('tempat_lahir');
        $siswa->id_walisiswa = $request->input('id_walisiswa');
        $siswa->alamat = $request->input('alamat');
 
        $siswa->save();
        return back()->with(key: 'edited', value:true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::find($id);

        file::delete('image/siswa'. $siswa->foto_siswa);
 
        $siswa->delete();

        return redirect('/siswa')->with(key: 'deleted', value:true);
    }
}
