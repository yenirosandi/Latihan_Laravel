<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNewIndustry extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ralali_industries()
    {
        return $this->belongsTo(RalaliIndustry::class);
    }
}
