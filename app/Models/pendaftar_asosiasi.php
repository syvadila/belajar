<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftar_asosiasi extends Model
{
    use HasFactory;
    protected $fillable=[
            'name',
            'email',
            'nik',
            'alamat',
            'asosiasi',
            'nama_umkm',
            'status'
    ];
}
