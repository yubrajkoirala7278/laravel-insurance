@extends('admin.layouts.master')
@section('content')
<div class="bg-white p-4">
    <p><strong>Name:</strong> {{$contact->name}}</p>
    <p><strong>Email:</strong> {{$contact->email}}</p>
    <p><strong>Phone:</strong> {{$contact->phone}}</p>
    <p><strong>Subject:</strong> {{$contact->subject}} </p>
    <p class="fw-bold fs-5">Message</p>
    <pre style="overflow: hidden;text-align:justify">{{$contact->message}}</pre>
</div>
@endsection

@section('script')
@endsection