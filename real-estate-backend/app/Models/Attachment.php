<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $tablename = 'attachments';
    protected $fillable = ['small', 'medium', 'big'];
    protected $appends = ['small_image', 'medium_image', 'big_image'];
    protected $visible = ['id', 'small_image', 'medium_image', 'big_image'];

    public function getSmallImageAttribute()
    {
        return $this->make_url($this->small);
    }

    public function getMediumImageAttribute()
    {
        return $this->make_url($this->medium);
    }

    public function getBigImageAttribute()
    {
        return $this->make_url($this->big);
    }

    private function make_url($url)
    {
        if (is_null($url)) {
            return null;
        }
        if (strtolower(substr($url, 0, 4)) == 'http') {
            return $url;
        } else {
            return config('app.api_url') . '/storage/' . $url;
        }
    }
}