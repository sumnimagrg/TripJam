@include('admin.inc.main')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}

.dashboard {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    padding: 20px;
}

.card {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.card h3 {
    margin: 0 0 10px;
    color: #007bff;
}

.card p {
    margin: 0 0 20px;
    color: #333;
}
    </style>
    <div class="dashboard">
        <div class="card">
            <h3>Bookings</h3>
            <p>Total Bookings: </p>
        </div>
        <div class="card">
            <h3>Buses</h3>
            <p>Total Buses: </p>
        </div>
        <div class="card">
            <h3>Routes</h3>
            <p>Total Routes: </p>
        </div>
        <div class="card">
            <h3>Seats</h3>
            <p>Total Seats: </p>
        </div>
        <div class="card">
            <h3>Customers</h3>
            <p>Total Customers: </p>
        </div>
        <div class="card">
            <h3>Earnings</h3>
            <p>Total Earnings: </p>
        </div>
    </div>
</body>
</html>
</div>
            

           