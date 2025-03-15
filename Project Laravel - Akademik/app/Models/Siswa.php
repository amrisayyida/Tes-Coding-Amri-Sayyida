<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'tbl_siswa';

    protected $fillable = [
        'nis',
        'nama_siswa',
        'nohp_siswa',
        'jenkel',
        'tgl_lahir',
        'tempat_lahir',
        'nama_ayah',
        'nama_ibu',
        'foto_siswa',
        'alamat'
    ];

    public function siswasiswakelas()
    {
        return $this->hasMany(SiswaKelas::class, 'id_siswa');
    }
}

