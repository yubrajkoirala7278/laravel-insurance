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
                    @if(auth()->user()->is_admin==1)
                        <th scope="col">Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->is_admin === 1 ? 'Admin' : 'User' }}</td>
                        @if(auth()->user()->is_admin==1)
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="userForm"
                                data-user-id="{{ $user->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" data-bs-toggle="modal" data-bs-target="#deleteUser"
                                    class="btn btn-danger deleteButton">Delete</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- delete user modal -->
        <div class="modal fade" id="deleteUser" tabindex="-1" data-bs-backdrop="static" aria-labelledby="deleteUserLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="text-center">
                        <lord-icon src="https://cdn.lordicon.com/hjbrplwk.json" trigger="loop" delay="1000"
                            style="height:150px;width:150px"></lord-icon>
                        <h2>Are you sure you want to delete this record?</h2>
                        <p>If you delete this, it will be gone forever.</p>
                    </div>
                    <div class="pb-3 d-flex justify-content-end align-items-center pe-3" style="flex-wrap: wrap; gap:10px">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger deleteConfirm">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal --}}
    </div>
@endsection

@section('script')
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        var deleteButton = document.querySelectorAll('.deleteButton');
        deleteButton.forEach(function(button) {
            button.addEventListener('click', function() {
                var userId = button.closest('form').getAttribute('data-user-id');
                document.querySelector('.deleteConfirm').setAttribute('data-user-id', userId);
            });
        });

        var deleteConfirmButton = document.querySelector('.deleteConfirm');
        deleteConfirmButton.addEventListener('click', function() {
            var userId = deleteConfirmButton.getAttribute('data-user-id');
            var form = document.querySelector('.userForm[data-user-id="' + userId + '"]');
            form.submit();
        });
    </script>
@endsection
