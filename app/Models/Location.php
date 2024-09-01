<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $fillable = [
        'city',
        'zip',
        'state',
        'country',
        'address'
    ]; 

    public function hospital(){
        return $this->hasOne(Hospital::class);
    }


}
