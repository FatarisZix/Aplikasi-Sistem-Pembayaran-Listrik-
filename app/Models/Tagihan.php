<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihan';
    
    protected $fillable = [
        'data_pelanggan_id', 'pemakaian_kwh', 'tarif_per_kwh', 
        'total_tagihan', 'status_bayar'
    ];

    public function dataPelanggan()
    {
        return $this->belongsTo(DataPelanggan::class);
    }
}