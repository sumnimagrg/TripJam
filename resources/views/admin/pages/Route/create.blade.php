@extends('admin.inc.main')

@section('container')
<!-- Add Route Modal -->
@if (Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container mt-3">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center"
            style="background-color: rgb(213, 203, 203)">
        <h3 class="mb-0">Add Route</h3>
        </div> <br>
        <div class="card-body">
        <form enctype="multipart/form-data" method='post' action="{{route('route.store')}}">
            @csrf
            <label>Route Name:</label>
            <input type="text" name="route_name" required>
<br>
            <label>Start Location:</label>
            <input type="text" name="start_location" required>
<br>
            <label>End Location:</label>
            <input type="text" name="end_location" required>
            <br>

            <label>Distance:</label>
            <input type="text" name="distance" required>
<br>
            <button type="submit" class="my-3 btn btn-primary">Add</button>
        </form>
    </div>
</div>
</div>
@endsection