@extends('admin.inc.main')

@section('container')
<!-- Edit Route Modal -->
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
        <h3 class="mb-0">Edit Bus Route</h3>
        </div> <br>
        <div class="card-body">
        <form enctype="multipart/form-data" method='post' action="{{route('busRoute.update',$busRoute->id)}}">
            @csrf
            @method('PUT')

             <!-- Bus ID Dropdown -->
             <label for="bus_id">Bus:</label>
             <select name="bus_id" id="bus_id" class="form-control" required>
                 <option value="" disabled selected>Select a Bus</option>
                 @foreach($bus as $b)
                     <option value="{{$b->id }}" {{ old('bus_id',$busRoute->bus_id) ==$b->id ? 'selected': '' }}>
                        {{$b->bus_no}}
                     </option>
                 @endforeach
             </select>
             <br>

             <!-- Route Dropdown -->
             <label for="route_id">Route:</label>
             <select name="route_id" id="route_id" class="form-control" required>
                 <option value="" disabled selected>Select a Route</option>
                 @foreach($route as $r)
                     <option value="{{ $r->id }}" {{ old('route_id', $busRoute->route_id ) == $r->id ? 'selected': ''}}>
                        {{$r->route_name}}
                     </option>
                 @endforeach
             </select>
             <br>
             
            <label>Departure Time:</label>
            <input value="{{$busRoute->departure_time}}" type="text" name="departure_time" required>
            <br>

            <label>Arrival Time:</label>
            <input value="{{$busRoute->arrival_time}}" type="text" name="arrival_time" required>
<br>
            <label>Fare:</label>
            <input value="{{$busRoute->fare}}" type="text" name="fare" required>
<br>
            <button type="submit" class="my-3 btn btn-primary">Update</button>
        </form>
    </div>
</div>
</div>
@endsection