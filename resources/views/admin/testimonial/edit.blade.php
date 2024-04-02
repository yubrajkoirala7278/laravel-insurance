@extends('admin.layouts.master')
@section('content')
<div class="py-4 px-5 bg-white">
    <h2 class=" fw-bold fs-5 mb-3 mt-0 pt-0" style="color: #012970">Edit Testimonials</h2>
    <form class="row g-3" method="POST" action="{{route('testimonials.update',$testimonial->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- title --}}
        <div class="col-12">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{old('title', $testimonial->title)}}">
            @if ($errors->has('title'))
                <span class="text-danger">{{$errors->first('title')}}</span>
            @endif
        </div>

        {{-- name --}}
        <div class="col-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control"  value="{{old('name', $testimonial->name)}}">
            @if ($errors->has('name'))
            <span class="text-danger">{{$errors->first('name')}}</span>
            @endif
        </div>

         {{-- image --}}
         <div class="col-12">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" >
            @if ($errors->has('image'))
            <span class="text-danger">{{$errors->first('image')}}</span>
            @endif
        </div>

         {{-- description --}}
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" placeholder="Description" id="description" name="description">{{old('description', $testimonial->description)}}</textarea>
            @if ($errors->has('description'))
            <span class="text-danger">{{$errors->first('description')}}</span>
            @endif
        </div>
        {{-- submit --}}
        <div class="col-12 ">
            <button class="btn btn-primary w-100" type="submit">Submit</button>
        </div>
    </form>

</div>
@endsection





