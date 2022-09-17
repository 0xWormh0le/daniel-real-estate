<?php

namespace App\Logic\Property;

use App\Models\Attachment;
use App\Models\Property;
use App\Models\PropertyGallery;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use Image;

class GalleryRepository
{
    public function storeGallery($params, $property_id, $plan_id)
    {
        $gallery;
        if (isset($params['id'])) {
            $gallery = PropertyGallery::find($params['id']);
            if (!$gallery) {
                return null;
            }
        } else {
            $gallery = new PropertyGallery;
            $gallery->property_id = $property_id;
            $gallery->plan_id = $plan_id;
        }
        if (isset($params['type'])) {
            $gallery->type = $params['type'];
        }
        if (isset($params['name'])) {
            $gallery->name = $params['name'];
        }
        if (isset($params['attachment_id'])) {
            $gallery->attachment_id = $params['attachment_id'];
        }
        $gallery->save();
        return $plan;
    }

    public function storeAttachment($file, $params)
    {
        $att;
        if (isset($params['id'])) {
            $att = Attachment::find($params['id']);
            if (!$att) {
                return null;
            }
        } else {
            $att = new Attachment;
        }
        $filename = $file->getClientOriginalName();
        $image_resize = Image::make($image->getRealPath());
        $name = md5(time());
        $small_file = 'uploads/galleries/small/' . $name . '.jpg';
        $medium_file = 'uploads/galleries/medium/' . $name . '.jpg';
        $big_file = 'uploads/galleries/big/' . $name . '.jpg';

        $image_resize->resize(env(BIG_IMAGE_SIZE));
        $image_resize->save(storage_path('app/public/storage/' . $big_file));
        $image_resize->resize(env(MEDIUM_IMAGE_SIZE));
        $image_resize->save(storage_path('app/public/storage/' . $medium_file));
        $image_resize->resize(env(SMALL_IMAGE_SIZE));
        $image_resize->save(storage_path('app/public/storage/' . $small_file));
        $att->big = $big_file;
        $att->medium = $medium_file;
        $att->small = $small_file;
        $att->save();

        return $att;
    }

}
