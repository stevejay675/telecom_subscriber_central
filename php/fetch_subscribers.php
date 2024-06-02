<?php
include 'db.php';

$sql = "SELECT subscribers.id, subscribers.name, subscribers.phone_number, subscribers.address, services.name as service_name
        FROM subscribers
        JOIN services ON subscribers.service_id = services.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['phone_number']}</td>
                <td>{$row['address']}</td>
                <td>{$row['service_name']}</td>
                <td>
                    <a href='edit_subscriber.php?id={$row['id']}' class='edit'><i class='fas fa-edit'></i> Edit</a>
                    <a href='php/delete_subscriber.php?id={$row['id']}' class='delete' onclick='return confirm(\"Are you sure you want to delete this subscriber?\")'><i class='fas fa-trash-alt'></i> Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No subscribers found</td></tr>";
}

$conn->close();
?>
