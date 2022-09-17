<?php

namespace App\Models;

use Creativeorange\Gravatar\Gravatar;
use Illuminate\Database\Eloquent\Model;
class UserRole extends Model
{
    protected $table = 'role_user';
    protected $fillable = [
        'id',
        'role_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

}