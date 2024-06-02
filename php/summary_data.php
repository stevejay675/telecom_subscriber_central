<?php
include 'php/db.php';

function getTotalSubscribers($conn) {
    $sql = "SELECT COUNT(*) AS total FROM subscribers";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}

function getTotalServices($conn) {
    $sql = "SELECT COUNT(*) AS total FROM services";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}

function getTotalRevenue($conn) {
    $sql = "SELECT SUM(cost) AS total FROM services";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}

$totalSubscribers = getTotalSubscribers($conn);
$totalServices = getTotalServices($conn);
$totalRevenue = getTotalRevenue($conn);

$conn->close();
?>
