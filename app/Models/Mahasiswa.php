<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'npm',
        'nama_mahasiswa',
        'tanggal_lahir',
        'tempat_lahir',
        'no_hp',
        'alamat',
        'jenis_kelamin',
        'tanggal_masuk',
        'angkatan',
        'semester',
        'status',
        'id_dosen',
        'user_id',
        'created_at',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }
}
