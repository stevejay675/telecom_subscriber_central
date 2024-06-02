<?php
include 'db.php';

// Check if service ID is provided
if (isset($_GET['id'])) {
    $service_id = $_GET['id'];

    // First, delete associated subscribers
    $delete_subscribers_query = "DELETE FROM subscribers WHERE service_id = $service_id";
    if ($conn->query($delete_subscribers_query) === TRUE) {
        // If subscribers are deleted successfully, delete the service
        $delete_service_query = "DELETE FROM services WHERE id = $service_id";
        if ($conn->query($delete_service_query) === TRUE) {
            echo "Service deleted successfully";
        } else {
            echo "Error deleting service: " . $conn->error;
        }
    } else {
        echo "Error deleting subscribers: " . $conn->error;
    }
} else {
    echo "Service ID not provided";
}

$conn->close();
?>
