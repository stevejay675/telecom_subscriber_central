<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriber</title>
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
                <span class="logo-text"><i class="fas fa-users"></i> &nbsp;Subscriber</span>
                <div>
                    <i class="bi-moon"></i>
                    <i class="bi-gear"></i>
                    <i class="bi-person"></i>
                </div>
            </nav>

            <div class="sub-container">
                <h2>Add Subscriber</h2>
                <form action="php/add_subscriber.php" method="POST">
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" name="name" required>
                    </div>

                    <div>
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" name="phone_number" required>
                    </div>

                    <div>
                        <label for="address">Address:</label>
                        <input type="text" name="address" required>
                    </div>

                    <div class="form-group">
                        <label for="service">Service Type:</label>
                        <select id="service" name="service_id" class="form-control" required>
                            <?php include 'php/fetch_services_options.php'; ?>
                        </select>
                    </div>

                    <button class="add-subscriber" type="submit">Add Subscriber</button>
                </form>
            </div>

            <p class="see-sub">See subscribers list</p>

            <div class="subscriber-list">
                <h2>Subscribers list</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Subscriber ID</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Service Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'php/fetch_subscribers.php'; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
