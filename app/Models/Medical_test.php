<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medical_test extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'name',
        'hospital_id',
        'patient_id',
        'doctor_id',
        'completed'
    ]; 

    public function hospital(){
        return $this->belongsTo(Profile::class);
    }

    public function acount(){
        return $this->hasOne(Acount::class);
    }
}
