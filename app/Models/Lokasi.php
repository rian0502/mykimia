<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $table = 'lokasi';
    protected $fillable = [
        'nama_lokasi', 
        'lantai_tingkat',
        'nama_gedung',
        'created_at',
        'updated_at'
    ];
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

}
