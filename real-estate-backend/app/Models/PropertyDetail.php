<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class PropertyDetail extends Model
{
    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }
}