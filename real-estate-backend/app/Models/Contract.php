<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    /*
     * detail field is a json formatted string for payment plan
     * 120, 110, 100, 90
     * 
     *      120 - 1st month
     *      ...
     *      90 - 4th month
     *      90 - from 5th month if period field is null
     */
    
    public function customer()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }

    public function application()
    {
        return $this->belongsTo('App\Models\Application');
    }

    public function historyPayment()
    {
        return $this->hasMany('App\Models\HistoryPayment', 'contract_id');
    }
}
