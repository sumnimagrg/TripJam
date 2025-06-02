@extends('admin.inc.main')

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="container mt-4">
        <h2 class="mb-4">Customer Enquiries</h2>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Sent At</th>
                </tr>
            </thead>
            <tbody>
                
                @forelse($messages as $index => $msg)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $msg->name }}</td>
                        <td>{{ $msg->email }}</td>
                        <td>{{ $msg->messageContent }}</td>
                        <td>{{ $msg->created_at->format('d M Y, H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No enquiries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
</div>
@endsection
