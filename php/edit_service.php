<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if service ID is provided
    if (isset($_GET['id'])) {
        $service_id = $_GET['id'];

        // Retrieve service details from the database
        $query = "SELECT * FROM services WHERE id = $service_id";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $service = $result->fetch_assoc();
        } else {
            echo "Service not found";
            exit;
        }
    } else {
        echo "Service ID not provided";
        exit;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description']) && isset($_POST['cost'])) {
        // Collect form data
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $cost = $_POST['cost'];

        // Prepare update query
        $update_query = "UPDATE services SET name='$name', description='$description', cost='$cost' WHERE id=$id";

        // Execute update query
        if ($conn->query($update_query) === TRUE) {
            echo "Service updated successfully";
        } else {
            echo "Error updating service: " . $conn->error;
        }
    } else {
        echo "All fields are required";
    }
}

$conn->close();
?>
