<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <main class="container">
        <section class="sidebar">
            <img src="assets/logo2-removebg-preview.png" alt="" class="logo">
            <ul>
                <li><a href="index.php"><i class="fas fa-tachometer-alt"></i> &nbsp; DASHBOARD</a></li>
                <li><a href="services.php"><i class="fas fa-concierge-bell"></i> &nbsp; SERVICES</a></li>
                <li><a href="report.php"><i class="fas fa-chart-bar"></i> &nbsp; REPORTS</a></li>
                <li><a href="subscriber.php"><i class="fas fa-users"></i> &nbsp; SUBSCRIBERS</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> &nbsp; LOGOUT</a></li>
            </ul>
        </section>

        <section class="main-content">
            <nav class="navbar">
                <span class="logo-text"><i class="fas fa-chart-bar"></i> &nbsp;REPORTS</span>
                <div>
                    <i class="bi-moon"></i>
                    <i class="bi-gear"></i>
                    <i class="bi-person"></i>
                </div>
            </nav>

            <div class="report">
                <form action="php/generate_report.php" method="post" class="report-form">
                    <label for="report_type">Select Report Type:</label>
                    <select id="report_type" name="report_type" required>
                        <option value="subscriber_list">Subscriber List</option>
                        <option value="service_popularity">Service Popularity</option>
                        <option value="subscribers_per_service">Subscribers per Service</option>
                    </select>
                    <button type="submit">Generate Report</button>
                </form>
                <div id="report-results">
                    <?php include 'php/generate_report.php'; ?>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Add your JavaScript code here if necessary
    </script>
</body>
</html>
