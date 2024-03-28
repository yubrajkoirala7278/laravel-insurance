@extends('admin.layouts.master')
@section('content')
    <div class="bg-white p-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fs-6 fw-bold">Users</h2>
            @if (Auth::user()->is_admin)
                <a href="{{ route('user.register') }}" class="text-success"><i class="fa-solid fa-user-plus"></i></a>
            @endif
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Users</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->is_admin === 1 ? 'Admin' : 'User' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
