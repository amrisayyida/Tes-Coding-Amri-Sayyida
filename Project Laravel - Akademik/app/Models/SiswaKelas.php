<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaKelas extends Model
{
    protected $table = 'tbl_siswakelas';

    protected $fillable = ['id_siswa, id_kelas, id_tipekelas'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
    public function siswaKelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
    public function siswaTipeKelas()
    {
        return $this->belongsTo(Tipekelas::class, 'id_tipekelas');
    }
}
