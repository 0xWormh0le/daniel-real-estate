<?php

namespace App\Models;

use Creativeorange\Gravatar\Gravatar;
use Illuminate\Database\Eloquent\Model;
class Role extends Model
{
    protected $fillable = ['name', 'description'];
}