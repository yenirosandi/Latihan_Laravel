<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function universities()
    {
        return $this->belongsTo(University::class);
    }
}
