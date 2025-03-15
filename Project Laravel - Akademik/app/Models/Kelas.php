<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'tbl_kelas';

    protected $fillable = ['nama_kelas'];

    public function kelassiswakelas()
    {
        return $this->hasMany(SiswaKelas::class, 'id_kelas');
    }
}
