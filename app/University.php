<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public function education()
    {
        return $this->hasOne(Education::class);
    } 
}
