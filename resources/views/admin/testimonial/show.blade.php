@extends('admin.layouts.master')
@section('content')
<div class="bg-white p-4">
    <p><strong>Title:</strong> {{$testimonial->title}}</p>
    <p><strong>Name:</strong> {{$testimonial->name}}</p>
    <p><strong>Description:</strong> {{$testimonial->description}}</p>
    <p><strong>Image:</strong></p>
    <img  src="{{ asset('storage/images/testimonials/'.$testimonial->image) }}" class="img-fluid" style="height: 200px;" alt="{{$testimonial->image}}">
</div>
@endsection

@section('script')
@endsection
