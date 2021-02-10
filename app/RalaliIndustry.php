<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RalaliIndustry extends Model
{
    public function user_new_industries()
    {
        return $this->hasOne(UserNewIndustry::class);
    }
}
