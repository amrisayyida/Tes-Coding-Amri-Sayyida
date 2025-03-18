<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaliSiswa extends Model
{
    protected $table = 'tbl_walisiwa';

    protected $fillable = ['nama_wali', 'nohp_wali', 'alamat'];

    public function walisiswa()
    {
        return $this->hasMany(Siswa::class, 'id_walisiswa');
    }

}
