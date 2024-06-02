<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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
                <span class="logo-text"><i class="fas fa-concierge-bell"></i> &nbsp;services</span>
                <div>
                    <i class="bi-moon"></i>
                    <i class="bi-gear"></i>
                    <i class="bi-person"></i>
                </div>
            </nav>

            <div class="sub-container">
                <h2>Add Service</h2>
                <form action="php/add_service.php" method="POST">
                    <div>
                        <label for="name">Service Name:</label>
                        <input type="text" name="name" required>
                    </div>

                    <div>
                        <label for="description">Description:</label>
                        <textarea name="description" required></textarea>
                    </div>

                    <div>
                        <label for="cost">Cost:</label>
                        <input type="text" name="cost" required>
                    </div>

                    <button class="add-subscriber" type="submit">Add Service</button>
                </form>
            </div>

            <p class="see-service">See service list</p>

            <div class="service-list">
                <h2>Services List</h2>
                <table class="table table-striped mt-4">
                    <thead class="thead-dark">
                        <tr>
                            <th>Service Name</th>
                            <th>Description</th>
                            <th>Cost</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'php/fetch_services.php'; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script>
        const seeService = document.querySelector('.see-service');
        const serviceListContainer = document.querySelector('.service-list');

        seeService.addEventListener('click', () => {
            if (seeService.innerHTML === "See service list") {
                seeService.innerHTML = "Hide service list";
                serviceListContainer.classList.add('active');
            } else {
                seeService.innerHTML = "See service list";
                serviceListContainer.classList.remove('active');
            }
        });
    </script>
</body>
</html>
