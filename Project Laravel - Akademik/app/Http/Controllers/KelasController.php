<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeKelas;
use App\Models\Kelas;
use App\Models\SiswaKelas;

class KelasController extends Controller
{
    public function index()
    {
        $data = array(
            'title'       => 'Data Master',
            'active_master' => 'active',
            'active_sub'  => 'active',
            'breadcumb1'  => 'Data Master',
            'breadcumb2'  => 'Data Kelas',
        );

        return view('kelas.list' , $data, 
        [
            'tbl_tipekelas' => TipeKelas::all(),
            'tbl_kelas' => Kelas::all(),
            'tbl_siswakelas' => SiswaKelas::all(),
        ]);
    }
// ==================Store==================================
// Tipekelas
    public function storeTipeKelas(Request $request)
    {
        $request->validate([
            'nama_tipekelas' => 'required',
        ]);

        $tipeKelas = new TipeKelas;
         
        $tipeKelas->nama_tipekelas= $request->input('nama_tipekelas');
 
        $tipeKelas->save();
 
        return redirect('/kelas')->with(key: 'added', value:true);
    }
    // Kelas
    public function storeKelas(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',
        ]);

        $kelas = new Kelas;
         
        $kelas->nama_kelas= $request->input('nama_kelas');
 
        $kelas->save();
 
        return redirect('/kelas')->with(key: 'added', value:true);
    }

// Siswakelas

public function storeSiswaKelas(Request $request)
{
    $request->validate([
        'nama_kelas' => 'required',
    ]);

    $siswaKelas = new SiswaKelas;
     
    $siswaKelas->id_kelas= $request->input('id_kelas');
    $siswaKelas->id_tipekelas= $request->input('id_tipekelas');

    $kelas->save();

    return redirect('/kelas')->with(key: 'added', value:true);
}

// ===============Destroy=============================================
// Tipekelas

    public function destroyTipeKelas(string $id)
    {
        $tipeKelas = Siswa::find($id);

        $tipeKelas->delete();

        return redirect('/kelas')->with(key: 'deleted', value:true);
    }
    
    // Kelas
    public function destroyKelas(string $id)
    {
        $kelas = Kelas::find($id);

        $kelas->delete();

        return redirect('/kelas')->with(key: 'deleted', value:true);
    }
    
    // Siswakelas
    public function destroySiswaKelas(string $id)
    {
        $siswaKelas = SiswaKelas::find($id);

        $siswaKelas->delete();

        return redirect('/kelas')->with(key: 'deleted', value:true);
    }
    
}
