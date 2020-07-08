<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    protected $primaryKey = "idsupplier";

    protected $fillable = ['namasupplier','kota'];

    public function barang() {
        return $this->hasMany('App\Barang', 'idsupplier');
    }
}
