<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBarang extends Model
{
    use HasFactory;
    protected $table = 'model_barang';
    protected $fillable = [
        'nama_model',
        'encrypt_id', 
        'merk', 
        'created_at',
        'updated_at'
    ];
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
