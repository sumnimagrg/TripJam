@include('admin.inc.main')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <style>
       .container {
    padding: 20px;
}

.page-title {
    font-size: 24px;
    margin-bottom: 10px;
}

.btn-add {
    background-color: black;
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    font-weight: bold;
    border-radius: 5px;
}

.btn-add:hover {
    background-color: #333;
}

.route-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.route-table th, .route-table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.btn-edit {
    background-color: blue;
    color: white;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.btn-delete {
    background-color: red;
    color: white;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: white;
    padding: 20px;
    border-radius: 5px;
    width: 300px;
    text-align: center;
}

.close {
    float: right;
    cursor: pointer;
    font-size: 20px;
}
    </style>
    <h2 class="page-title">Route Status</h2>

    <!-- Add Route Button -->
    <button class="btn-add" onclick="openAddModal()">ADD ROUTE DETAILS +</button>

    <!-- Routes Table -->
    <table class="route-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Via Cities</th>
                <th>Bus</th>
                <th>Departure Date</th>
                <th>Departure Time</th>
                <th>Cost</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>RT-6028759</td>
                <td>Pokhara</td>
                <td>LLL7699</td>
                <td>2021-10-20</td>
                <td>13:50:00</td>
                <td>$166</td>
                <td>
                    <button class="btn-edit" onclick="openEditModal('RT-6028759')">EDIT</button>
                    <button class="btn-delete" onclick="confirmDelete('RT-6028759')">DELETE</button>
                </td>
            </tr>
            <tr>
                <td>RT-753558</td>
                <td>Kathmandu</td>
                <td>TTH8888</td>
                <td>2021-10-20</td>
                <td>12:04:00</td>
                <td>$55</td>
                <td>
                    <button class="btn-edit" onclick="openEditModal('RT-753558')">EDIT</button>
                    <button class="btn-delete" onclick="confirmDelete('RT-753558')">DELETE</button>
                </td>
            </tr>
        </tbody>
    </table>

<!-- Add Route Modal -->
    <div id="addRouteModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('addRouteModal')">&times;</span>
            <h3>Add Route</h3>
            <form>
                <label>Route ID:</label>
                <input type="text" name="route_id" required>
                <label>Via Cities:</label>
                <input type="text" name="via_cities" required>
                <label>Bus:</label>
                <input type="text" name="bus" required>
                <label>Departure Date:</label>
                <input type="date" name="departure_date" required>
                <label>Departure Time:</label>
                <input type="time" name="departure_time" required>
                <label>Cost:</label>
                <input type="text" name="cost" required>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>

<!-- Edit Route Modal -->
    <div id="editRouteModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('editRouteModal')">&times;</span>
            <h3>Edit Route</h3>
            <form>
                <label>Route ID:</label>
                <input type="text" name="route_id" id="editRouteID" required>
                <label>Via Cities:</label>
                <input type="text" name="via_cities" id="editViaCities" required>
                <label>Bus:</label>
                <input type="text" name="bus" id="editBus" required>
                <label>Departure Date:</label>
                <input type="date" name="departure_date" id="editDepartureDate" required>
                <label>Departure Time:</label>
                <input type="time" name="departure_time" id="editDepartureTime" required>
                <label>Cost:</label>
                <input type="text" name="cost" id="editCost" required>
                <button type="submit">Save Changes</button>
            </form>
        </div>
    </div>  
<script>
    function openAddModal() {
    document.getElementById("addRouteModal").style.display = "flex";
}

function openEditModal(routeID) {
    document.getElementById("editRouteID").value = routeID;
    document.getElementById("editRouteModal").style.display = "flex";
}

function confirmDelete(routeID) {
    if (confirm("Are you sure you want to delete " + routeID + "?")) {
        // Implement delete functionality
        alert(routeID + " deleted.");
    }
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}
</script>
</div>