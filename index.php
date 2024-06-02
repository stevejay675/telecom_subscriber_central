<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>telecom homepage</title>
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
                <span class="logo-text"><i class="fas fa-tachometer-alt"></i> &nbsp;DASHBOARD</span>
                <div class="div">
                    <i class="bi-moon"></i>
                    <i class="bi-gear"></i>
                    <i class="bi-person"></i>
                    <div class="hamburger-menu">
                        <span class="line1"></span>
                        <span class="line2"></span>
                        <span class="line3"></span>
                    </div>
                </div>
            </nav>

            <section class="summary">
                <h3>Summary</h3>
                <div class="summary-content">
                    <?php include 'php/summary_data.php'; ?>
                    <div class="summary-item">
                        <i class="fas fa-users"></i>
                        <p>Total Subscribers: <span><?php echo $totalSubscribers; ?></span></p>
                    </div>
                    <div class="summary-item">
                        <i class="fas fa-wifi"></i>
                        <p>Total Services: <span><?php echo $totalServices; ?></span></p>
                    </div>
                    <div class="summary-item">
                        <i class="fas fa-chart-line"></i>
                        <p>Revenue: <span><?php echo $totalRevenue; ?> FCFA</span></p>
                    </div>
                </div>
            </section>

            <section class="graphs">
                <h3>Graphs</h3>
                <div class="images">
                    <img src="assets/graph1.png" alt="">
                    <img src="assets/graph2.png" alt="">
                    <img src="assets/graph3.png" alt="">
                </div>
            </section>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>
