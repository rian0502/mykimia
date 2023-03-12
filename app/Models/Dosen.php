<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $fillable = [
        'nip',
        'nidn',
        'nama_dosen',
        'no_hp',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'tanggal_sk',
        'file_sk',
        'jaban',
        'kepangkatan',
        'status',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_dosen');
    }
}
