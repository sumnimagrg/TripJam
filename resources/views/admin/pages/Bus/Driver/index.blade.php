@extends('admin.inc.main')

@section('container')

    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container py-4">
        <a href="{{ route('driver.create') }}" class="btn btn-primary my-3">Add Driver</a>
        
        <table class="table table-secondary table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Driver Name</th>
                    <th scope="col">Bus Number</th>
                    <th scope="col">License No.</th>
                    <th scope="col">Experience (Years)</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $driver->name }}</td>
                        <td>{{ $driver->bus->bus_no ?? 'N/A' }}</td>
                        <td>{{ $driver->license_no }}</td>
                        <td>{{ $driver->experience }}</td>
                        <td>
                            @if ($driver->image)
                                <a target="_blank" href="{{ asset('uploads/' . $driver->image) }}">
                                    <img src="{{ asset('uploads/' . $driver->image) }}" alt="Profile Image" width="100px" height="100px">
                                </a>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('driver.edit', $driver->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('driver.show', $driver->id) }}" class="btn btn-warning btn-sm">Show</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $driver->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{ $driver->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                                            <button type="button" class="btn-close btn" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this driver? 🚫
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('driver.destroy', $driver->id) }}" method="POST">
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
