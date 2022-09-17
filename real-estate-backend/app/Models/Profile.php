<?php

namespace App\Models;

use Creativeorange\Gravatar\Gravatar;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * Fillable fields for a Profile.
     *
     * @var array
     */
    protected $fillable = [
        'theme_id',
        'location',
        'company',
        'address',
        'city',
        'state',
        'zipcode',
        'country',
        'billing_address',
        'billing_city',
        'billing_state',
        'billing_zipcode',
        'billing_country',
        'user_profile_bg',
        'avatar',
        'avatar_status',
        'image',
    ];

    protected $casts = [
        'theme_id' => 'integer',
    ];

    protected $appends = ['avatar_url', 'image_url'];

    /**
     * A profile belongs to a user.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Profile Theme Relationships.
     *
     * @var array
     */
    public function theme()
    {
        return $this->hasOne('App\Models\Theme');
    }

    public function getAvatarUrlAttribute() {
        if ($this->avatar_status == 1) {
            return $this->make_url($this->avatar);
        } else {
            return config('app.api_url') . "/assets/img/default.jpg";
        }
    }

    public function getImageUrlAttribute() {
        if ($this->avatar_status == 1) {
            return $this->make_url($this->user_profile_bg);
        } else {
            return config('app.api_url') . "/assets/img/default.jpg";
        }
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
