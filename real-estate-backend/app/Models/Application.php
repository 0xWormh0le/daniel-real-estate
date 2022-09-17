<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function contract()
    {
        return $this->hasOne('App\Models\Contract');
    }

}