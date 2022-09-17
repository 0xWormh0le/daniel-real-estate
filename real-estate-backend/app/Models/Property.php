<?php

namespace App\Models;

use Creativeorange\Gravatar\Gravatar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Property extends Model
{
    use SoftDeletes;
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $table = 'properties';
    protected $fillable = [
        'id',
        'featured',
        'user_id',
        'property_type_id',
        'created_at',
        'updated_at'
    ];

    public $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $visible = [
        'id', 'title', 'description', 'featured', 'type', 'formatted_address',
        'status', 'features', 'additional_features', 
        'updated_at', 
        'company_id',
        'sold', 
        'gallery', 'videos', 'plans', 
        'details',
        'agent'
    ];

    protected $appends = [
        'type', 'status', 'features', 'additional_features', 'formatted_address',
        'gallery', 'videos', 'plans', 'sold',
        'details', 'agent'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function propertyType()
    {
        return $this->belongsTo('App\Models\PropertyType', 'property_type_id');
    }

    public function propertyDetails()
    {
        return $this->hasMany('App\Models\PropertyDetail');
    }

    public function propertyFeatures()
    {
        return $this->belongsToMany('App\Models\PropertyFeature', 'property_feature_pivot');
    }

    public function propertyStatus()
    {
        return $this->belongsToMany('App\Models\PropertyStatus', 'property_status_pivot');
    }

    public function propertySell()
    {
        return $this->hasMany('App\Models\PropertySell');
    }
    
    public function propertyAdditionalFeatures()
    {
        return $this->hasMany('App\Models\PropertyAdditionalFeature');
    }
    
    public function propertyGalleries()
    {
        return $this->hasMany('App\Models\PropertyGallery');
    }

    public function propertyPlans()
    {
        return $this->hasMany('App\Models\PropertyPlan');
    }

    public function getPropertyDescAttribute()
    {
        return $this->details['description'];
    }

    public function getTypeAttribute()
    {
        return $this->propertyType->name;
    }

    public function getDetailsAttribute()
    {
        $result = [];
        foreach($this->propertyDetails as $detail) {
            switch ($detail->name) {
                case 'neighborhood':
                case 'street':
                    $result[$detail->name] = explode('|', $detail->value);
                    break;
                case 'area':
                    $result[$detail->name] = [
                        'value' => $detail->value,
                        'unit' => "ft²"
                    ];
                    break;
                default:
                    $result[$detail->name] = $detail->value;
            }
        };
        return $result;
    }

    public function getAgentAttribute() {
        return [
            'user' => $this->user,
            'profile' => $this->user->profile,
            'company' => $this->user->company,
        ];
    }

    public function getFeaturesAttribute()
    {
        return array_map(function($feature) {
            return $feature['name'];
        }, $this->propertyFeatures->toArray());
    }

    public function getStatusAttribute()
    {
        return array_map(function($status) {
            return $status['name'];
        }, $this->propertyStatus->toArray());
    }

    public function getAdditionalFeaturesAttribute()
    {
        return array_map(function($feature) {
            return [
                'name' => $feature['name'],
                'value' => $feature['value']
            ];
        }, $this->propertyAdditionalFeatures->toArray());
    }

    public function getGalleryAttribute()
    {
        $result = [];
        foreach ($this->propertyGalleries as $gallery) {
            $attach = $gallery->attachment;
            if ($gallery->plan_id == 0 && $gallery->type === 'Image') {
                $result[] = [
                    'small' => $attach->small_image,
                    'medium' => $attach->medium_image,
                    'big' => $attach->big_image
                ];
            }
        }
        return $result;
    }

    public function getPlansAttribute()
    {
        $result = [];
        foreach ($this->propertyPlans as $plan) {
            $attach = $plan->gallery->attachment;
            $result[] = [
                'name' => $plan->name,
                'desc' => $plan->description,
                'rooms' => $plan->rooms,
                'baths' => $plan->baths,
                'area' => [
                    'value' => $plan->area,
                    'unit' => 'ft²'
                ],
                'image' => $attach->small ? $attach->small_image : ($attach->medium ? $attach->medium_image : $attach->big_image)
            ];
        }
        return $result;
    }

    public function getSoldAttribute()
    {
        $user_id = optional(auth('api')->user())->id;
        $sold = $this->propertySell()->sold()->first();

        if (!$sold) {
            return [ 'type' => 'none' ];
        }

        if ($sold->user_id !== $user_id) {
            $type = 'sold';
            $mine = false;
        } else if ($sold->sell_type === 'SELL') {
            $type = 'sold';
            $mine = true;
        } else {
            $type = $sold->sell_type;
            $mine = true;
        }

        return [
            'type' => $type,
            'mine' => $mine,
            'start_date' => $sold->start_date,
            'expire_date'=> $sold->expire_date
        ];
    }

    public function getVideosAttribute()
    {
        $result = [];
        foreach ($this->propertyGalleries as $gallery) {
            $attach = $gallery->attachment;
            if ($gallery->plan_id > 0 && $gallery->type === 'Video') {
                $result[] = [
                    'name' => $attach->name,
                    'link' => $attach->small ? $attach->small_image : ($attach->medium ? $attach->medium_image : $attach->big_image)
                ];
            }
        }
        return $result;
    }

    public function getCompanyIdAttribute()
    {
        return $this->user->company_id;
    }

    public function getFormattedAddressAttribute()
    {
        return $this->details['address'] . ', ' .  $this->details['city'] . ', ' . $this->details['zipcode'] . ', US';
    }


    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}