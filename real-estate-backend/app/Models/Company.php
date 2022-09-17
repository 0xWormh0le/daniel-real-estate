<?php

namespace App\Models;

use Creativeorange\Gravatar\Gravatar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Company extends Model
{
    use SoftDeletes;
    protected $table = 'companies';
    protected $dateFormat = 'Y-m-d H:i:s';

    protected $fillable = [
        'id',
        'name',
        'address1',
        'address2',
        'logo',
        'city',
        'state',
        'zip',
        'phone1',
        'phone2',
        'fax',
        'email',
        'descrition',
        'about_us',
        'created_at',
        'updated_at'
    ];
    public $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}