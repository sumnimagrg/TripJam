@extends('admin.inc.main')

@section('container')

    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container py-4">
        <a href="{{ route('busRoute.create') }}" class="btn btn-primary my-3">Add Bus Route</a>
        
        <table class="table table-secondary table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Bus Number</th>
                    <th scope="col">Route Name</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Fare</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Route as $busRoute)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $busRoute->bus->bus_no ?? 'N/A' }}</td>
                        <td>{{ $busRoute->route->route_name ?? 'N/A' }}</td>
                        
                        <td>{{ $busRoute->departure_time }}</td>
                        <td>{{ $busRoute->arrival_time }}</td>
                        <td>{{ $busRoute->fare }}</td>
                        <td>
                            <a href="{{ route('busRoute.edit', $busRoute->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('busRoute.show', $busRoute->id) }}" class="btn btn-warning btn-sm">Show</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $busRoute->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{ $busRoute->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                                            <button type="button" class="btn-close btn" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this bus route? 🚫
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('busRoute.destroy', $busRoute->id) }}" method="POST">
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
