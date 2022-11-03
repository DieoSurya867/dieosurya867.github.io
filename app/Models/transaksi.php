<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class);
    }
    public function transaksi_detail()
    {
        return $this->hasMany(Transaksi_detail::class);
    }

}
