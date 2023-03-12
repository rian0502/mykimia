<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;
    protected $table = 'administrasi';
    protected $fillable = [
        'nip',
        'nama_administrasi',
        'no_hp',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'tanggal_sk',
        'file_sk',
        'jenis_kelamin',
        'status',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
