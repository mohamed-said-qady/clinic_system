<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $fillable = [
        'header',
        'body',
        'target_id',
        'doctor_id'
    ]; 

    public function acount(){
        return $this->belongsTo(Acount::class);
    }

    
}
