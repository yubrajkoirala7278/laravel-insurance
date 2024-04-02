@extends('admin.layouts.master')
@section('css')
    <style>
        h2 {
            color: #17479D;
        }
    </style>
@endsection
@section('content')
    <div class="bg-white p-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fs-5 fw-bold">Testimonials</h2>
            <a href="{{ route('testimonials.create') }}" class="text-success"><i class="fa-solid fa-user-plus"></i></a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Title</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($testimonials)>0)
                @foreach ($testimonials as $key=>$testimonial)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$testimonial->title}}</td>
                    <td>{{$testimonial->name}}</td>
                    <td> <img  src="{{ asset('storage/images/testimonials/'.$testimonial->image) }}" style="height: 30px" alt="{{$testimonial->image}}"></td>
                    <td>{{Str::limit($testimonial->description, 20)}}</td>
                    <td>
                        <div class="d-flex align-items-center" style="flex-wrap:wrap;gap:8px">
                            <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST"
                                class="testimonialForm" data-testimonial-id="{{ $testimonial->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" data-bs-toggle="modal" data-bs-target="#deletetestimonial"
                                    class="btn btn-transparent text-danger p-0 deletetestimonialButton"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                            <a href="{{ route('testimonials.show', $testimonial->id) }}" class="text-success"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="text-warning"><i class="fa-solid fa-pencil"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                    <td colspan="20" class="text-center">
                        <span>No data to display</span>
                    </td>
                @endif
               
               
            </tbody>

        </table>
    </div>

    <!-- delete testimonial modal -->
    <div class="modal fade" id="deletetestimonial" tabindex="-1" data-bs-backdrop="static" aria-labelledby="deletetestimonialLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class=" text-center">
                    <lord-icon src="https://cdn.lordicon.com/hjbrplwk.json" trigger="loop" delay="1000"
                        style="height:150px;width:150px"></lord-icon>
                    <h2>Are you sure you want to delete this record?</h2>
                    <p>If you delete this, it will be gone forever.</p>
                </div>
                <div class="pb-3 d-flex justify-content-end align-items-center pe-3 " style="flex-wrap: wrap;gap:10px">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger deleteConfirm">Delete</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
@endsection


@section('script')
    <script>
        var deletetestimonialButton = document.querySelectorAll('.deletetestimonialButton');
        deletetestimonialButton.forEach(function(button) {
            button.addEventListener('click', function() {
                var testimonialId = button.closest('.d-flex').querySelector('.testimonialForm').getAttribute(
                    'data-testimonial-id');
                document.querySelector('.deleteConfirm').setAttribute('data-testimonial-id', testimonialId);
            });
        });

        var deleteConfirmButton = document.querySelector('.deleteConfirm');
        deleteConfirmButton.addEventListener('click', function() {
            var testimonialId = deleteConfirmButton.getAttribute('data-testimonial-id');
            var form = document.querySelector('.testimonialForm[data-testimonial-id="' + testimonialId + '"]');
            form.submit();
        });
    </script>
@endsection
