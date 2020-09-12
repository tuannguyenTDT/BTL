<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuyenDung extends Model
{
    //
    protected $guarded = [];

    public function nganhNghe(){
        return $this->hasMany(NganhNghe::class,'idJob');
    }
}
