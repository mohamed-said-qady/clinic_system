<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialisity extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'name',

    ]; 
    public function acounts(){
        return $this->hasMany(Acount::class);
    } 

}
