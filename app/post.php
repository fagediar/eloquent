<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function posts()
    {
        return $this->belongsTo(User::class);
    }
}
