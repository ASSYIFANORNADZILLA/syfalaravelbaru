<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primarykey = 'nim';
    protected $keyType = 'string';
    protected $fillablr = [
        'nim',
        'nama',
        'no_hp',
        'alamat',
        'foto',
        'password',
        'prodi_id',
    ];
}
