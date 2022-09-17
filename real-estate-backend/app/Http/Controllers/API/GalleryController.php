<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Property;
use App\Models\PropertyGallery;
use App\Models\PropertyPlan;
use App\Logic\Property\GalleryRepository;


class GalleryController extends Controller 
{
    protected $repository;

    public function __construct(GalleryRepository $repo)
    {
        $this->repository = $repo;
    }

    public function store(Request $request, $property_id, $plan_id=0)
    {
        $input = $request->only(['type', 'name', 'attachment_id']);
        $gallery = $this->repository->storeGallery($input, $property_id, $plan_id);
        if ($gallery) {
            return response()->json($gallery);
        } else {
            return response(json_encode([
                'success' => false,
                'message' => 'Gallery not found'
            ]), 404)->header('Content-Type', 'text/json');
        }
    }

    public function storeAttachment(Request $request)
    {
        $file = $request->file('attachment');
        if (!$file) {
            return response(json_encode([
                'success' => false,
                'message' => 'Bad request'
            ]), 400)->header('Content-Type', 'text/json');
        }
        $params = $request->only(['id', 'link']);
        $attach = $this->repository->storeAttachment($file, $params);
        if ($attach) {
            return response()->json(['success' => true]);
        } else {
            return response(json_encode([
                'success' => false,
                'message' => 'Bad request'
            ]), 400)->header('Content-Type', 'text/json');
        }
    }

    public function delete(Request $request, $id)
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