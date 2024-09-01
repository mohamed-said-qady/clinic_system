<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'status',
        'appointmentType',
        'doctor_id',
        'patient_id',
        'hospital_id'
    ]; 

    public function hospital(){
        return $this->belongsTo(Acount::class);
    }
}
