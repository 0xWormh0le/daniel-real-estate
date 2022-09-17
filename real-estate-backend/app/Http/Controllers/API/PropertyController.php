<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Property;
use App\Models\PropertyGallery;
use App\Models\PropertyPlan;
use App\Models\PropertySell;
use App\Models\Application;
use App\Models\Contract;
use App\Models\HistoryPayment;

use App\Logic\Property\PropertyRepository;


class PropertyController extends Controller 
{
    protected $repository;

    public function __construct(PropertyRepository $repo)
    {
        $this->repository = $repo;
    }

    public function index(Request $request)
    {
        $where = [];
        if ($request->has('propertyType')) {
            $where[] = ['property_type_id', '=', $request->input('propertyType')];
        }
        if ($request->has('agent')) {
            $where[] = ['user_id', '=', $request->input('agent')];
        }
        if ($request->has('featured')) {
            $where[] = ['featured',  '=', 1];
        }

        $userWhere = [];
        if ($request->has('company')) {
            $userWhere[] = ['company_id', '=', $request->input('company')];
        }
        if ($request->has('agentType')) {
            $userWhere[] = ['user_type', '=', $request->input('agentType')];
        }

        $result = $this->repository->searchProperties($where, $userWhere);
        return response()->json($result);
    }

    public function application($id) 
    {
        $application = Application::find($id);
        $contract = $application->contract;
        if ($contract) {
            $application = $application->toArray();
            $property = $contract->property;
            $history_payment = $contract->historyPayment;
            $application['contract'] = $contract->toArray();
            $application['history_payment'] = $history_payment->toArray();
            $application['property'] = $property->toArray();
        }
        else
        {
            $res = $application;
            $application = $application->toArray();
            $application['property'] = $res->property->toArray();
        }
        return response()->json($application);
    }
    public function purchasedProperties(Request $request)
    {
        $user = auth('api')->user();
        $result = $this->repository->purchasedProperties($user->id);
        return response()->json($result);
    }

    public function stopRent(Request $request, $id)
    {
        $user = auth('api')->user();
        $sell = PropertySell::where('user_id', $user->id)
            ->where('property_id', $id)
            ->first();
        
        if (is_null($sell)) {
            return response()->json(['message' => 'Can\'t stop rent'], 400);
        }

        $sell->delete();
    }

    public function related(Request $request, $id)
    {
        $result = $this->repository->searchProperties([], []);
        return response()->json($result);
    }

    public function show($id)
    {
        $property = Property::find($id);
        if ($property) {
            return response()->json($property);
        } else {
            return response(json_encode([
                'success' => false,
                'message' => 'Property not found'
            ]), 404)->header('Content-Type', 'text/json');
        }
    }

    public function store(Request $request)
    {
        dd($request->all());
        $input = $request->only([
            'id', 'title', 'description', 'featured', 'user', 'property_type', // basic
            'additional_features', 'features', 'status', // associated
            'details'
        ]);

        if (isset($input['id'])) {
            $property = Property::find($input['id']);
            if ($property == null) {
                return response(json_encode([
                    'success' => false,
                    'message' => 'Property not found'
                ]), 404)->header('Content-Type', 'text/json');
            }
        }
    }

    public function storePlan(Request $request, $property_id)
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
        $property = Property::find($id);
        if ($property == null) {
            return response(json_encode([
                'success' => false,
                'message' => 'Property not found'
            ]), 404)->header('Content-Type', 'text/json');
        }
        $property->delete();
        return response()->json(['success' => true]);
    }

    public function deletePlan(Request $request, $id)
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

    public function deleteGallery(Request $request, $id)
    {
        $gallery = PropertyGallery::find($id);
        if ($gallery == null) {
            return response(json_encode([
                'success' => false,
                'message' => 'Gallery not found'
            ]), 404)->header('Content-Type', 'text/json');
        }
        $gallery->delete();
        return response()->json(['success' => true]);
    }
}