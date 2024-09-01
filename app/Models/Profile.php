<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'sex',
        'birthdate',
        'phone',
        'allergies',
        'prefHospital',
        'PrimaryCareDoctorId'
    ];

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }

    public function acount(){
        return $this->hasOne(Acount::class);
    }
}
