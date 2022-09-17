<?php

namespace App\Models;

use Creativeorange\Gravatar\Gravatar;
use Illuminate\Database\Eloquent\Model;
class PropertyType extends Model
{
    protected $table = 'property_types';
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];
    protected $visible = ['id', 'name'];


    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}