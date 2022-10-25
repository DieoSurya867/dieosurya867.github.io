<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $table = 'galeri_produk';
    protected $guarded = ['id'];

    public function produk()
    {
        return $this->belongsTo(produk::class);
    }
}
