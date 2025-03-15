<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipekelas extends Model
{
    protected $table = 'tbl_tipekelas';

    protected $fillable = ['nama_tipekelas'];

    public function tipesiswakelas()
    {
        return $this->hasMany(Product::class, 'id_tipekelas');
    }
}
