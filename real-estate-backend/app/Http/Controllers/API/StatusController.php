<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PropertyStatus;


class StatusController extends Controller 
{
    public function index(Request $request)
    {
        return response()->json(PropertyStatus::all());
    }

    public function show($id)
    {
        
    }

    public function store(Request $request)
    {
        $input = $request->only(['id', 'name']);
        $status;
        if (isset($input['id'])) {
            $status = PropertyStatus::find($input['id']);
            if (!$status) {
                return response(json_encode([
                    'success' => false,
                    'message' => 'Status not found'
                ]), 404)->header('Content-Type', 'text/json');
            }
        } else {
            $status = new PropertyStatus;
        }
        $status->name = $input['name'];
        $status->save();
        return response()->json(['success' => true, 'status' => $status]);
    }

    public function update(Request $request, $id)
    {

    }

    public function delete(Request $request, $id)
    {
        $status = PropertyStatus::find($id);
        if ($status == null) {
            return response(json_encode([
                'success' => false,
                'message' => 'Status not found'
            ]), 404)->header('Content-Type', 'text/json');
        }
        $status->properties()->sync([]);
        $status->delete();
        return response()->json(['success' => true]);
    }
}