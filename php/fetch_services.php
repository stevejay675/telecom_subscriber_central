<?php
include 'db.php'; // Include database connection

// SQL query to select all services
$sql = "SELECT * FROM services";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['description']}</td>
                <td>{$row['cost']}</td>
                <td>
                    <a href='edit_service.html?id={$row['id']}' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i> Edit</a>
                    <a href='php/delete_service.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this service?\")'><i class='fas fa-trash'></i> Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No services found</td></tr>";
}

// Close database connection
$conn->close();
?>
