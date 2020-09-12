<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function roles(){
        return $this->hasMany(Role::class,'roleId');
    }

    public function vitri(){
        return $this->hasMany(ViTri::class,'positionId');
    }

}
