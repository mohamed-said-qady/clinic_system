<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    use HasFactory; 
    protected $fillable = [
        'name',
        'location_id',
        'phone',
    ]; 

    public function profile(){
        return $this->hasMany(Profile::class);
    }

    public function appointment(){
        return $this->hasMany(Appointment::class);
    }

    public function medical_test(){
        return $this->hasMany(Medical_test::class);
    }

    public function location(){
        return $this->hasOne(Location::class);
    }
}
