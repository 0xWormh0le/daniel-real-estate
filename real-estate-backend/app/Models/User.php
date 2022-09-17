<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;

use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasRoleAndPermission;
    use Notifiable;
    use SoftDeletes;
    use Billable;

    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'company_id',
        'user_type',
        'password',
        'activated',
        'token',
    ];

    protected $visible = [
        'id',
        'name',
        'first_name',
        'last_name',
        'email',
        'company_id',
        'user_type',
        'activated',
        'avatar_url',
        'image',
        'ratings_count',
        'profile',
        'company'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'activated',
        'token',
    ];

    public $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = ['avatar_url', 'image', 'ratings_count'];
    // /**
    //  * Build Social Relationships.
    //  *
    //  * @var array
    //  */
    // public function social()
    // {
    //     return $this->hasMany('App\Models\Social');
    // }

    /**
     * User Profile Relationships.
     *
     * @var array
     */
    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }
    
    // User Profile Setup - SHould move these to a trait or interface...

    public function profiles()
    {
        return $this->belongsToMany('App\Models\Profile')->withTimestamps();
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'role_user');
    }

    public function purchases()
    {
        return $this->hasMany('App\Models\PropertySell');
    }

    public function hasProfile($name)
    {
        foreach ($this->profiles as $profile) {
            if ($profile->name == $name) {
                return true;
            }
        }

        return false;
    }

    public function assignProfile($profile)
    {
        return $this->profiles()->attach($profile);
    }

    public function removeProfile($profile)
    {
        return $this->profiles()->detach($profile);
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function favorites()
    {
        return $this->belongsToMany('App\Models\Property', 'user_favorites');
    }

    public static function cu_users() {
        $users = User::all();
        $cu_users = [];
        foreach ($users as $user) {
            foreach ($user->getRoles() as $role) {
                if($role["name"] != "Admin") {
                    $cu_users[] = $user;
                    break;
                }
            }
        }
        return $cu_users;
    }


    // public static function currentSocketUser($socket_token) {
    //     $socket_user = User::where('socket_token', $socket_token)->first();
    //     return $socket_user;
    // }

    // public function setOnlineState($online_state) {
    //     $this->online_state = $online_state;
    //     $this->save();
    // }
    
    public function getAvatarUrlAttribute() {
        return $this->make_url($this->profile->avatar_url);
    }
    
    public function getImageAttribute() {
        return $this->make_url($this->profile->image_url);
    }

    public function getRatingsCountAttribute() {
        return $this->profile->ratings_count;
    }

     /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    private function make_url($url)
    {
        if (is_null($url)) {
            return null;
        }
        if (strtolower(substr($url, 0, 4)) == 'http') {
            return $url;
        } else {
            return env('API_URL') . '/storage/' . $url;
        }
    }
}
