@extends('admin.inc.main')
@section('container')


    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



    <div class="container my-3">
        <a href="{{ route('trainer.create') }}" class="btn btn-primary my-4">Add</a>
        <table class="table table-secondary 
         table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Trainer Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Profession</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $trainer)
                
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $trainer->trainer_name }}</td>
                        {{-- <td>{{ $trainer->img }}</td> --}}
                        <td><img src="{{ asset('uploads/' . $trainer->img) }}" alt="{{ $trainer->trainer_name }}" width="50"></td>
                        <td>{{ $trainer->profession }}</td>
                        <td>{{ $trainer->description }}</td>
                        <td>
                            <a href="{{ route('trainer.edit', $trainer->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('trainer.show', $trainer->id) }}" class="btn btn-warning btn-sm">Show</a>


                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $trainer->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $trainer->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog        ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close btn" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure?☠
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('trainer.destroy', $trainer->id) }}" method="POST"
                                                enctype="multipart/form-data">
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
        {{ $trainers->links() }}
    </div>

@endsection