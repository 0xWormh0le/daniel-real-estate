<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyGallery extends Model
{
    protected $tablename = 'property_galleries';
    protected $fillable = ['property_id', 'plan_id', 'type', 'name', 'attachment_id'];

    public function attachment()
    {
        return $this->belongsTo('App\Models\Attachment');
    }
}