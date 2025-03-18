@extends('admin.inc.main')
@section('container')

<!-- Edit Bus Modal -->
<div class="container mt-3">
        
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center"
            style="background-color: rgb(213, 203, 203)">
            <h5 class="mb-0">Create Bus</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('bus.update', $bus->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="editBusNumber">Bus Number:</label> 
                <input type="text" name="bus_no" id="editBusNumber" value="{{ $bus->bus_no}}" name="bus_no" required>


                <label for="editBusCapacity">Capacity:</label>
                <input type="number" name="capacity" id="editBusCapacity" value="{{ $bus->capacity}}" name="capacity" required>
                
                <label for="editBusType">Type:</label>
                <input type="text" name="type" id="editBusType" value="{{ $bus->type}}" name="type" required>

                <button type="submit" class="my-3 btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>

@endsection