<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $service_id = $_POST['service_id'];

    $sql = "INSERT INTO subscribers (name, phone_number, address, service_id) VALUES ('$name', '$phone_number', '$address', '$service_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New subscriber added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: ../subscriber.php");
    exit();
}
?>
