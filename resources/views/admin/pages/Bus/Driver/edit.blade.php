@extends('admin.inc.main')

@section('container')
<!-- Add Driver Modal -->
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
            <h3 class="mb-0">Update Driver</h3>
        </div> <br>
        <div class="card-body">
            <form enctype="multipart/form-data" method="post" action="{{ route('driver.update', $driver->id)}}">
                @csrf
                @method('PUT')
                <label for="name">Driver Name:</label>
                <input value="{{$driver->name}}" type="text" id="name" name="name" class="form-control" required>
                @error('name')
                                    <p class="text-red-400 font-medium">{{$message}}</p>
                                @enderror
                           
                <br>

              <!-- Bus ID Dropdown -->
    <label for="bus_id">Bus:</label>
    <select name="bus_id" id="bus_id" class="form-control" required>
        @error('bus_id')
                                    <p class="text-red-400 font-medium">{{$message}}</p>
                                @enderror
                           
        <option value="" disabled selected>Select a Bus</option>
        @foreach($bus as $b)
            <option value="{{ $b->id }}" {{ old('bus_id', $driver->bus_id) == $b->id ? 'selected' : '' }}>
                {{ $b->bus_no }}
            </option>
        @endforeach
    </select>
    <br>

                <label for="license_no">License No.:</label>
                <input value="{{$driver->license_no}}" type="text" id="license_no" name="license_no" class="form-control" required>
                @error('license_no')
                <p class="text-red-400 font-medium">{{$message}}</p>
            @enderror
                <br>

                <label for="experience">Experience (Years):</label>
                <input value="{{$driver->experience}}" type="text" id="experience" name="experience" class="form-control" required>
                @error('experience')
                                    <p class="text-red-400 font-medium">{{$message}}</p>
                                @enderror
                                          <br>

                                          {{-- editimage --}}
                                          <div class="mb-3">
                                            <div class="form-group col-12 mb-0">
                                                <label class="col-form-label">Image</label>
                                            </div>
                                            <!-- image box where image from model come -->
                                            <div class="input-group mb-3 col-12">
                                                <input id="imagebox" type="text" class="form-control" name="image" readonly
                                                    value="{{ $driver->image }}">
                                                <!-- img come above ☝ -->
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                                        data-bs-target="#modalId">
                                                        Choose Image
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- we use modal to choose image -->
                                            <div class="mb-3">
                                                <!-- Modal trigger button -->
                    
                                                <!-- Modal Body -->
                                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                                <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static"
                                                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <!-- styled to see which image is selected  as type radio opacity is 0-->
                                                                    <style>
                                                                        [type=radio]:checked+img {
                                                                            outline: 2px solid #f00;
                                                                        }
                                                                    </style>
                                                                    @foreach ($files as $file)
                                                                        <!-- for choosing 1 image from multiple option we use type radio -->
                                                                        <label>
                                                                            <input type="radio" name="image" value="{{ $file->image }}"
                                                                                style="opacity: 0;" />
                                                                            <img src="{{ asset('uploads/' . $file->image) }}" alt=""
                                                                                height="100px;" width="100px;" style="margin-right:20px;">
                                                                        </label>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                                                    onclick=" firstFunction()">Save</button>
                                                            </div>
                                                            @error('image')
                                                            <p class="text-red-400 font-medium">{{$message}}</p>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                </div>
                    
                    
                                                <!-- Optional: Place to the bottom of scripts -->
                                                <script>
                                                    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                    
                                                    function firstFunction() {
                                                        var x = document.querySelector('input[name=image]:checked').value;
                                                        document.getElementById('imagebox').value = x; // use .innerHTML if we want data on label
                                                    }
                                                </script>
                                            </div>
                                            <a target="_blank" href="{{ asset('uploads/' . $driver->image) }}">
                                                <img src="{{ asset('uploads/' . $driver->image) }}" alt="" width="100px"
                                                    height="100px">
                                            </a>
                                        </div>

                <button type="submit" class="my-3 btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
