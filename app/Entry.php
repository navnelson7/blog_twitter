<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //realacion entre Entry y User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
