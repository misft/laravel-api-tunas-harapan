<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjang';

    protected $fillable = [
        'id_user', 'id_buku'
    ];
    
    public function buku() {
        return $this->belongsTo('App\Buku', 'id_buku', 'id');
    }
}   
