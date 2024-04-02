<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $testimonials=Testimonial::all();
        return view('frontend.home.index',compact('testimonials'));
    }
}
