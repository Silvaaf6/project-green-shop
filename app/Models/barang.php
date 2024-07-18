<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_barang', 'id_kategori','deskripsi', 'stok', 'harga'];
    public $timestamps = true;

    // protected $table = 'barangs';

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori', 'id');
    }

    public function cart()
    {
        return $this->hasMany(cart::class, 'id_barang');
    }


}
