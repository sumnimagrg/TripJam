@extends('admin.inc.main')
@section('container')
    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container py-4">
        <a href="{{ route('file.create') }}" class="btn btn-primary my-3">Add</a>
        <table class="table table-secondary 
         table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($files as $file)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $file->title }}</td>
                        <td><a target="_blank" href="{{ asset('uploads/' . $file->image) }}">
                                <img src="{{ asset('uploads/' . $file->image) }}" alt="" width="100px"
                                    height="100px">
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('file.edit', $file->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('file.show', $file->id) }}" class="btn btn-warning btn-sm">Show</a>

         <!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
    data-bs-target="#deleteModal{{ $file->id }}">
    Delete
</button>

<!-- Modal -->
<div class="modal fade" id="deleteModal{{ $file->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $file->id }}"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel{{ $file->id }}">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete <strong>{{ $file->title }}</strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form action="{{ route('file.destroy', $file->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection