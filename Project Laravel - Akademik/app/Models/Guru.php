<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'tbl_guru';

    protected $fillable = ['id_guru, id_kelas, id_tipekelas'];

    public function guru()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function guruKelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
    public function guruTipeKelas()
    {
        return $this->belongsTo(TipeKelas::class, 'id_tipekelas');
    }

}
