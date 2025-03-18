<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaliSiswa;

class WaliController extends Controller
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
            'breadcumb2'  => 'Data Wali',
        );

        $wali = WaliSiswa::all();

        return view('wali.list' , $data, ['tbl_walisiswa' => $wali]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wali' => 'required',
            'nohp_wali' => 'required',
            'alamat' => 'required',
        ]);

        $wali = new WaliSiswa;

        $wali->nama_wali = $request->input('nama_wali');
        $wali->nohp_wali = $request->input('nohp_wali');
        $wali->alamat = $request->input('alamat');
        $wali->save();
 
        return redirect('/wali')->with(key: 'added', value:true);

    }
    public function show(string $id)
    {
        $data = array(
            'title'       => 'Data Master',
            'active_side' => 'active',
            'active_sub'  => 'active',
            'breadcumb1'  => 'Data Master',
            'breadcumb2'  => 'Data wali',
        );
        $wali = WaliSiswa::find($id);
        return view('wali.show', $data, ['tbl_walisiswa' => $wali]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_wali' => 'required',
            'nohp_wali' => 'required',
            'alamat' => 'required',
        ]);

        $wali = WaliSiswa::find($id);

        $wali->nama_wali = $request->input('nama_wali');
        $wali->nohp_wali = $request->input('nohp_wali');
        $wali->alamat = $request->input('alamat');
        $wali->save();
        return back()->with(key: 'edited', value:true);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wali = WaliSiswa::find($id);
 
        $wali->delete();

        return redirect('/wali')->with(key: 'deleted', value:true);
    }
}
