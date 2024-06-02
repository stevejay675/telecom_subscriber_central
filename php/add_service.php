<?php
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve service details from POST request
    $name = $_POST['name'];
    $description = $_POST['description'];
    $cost = $_POST['cost'];

    // SQL query to insert service into database
    $sql = "INSERT INTO services (name, description, cost) VALUES ('$name', '$description', '$cost')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "New service added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
    // Redirect back to the services page
    header("Location: ../services.html");
    exit();
}
?>
