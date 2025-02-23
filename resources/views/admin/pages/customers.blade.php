@include('admin.inc.main')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 900px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 15px;
    font-size: 24px;
}

.add-btn {
    background-color: black;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.add-btn:hover {
    background-color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f1f1f1;
}

td a {
    color: blue;
    text-decoration: none;
    font-weight: bold;
}

td a:hover {
    text-decoration: underline;
}

.edit-btn {
    background-color: #007bff;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.edit-btn:hover {
    background-color: #0056b3;
}

.delete-btn {
    background-color: #dc3545;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 5px;
}

.delete-btn:hover {
    background-color: #c82333;
}

    </style>
        <h2>Customer Status</h2>
        <button class="add-btn">+ ADD CUSTOMER DETAILS</button>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CUST-9997540</td>
                    <td><a href="#">Sumnima Gurung</a></td>
                    <td>7777777700</td>
                    <td>
                        <button class="edit-btn">EDIT</button>
                        <button class="delete-btn">DELETE</button>
                    </td>
                </tr>
                <tr>
                    <td>CUST-4031139</td>
                    <td>Jamie Rhoades</td>
                    <td>1003000010</td>
                    <td>
                        <button class="edit-btn">EDIT</button>
                        <button class="delete-btn">DELETE</button>
                    </td>
                </tr>
                <tr>
                    <td>CUST-9474738</td>
                    <td>Alan Moore</td>
                    <td>7900000000</td>
                    <td>
                        <button class="edit-btn">EDIT</button>
                        <button class="delete-btn">DELETE</button>
                    </td>
                </tr>
            </tbody>
        </table>        
</div>