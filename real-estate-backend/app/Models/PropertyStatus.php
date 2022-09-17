<?php

namespace App\Models;

use Creativeorange\Gravatar\Gravatar;
use Illuminate\Database\Eloquent\Model;
class PropertyStatus extends Model
{
    protected $table = 'property_statuses';
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];

    protected $visible = ['id', 'name'];

    public function properties()
    {
        return $this->belongsToMany('App\Models\Property', 'property_status_pivot', 'property_id', 'property_status_id');
    }

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}