<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
            'breadcumb2'  => 'Data Pegawai',
        );

        $user = User::all();

        return view('user.list' , $data, ['users' => $user]);
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
            'nip' => 'required',
            'name' => 'required',
            'nohp' => 'nullable',
            'jenkel' => 'required',
            'email' => 'nullable', 'email',
            'password' => 'required',
            'role' => 'required',
            'foto' => 'nullable|mimes:jpg,jpeg,png|max:5000',
        ]);

        $user = new User;

        $foto = time().'.'.$request->foto->extension();  
         
        $request->foto->move(public_path('image/user'), $foto);
 
        $user->nip= $request->input('nip');
        $user->name= $request->input('name');
        $user->nohp= $request->input('nohp');
        $user->jenkel= $request->input('jenkel');
        $user->email= $request->input('email');
        $user->password= $request->input('password');
        $user->role= $request->input('role');
        $user->foto= $foto;
        
 
        $user->save();
 
        return redirect('/user')->with(key: 'added', value:true);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = array(
            'title'       => 'Data Master',
            'active_master' => 'active',
            'active_sub'  => 'active',
            'breadcumb1'  => 'Data Master',
            'breadcumb2'  => 'Data Pegawai',
        );
        $user = User::find($id);
        return view('user.show', $data, ['users' => $user]);
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
            'nip' => 'required',
            'name' => 'required',
            'nohp' => 'nullable',
            'jenkel' => 'required',
            'email' => 'nullable', 'email',
            'password' => 'required',
            'role' => 'required',
            'foto' => 'nullable|mimes:jpg,jpeg,png|max:5000',
        ]);

        $user = User::find($id);

        if($request->has('foto')){
            //hapus file lama
            file::delete('image/user'. $user->foto);

            $foto = time().'.'.$request->foto->extension();  
         
            $request->foto->move(public_path('image/siswa'), $foto);

            $user->foto = $foto;
        }
 
        $user->nip= $request->input('nip');
        $user->name= $request->input('name');
        $user->nohp= $request->input('nohp');
        $user->jenkel= $request->input('jenkel');
        $user->email= $request->input('email');
        $user->password= $request->input('password');
        $user->role= $request->input('role');
 
        $user->save();
        return back()->with(key: 'edited', value:true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        file::delete('image/user'. $user->foto);
 
        $user->delete();

        return redirect('/user')->with(key: 'deleted', value:true);
    }
}
