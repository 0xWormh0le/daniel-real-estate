<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyAdditionalFeature extends Model
{
    protected $table = 'property_additional_features';
    protected $fillable = [
        'property_id',
        'name',
        'value',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    // protected $dateFormat = 'Y-m-d H:i:s.u';

    // public function getDateFormat()
    // {
    //     return $this->dateFormat;
    // }
}