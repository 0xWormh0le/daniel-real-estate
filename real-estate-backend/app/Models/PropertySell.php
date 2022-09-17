<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertySell extends Model
{
    public function scopeSold($query)
    {
        return $query->where(function ($q) {
            $q->where('sell_type', 'SELL')
                ->orWhereNull('expire_date')
                ->orWhereRaw('DATE(expire_date) >= DATE(NOW())');
        });
    }
}
