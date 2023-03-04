<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = [
        'id_kategori', 
        'id_model', 
        'id_lokasi',
        'nama_barang', 
        'jumlah_akhir', 
        'created_at',
        'updated_at'
    ];
    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class);
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function modelBarang()
    {
        return $this->belongsTo(ModelBarang::class);
    }
}
