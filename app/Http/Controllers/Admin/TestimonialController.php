<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use App\Service\TestimonialService;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private $testimonialService;
    function __construct()
    {
        $this->testimonialService = new TestimonialService();
    }

    public function index()
    {
        try {
            $testimonials = $this->testimonialService->fetchTestimonials();
            return view('admin.testimonial.index', compact('testimonials'));
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(TestimonialRequest $request)
    {
        try {
            $this->testimonialService->storeService($request->except(['_token']));
            return redirect()->route('admin.testimonials.index')->with('success','Testimonial added successfully!');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy(Testimonial $testimonial)
    {
        try {
            $this->testimonialService->deleteService($testimonial);
            return back()->with('success', 'Testimonial deleted successfully!');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function show(Testimonial $testimonial){               
       try{
            return view('admin.testimonial.show',compact('testimonial'));
       }catch(\Throwable $th){
        return back()->with('error',$th->getMessage());
       }
    }

    public function edit(Testimonial $testimonial){
        try{
            return view('admin.testimonial.edit',compact('testimonial'));
       }catch(\Throwable $th){
        return back()->with('error',$th->getMessage());
       }
    }

    public function update(TestimonialRequest $request,Testimonial $testimonial){
      try{
       $this->testimonialService->updateService($request->except('_method', '_token'),$testimonial);
       return redirect()->route('admin.testimonials.index')->with('success','Testimonial updated successfully');

      }catch(\Throwable $th){
        return back()->with('error',$th->getMessage());
      }
    }
}
