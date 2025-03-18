@extends('admin.inc.main')

@section('container')
<!-- Edit Route Modal -->
<div class="container mt-3">
        
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center"
            style="background-color: rgb(213, 203, 203)">
            <h3>Edit Route</h3>
        </div>
        <br>
        <div class="card-body">
        <form action="{{route('route.update', $route->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label>Route Name:</label>
            <input type="text" name="route_name" id="edit_route_name" value="{{ $route->route_name}}" required>

            <label>Start Location:</label>
            <input type="text" name="start_location" id="edit_startLocation" value="{{ $route->start_location}}"  required>

            <label>End Location:</label>
            <input type="text" name="end_location" id="edit_endLocation" value="{{ $route->end_location}}"  required>
            
            <label>Distance:</label>
            <input type="text" name="distance" id="edit_distance" value="{{ $route->distance}}"  required>

            <button type="submit" class="my-3 btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>  
</div>
@endsection