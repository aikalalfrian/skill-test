<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Birth extends Model
{

    use HasFactory;

    protected $table = 'births';
    protected $primaryKey = 'id';

    protected $fillable = [
        'date_of_birth',
        'gender',
        'weight',
        'length',
        'mother_name',
        'mother_birth',
        'gestational_age',
        'givebirth_duration',
        'givebirth_type',
        'notes',
    ];

    public function getDateOfBirthAttribute()
    {
        return Carbon::parse($this->attributes['date_of_birth'])->translatedFormat('l, d F Y h:i');
    }
}
