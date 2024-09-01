<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;


class Acount extends Authenticatable implements LaratrustUser
{
    use HasApiTokens, HasFactory,HasRolesAndPermissions;

    protected $fillable = [
        'name',
        'email',
        'password',
        'description',
        'user_id',
        'archeived',
        'specialisity_id',
    ]; 

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }

    public function prescription(){
        return $this->hasOne(Prescription::class);
    }

    public function message(){
        return $this->hasOne(Message::class);
    }

    public function specialisity(){
        return $this->belongsTo(Specialisity::class);
    }

    public function consultation(){
        return $this->hasMany(Consultation::class);
    }



}




















