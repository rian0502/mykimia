<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable = [
        'nama_kategori', 
        'encrypt_id',
        'created_at',
        'updated_at'
    ];
    
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
