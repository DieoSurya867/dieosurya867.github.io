<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_detail extends Model
{
    use HasFactory;
    protected $table = 'transaksi_detail';
    protected $guarded = ['id'];
    public function transaksi_detail()
    {
        return $this->belongsTo(transaksi_detail::class);
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
