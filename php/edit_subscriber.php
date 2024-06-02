<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if subscriber ID is provided
    if (isset($_GET['id'])) {
        $subscriber_id = $_GET['id'];

        // Retrieve subscriber details from the database
        $query = "SELECT * FROM subscribers WHERE id = $subscriber_id";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $subscriber = $result->fetch_assoc();
        } else {
            echo "Subscriber not found";
            exit;
        }
    } else {
        echo "Subscriber ID not provided";
        exit;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['service'])) {
        // Collect form data
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $service = $_POST['service'];

        // Prepare update query
        $update_query = "UPDATE subscribers SET name='$name', phone='$phone', address='$address', service='$service' WHERE id=$id";

        // Execute update query
        if ($conn->query($update_query) === TRUE) {
            echo "Subscriber updated successfully";
        } else {
            echo "Error updating subscriber: " . $conn->error;
        }
    } else {
        echo "All fields are required";
    }
}

$conn->close();
?>
