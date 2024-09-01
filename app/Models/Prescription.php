<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    use HasFactory;
    protected $fillable = [
        'medication',
        'instruction',
        'diagonsis',
        'active',
        'medicine_potency',
        'remarks',
        'lab_test',
        'prescription_delivered',
        'lab_requests_performed',
        'invoice_amount',
        'acount_id'
    ]; 

    public function acount(){
        return $this->hasOne(Acount::class);
    }

}
