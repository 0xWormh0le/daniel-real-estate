<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Property;
use App\Models\PropertyPlan;
use App\Logic\Property\PropertyRepository;


class PlanController extends Controller 
{
    protected $repository;

    public function __construct(PropertyRepository $repo)
    {
        $this->repository = $repo;
    }

    public function index(Request $request)
    {

    }

    public function show($id)
    {
        
    }

    public function store(Request $request, $property_id)
    {
        $input = $request->only(['id', 'name', 'description', 'area', 'rooms', 'baths', 'attachment_id']);
        $property = Property::find($property_id);
        if ($property == null) {
            return response(json_encode([
                'success' => false,
                'message' => 'Property not found'
            ]), 404)->header('Content-Type', 'text/json');
        }
        if (isset($input['id'])) {
            $plan = PropertyPlan::find($input['id']);
            if ($plan == null) {
                return response(json_encode([
                    'success' => false,
                    'message' => 'Plan not found'
                ]), 404)->header('Content-Type', 'text/json');
            }
        }
        
        $plan = $this->repository->storePlan($input, $property_id);
        return response()->json(['success' => true, 'plan' => $plan]);
    }

    public function update(Request $request, $id)
    {

    }

    public function delete(Request $request, $id)
    {
        $plan = PropertyPlan::find($id);
        if ($plan == null) {
            return response(json_encode([
                'success' => false,
                'message' => 'Plan not found'
            ]), 404)->header('Content-Type', 'text/json');
        }
        $plan->gallery()->delete();
        $plan->delete();
        return response()->json(['success' => true]);
    }
}