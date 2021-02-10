<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public function detail_users()
    {
        return $this->belongsTo(UserDetail::class);
    }
}
