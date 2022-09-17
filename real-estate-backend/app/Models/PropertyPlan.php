<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyPlan extends Model
{
    protected $tablename = 'property_plans';
    protected $fillable = ['property_id', 'name', 'description', 'area', 'rooms', 'baths'];

    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }

    public function gallery()
    {
        return $this->hasOne('App\Models\PropertyGallery', 'plan_id');
    }
}