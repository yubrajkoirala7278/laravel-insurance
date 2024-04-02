@extends('admin.layouts.master')
@section('css')
<style>
    .password-field {
        position: relative
    }

    .password-field .btn {
        position: absolute;
        top: 0px;
        right: 0px;
    }
</style>
@endsection
@section('content')
<div class="py-4 px-5 bg-white">
    <h2 class=" fw-bold fs-5 mb-3 mt-0 pt-0" style="color: #012970">Add User</h2>
    <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('user.register')}}">
        @csrf
        {{-- name --}}
        <div class="col-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
            @if ($errors->has('name'))
            <span class="text-danger">{{$errors->first('name')}}</span>
            @endif
        </div>
        {{-- email --}}
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{old('email')}}">
            @if ($errors->has('email'))
            <span class="text-danger">{{$errors->first('email')}}</span>
            @endif
        </div>

        {{-- password --}}
        <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <div class="password-field">
                <input type="password" name="password" class="form-control">
                <button type="button" class="btn btn-transparent toggle-password" data-target="password">
                    <i class="far fa-eye"></i>
                </button>
            </div>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>

        {{-- confirm password --}}
        <div class="col-12">
            <label for="password" class="form-label">Enter Confirm Password</label>
            <div class="password-field">
                <input type="password" name="password_confirmation" class="form-control">
                <button type="button" class="btn btn-transparent toggle-password" data-target="password_confirmation">
                    <i class="far fa-eye"></i>
                </button>
            </div>
            @if ($errors->has('password_confirmation'))
            <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
            @endif
        </div>

        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Create Account (Register)</button>
        </div>
    </form>

</div>
@endsection





