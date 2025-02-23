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

.bus-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.bus-table th, .bus-table td {
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
    <h2 class="page-title">Bus Status</h2>

    <!-- Add Bus Button -->
    <button class="btn-add" onclick="openAddModal()">ADD BUS DETAILS +</button>

    <!-- Bus Table -->
    <table class="bus-table">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Bus Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>NBS4455</td>
                <td>
                    <button class="btn-edit" onclick="openEditModal('NBS4455')">EDIT</button>
                    <button class="btn-delete" onclick="confirmDelete('NBS4455')">DELETE</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>SSX6633</td>
                <td>
                    <button class="btn-edit" onclick="openEditModal('SSX6633')">EDIT</button>
                    <button class="btn-delete" onclick="confirmDelete('SSX6633')">DELETE</button>
                </td>
            </tr>
        </tbody>
    </table>


<!-- Add Bus Modal -->
    <div id="addBusModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('addBusModal')">&times;</span>
            <h3>Add Bus</h3>
            <form>
                <label>Bus Number:</label>
                <input type="text" name="bus_number" required>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>

<!-- Edit Bus Modal -->
    <div id="editBusModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('editBusModal')">&times;</span>
            <h3>Edit Bus</h3>
            <form>
                <label>Bus Number:</label>
                <input type="text" name="bus_number" id="editBusNumber" required>
                <button type="submit">Save Changes</button>
            </form>
        </div>
    </div>
<script>
    function openAddModal() {
    document.getElementById("addBusModal").style.display = "flex";
}

function openEditModal(busNumber) {
    document.getElementById("editBusNumber").value = busNumber;
    document.getElementById("editBusModal").style.display = "flex";
}

function confirmDelete(busNumber) {
    if (confirm("Are you sure you want to delete " + busNumber + "?")) {
        // Implement delete functionality
        alert(busNumber + " deleted.");
    }
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}
</script>
</div>

