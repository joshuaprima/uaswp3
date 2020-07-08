<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis';
    protected $primaryKey = "idjenis";

    protected $fillable = ['namajenis'];

    public function barang() {
        return $this->hasMany('App\Barang', 'idjenis');
    }
}
