<?php
include 'db.php';

$sql = "SELECT id, name FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='{$row['id']}'>{$row['name']}</option>";
    }
} else {
    echo "<option value=''>No services available</option>";
}

$conn->close();
?>
