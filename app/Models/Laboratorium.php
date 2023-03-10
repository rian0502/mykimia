<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    use HasFactory;
    protected $table = 'activity_lab';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_kegiatan',
        'id_lokasi',
        'keperluan',
        'keterangan',
        'created_at',
        'updated_at',
    ];

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'id_lokasi', 'id');
    }
}
