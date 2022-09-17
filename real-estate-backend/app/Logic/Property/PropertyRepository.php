<?php

namespace App\Logic\Property;

use App\Models\Property;
use App\Models\PropertySell;
use App\Models\PropertyPlan;
use App\Models\PropertyFeature;
use App\Models\PropertyDetail;
use App\Models\PropertyStatus;
use App\Models\Application;
use App\Models\PropertyAdditionalFeature;
use Illuminate\Support\Facades\Auth;

class PropertyRepository
{
    public function searchProperties($where, $userWhere)
    {
        $query = Property::with('propertySell');
        if (count($userWhere) > 0) {
            $query = $query->whereHas('user', function($qry) use ($userWhere) {
                $qry->where($userWhere);
            });
            $query->where($where);
        } else {
            $query = $query->where($where);
        }

        return $query->get()->toArray();
    }

    public function purchasedProperties($user_id)
    {
        $properties = Application::with(['property', 'contract'])
            ->where('user_id', $user_id)
            ->get()
            ->map(function ($application) {
                $property = $application->property->toArray();
                $property['application'] = $application->toArray();
                if ($application->contract) {
                    if ($application->contract->current_payment_times == 0) {
                        $time = $application->contract->created_at->addDays(10);
                    } else {
                        $time = $application->contract->created_at->addMonths($application->contract->current_payment_times);
                    }
                    $property['next_payment_date'] = $time->format('Y-m-d');
                }
                return $property;
            });

        return $properties;
    }

    public function storePlan($params, $property_id)
    {
        
        $plan;
        if (isset($params['id'])) {
            $plan = PropertyPlan::where('property_id', $params['id'])->get();
            $plan->delete();
        } 
        $plan = new PropertyPlan;
        $plan->property_id = $property_id;
        
        
        foreach($params['plan'] as $param) {
            
            $plan->name = $param["name"];
            $plan->description = $param["description"];
            $plan->area = $param["area"];
            $plan->rooms = $param["rooms"];
            $plan->baths = $param["baths"];
            $plan->save();
        }
        
        return $plan;
    }

    public function storeProperty($params)
    {
        
        $property;
        if (isset($params['id'])) {
            $property = Property::find($params['id']);
        } else {
            $property = new Property;
        }
        if (isset($params['title'])) {
            $property->title = $params['title'];
        }
        if (isset($params['description'])) {
            $property->description = $params['description'];
        }
        if (isset($params['property_type'])) {
            $property->property_type_id = $params['property_type'];
        }
        if (isset($params['featured'])) {
            $property->featured = $params['featured'];
        }
        if (isset($params['user'])) {
            $property->user_id = $params['user'];
        } else {
            $property->user_id = Auth::user()->id;
        }

        $property->save();

        if (isset($params['additional_features'])) {
            $afparams = $params['additional_features'];
            foreach ($afparams as $key) {
                $afeature = PropertyAdditionalFeature::where('property_id', $property->id)->where('name', $key)->first();
                if (!$afeature) {
                    $afeature = new PropertyAdditionalFeature;
                    $afeature->property_id = $property->id;
                }
                $afeature->name = $key["name"];
                $afeature->value = $key["value"];
                // $afeature->value = $value;
                
                $afeature->save();
            }
        }

        if (isset($params['features'])) {
            foreach($params['features'] as $fid) {
                $feature = PropertyFeature::find($fid);
                if (!$feature) {
                    $property->propertyFeatures()->attach($fid);
                }
            }
        }

        if (isset($params['status'])) {
            foreach ($params['status'] as $sid) {
                $status = PropertyStatus::find($sid);
                if ($status) {
                    $property->propertyStatus()->attach($sid);
                }
            }
        }

        if (isset($params['details'])) {
            foreach ($params['details'] as $param) {
                $detail = PropertyDetail::where('property_id', $property->id)->where('name', $param["name"])->first();
                if (!$detail) {
                    $detail = new PropertyDetail;
                    $detail->property_id = $property->id;
                }
               
                $detail->name = $param["name"];
                $detail->value = $param["value"];
                $detail->save();
            }
        }
        return $property;
    }

}
