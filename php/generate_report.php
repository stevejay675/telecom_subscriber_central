<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $report_type = $_POST['report_type'];

    switch ($report_type) {
        case 'subscriber_list':
            generateSubscriberList($conn);
            break;
        case 'service_popularity':
            generateServicePopularity($conn);
            break;
        case 'subscribers_per_service':
            generateSubscribersPerService($conn);
            break;
        default:
            echo "Invalid report type selected.";
    }
}

function generateSubscriberList($conn) {
    $sql = "SELECT * FROM subscribers";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Subscriber List</h2>";
        echo "<table>
                <thead>
                    <tr>
                        <th>Subscriber ID</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Service ID</th>
                    </tr>
                </thead>
                <tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['phone_number']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['service_id']}</td>
                  </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "No subscribers found.";
    }
}

function generateServicePopularity($conn) {
    $sql = "SELECT services.name, COUNT(subscribers.id) AS subscriber_count
            FROM services
            LEFT JOIN subscribers ON services.id = subscribers.service_id
            GROUP BY services.name
            ORDER BY subscriber_count DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Service Popularity</h2>";
        echo "<table>
                <thead>
                    <tr>
                        <th>Service Name</th>
                        <th>Subscriber Count</th>
                    </tr>
                </thead>
                <tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['subscriber_count']}</td>
                  </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "No data found.";
    }
}

function generateSubscribersPerService($conn) {
    $sql = "SELECT services.name AS service_name, COUNT(subscribers.id) AS subscriber_count
            FROM services
            LEFT JOIN subscribers ON services.id = subscribers.service_id
            GROUP BY services.name";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Subscribers per Service</h2>";
        echo "<table>
                <thead>
                    <tr>
                        <th>Service Name</th>
                        <th>Subscriber Count</th>
                    </tr>
                </thead>
                <tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['service_name']}</td>
                    <td>{$row['subscriber_count']}</td>
                  </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "No data found.";
    }
}

$conn->close();
?>
