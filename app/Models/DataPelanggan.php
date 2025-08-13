<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPelanggan extends Model
{
    protected $table = 'data_pelanggan';
    
    protected $fillable = [
        'user_id', 'no_kwh', 'meter_awal', 'meter_akhir', 
        'alamat', 'no_telepon', 'status'
    ];

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tagihan()
    {
        return $this->hasOne(Tagihan::class);
    }
}