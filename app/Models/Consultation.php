<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultation extends Model
{
    use HasFactory;
    protected $fillable = [
        'online_appointment', 
        'symptoms',
        'request_status',
        'start_at',
        'acount_id'
    ]; 
    public function acount(){
        return $this->belongsTo(Acount::class);
    }} 
