<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    protected $guarded = ['id'];

    public function keranjang()
    {
        return $this->belongsTo(keranjang::class);
    }

}
