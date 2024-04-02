<?php

namespace App\Service;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialService
{
    // =============POST===============
    public function storeService($request)
    {
        // store single image in local storage folder
        if (isset($request['image'])) {
            $timestamp = now()->timestamp;
            $originalName = $request['image']->getClientOriginalName();
            $imageName = $timestamp . '-' . $originalName;
            $request['image']->storeAs('public/images/testimonials', $imageName);

            // update the image name in the $request array
            $request['image'] = $imageName;
        };

        // store in database table
        Testimonial::create($request);
    }
    // ========================================

    // ============GET ALL====================
    public function fetchTestimonials(){
      $testimonials=Testimonial::latest()->get();
    return $testimonials;
    }
    // =======================================

    // =========DELETE===============
    public function deleteService($testimonial){
         // delete image from local storage
        if(isset($testimonial->image)){
            Storage::delete('public/images/testimonials/'.$testimonial->image);
        }
        $testimonial->delete();
    }
    // ==============================

    // ===========UPDATE============
    public function updateService($request,$testimonial){
        // Check if a new image is uploaded
        if(isset($request['image'])){
            // Delete the old image from storage folder
            Storage::delete('public/images/testimonials/'.$testimonial->image);
            // Store the new image
            $timestamp = now()->timestamp;
            $originalName = $request['image']->getClientOriginalName();
            $imageName = $timestamp . '-' . $originalName;
            $request['image']->storeAs('public/images/testimonials', $imageName);
            // Update the image name in the $request array
            $request['image'] = $imageName;
        } else {
            $request['image'] = $testimonial->image;
        }

        // Update in database table
        $testimonial->update($request);
    }
    // =============================
}
