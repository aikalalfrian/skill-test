<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Persalinan extends Model
{

    use HasFactory;

    protected $table = 'persalinans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'tanggal_lahir',
        'jam_lahir',
        'jenis_kelamin',
        'berat',
        'panjang',
        'nama_ibu',
        'lahir_ibu',
        'usia_gestasi',
        'lama_persalinan',
        'jenis_persalinan',
        'catatan',
    ];
}
