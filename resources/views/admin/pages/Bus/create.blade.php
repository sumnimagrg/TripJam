@extends('admin.inc.main')
@section('container')
    <div class="container mt-3">
        
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center"
                style="background-color: rgb(213, 203, 203)">
                <h5 class="mb-0">Create Bus</h5>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="{{ route('bus.store') }}">
                    @csrf
                    <label>Bus Number:</label>
                <input type="text" name="bus_no" required>

                <label>Capacity:</label>
                <input type="number" name="capacity" required>
                
                <label>Type:</label>
                <input type="text" name="type" required>
            
                <button type="submit" class="my-3 btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>

@endsection