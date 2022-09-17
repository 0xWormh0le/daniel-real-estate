<?php

namespace App\Observers;

use App\Property;

class PropertyObserver
{
    /**
     * Handle the property "created" event.
     *
     * @param  \App\Property  $property
     * @return void
     */
    public function created(Property $property)
    {
        //
    }

    /**
     * Handle the property "updated" event.
     *
     * @param  \App\Property  $property
     * @return void
     */
    public function updated(Property $property)
    {
        //
    }

    /**
     * Handle the property "deleted" event.
     *
     * @param  \App\Property  $property
     * @return void
     */
    public function deleted(Property $property)
    {
        $property->propertyDetails()->delete();
        $property->propertyFeatures()->sync([]);
        $property->propertyStatus()->sync([]);
        $property->propertyAdditionalFeatures()->delete();
        $property->propertyGalleries()->delete();
        $property->propertyPlans()->delete();
        $property->descriptions()->delete();
        $property->propertySell()->delete();
    }

    /**
     * Handle the property "restored" event.
     *
     * @param  \App\Property  $property
     * @return void
     */
    public function restored(Property $property)
    {
        //
    }

    /**
     * Handle the property "force deleted" event.
     *
     * @param  \App\Property  $property
     * @return void
     */
    public function forceDeleted(Property $property)
    {
        //
    }
}
