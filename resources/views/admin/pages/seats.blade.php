@include('admin.inc.main')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Seat Management</h4>

    <!-- Example "Add Seat" button -->
    <a href="#" class="btn btn-primary mb-3">Add New Seat</a>

    <!-- Example table of seats -->
    <div class="card">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Seat ID</th>
                        <th>Bus Number</th>
                        <th>Seat Number</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($seats as $seat) --}}
                    <tr>
                        <td>ST-1001</td>
                        <td>NBS4455</td>
                        <td>1A</td>
                        <td>Available</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>