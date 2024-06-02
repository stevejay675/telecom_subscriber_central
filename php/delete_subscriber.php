<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM subscribers WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Subscriber deleted successfully";
    } else {
        echo "Error deleting subscriber: " . $conn->error;
    }

    $conn->close();
    header("Location: ../subscriber.php");
    exit();
}
?>
