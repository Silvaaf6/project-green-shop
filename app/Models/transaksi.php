<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_barang', 'id_users', 'tgl_pesan', 'jumlah', 'total'];
    public $timestamps = true;

    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
