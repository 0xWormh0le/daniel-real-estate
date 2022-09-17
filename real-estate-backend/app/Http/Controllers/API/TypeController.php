<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PropertyType;


class TypeController extends Controller 
{
    public function index(Request $request)
    {
        return response()->json(PropertyType::all());
    }

    public function show($id)
    {
        
    }

    public function store(Request $request)
    {
        $input = $request->only(['id', 'name']);
        $type;
        if (isset($input['id'])) {
            $type = PropertyType::find($input['id']);
            if (!$type) {
                return response(json_encode([
                    'success' => false,
                    'message' => 'Property type not found'
                ]), 404)->header('Content-Type', 'text/json');
            }
        } else {
            $type = new PropertyType;
        }
        $type->name = $input['name'];
        $type->save();
        return response()->json(['success' => true, 'type' => $type]);
    }

    public function update(Request $request, $id)
    {

    }

    public function delete(Request $request, $id)
    {
        $type = PropertyType::find($id);
        if ($type == null) {
            return response(json_encode([
                'success' => false,
                'message' => 'Property type not found'
            ]), 404)->header('Content-Type', 'text/json');
        }
        $type->delete();
        return response()->json(['success' => true]);
    }
}