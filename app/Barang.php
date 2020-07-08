<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'idbarang';

    protected $fillable = ['namabarang','idjenis','jumlah','idsupplier','foto'];

    public function jenis() {
        return $this->belongsTo('App\Jenis', 'idjenis');
    }

    public function supplier() {
        return $this->belongsTo('App\Supplier', 'idsupplier');
    }
}
