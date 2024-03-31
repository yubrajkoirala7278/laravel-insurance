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
            <h2 class="fs-5 fw-bold ">Contact Message</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $key => $contact)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ Str::limit($contact->message, 20) }}</td>
                        <td>
                            <div class="d-flex align-items-center" style="flex-wrap:wrap;gap:8px">
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" id="contactForm">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#deleteContact"
                                        class="btn btn-transparent text-danger p-0 "><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                                <a href="{{ route('contact.show', $contact->id) }}" class="text-success"><i
                                        class="fa-solid fa-eye"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $contacts->links() }}
    </div>
    {{-- onclick="return confirm('Are you sure?')" --}}

    <!-- delete contact modal -->
    <div class="modal fade" id="deleteContact" tabindex="-1" data-bs-backdrop="static" aria-labelledby="deleteContactLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class=" text-center">
                    <lord-icon src="https://cdn.lordicon.com/hjbrplwk.json" trigger="loop" delay="1000"
                        style="height:150px;width:150px">
                    </lord-icon>
                    <h2>Are you sure you want to delete this record?</h2>
                    <p>If you delete this, it will be gone forever.</p>
                </div>
                <div class="pb-3 d-flex justify-content-end align-items-center pe-3 " style="flex-wrap: wrap;gap:10px">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" onclick="deleteContact()">Delete</button>
                </div>
            </div>
        </div>
    </div>

    {{-- end modal --}}
@endsection

@section('script')
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function deleteContact(){
            document.forms["contactForm"].submit();
        }
    </script>
@endsection
