<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Subscriber</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Edit Subscriber</h1>
    <form action="edit_subscriber.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $subscriber['name']; ?>"><br><br>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" value="<?php echo $subscriber['phone']; ?>"><br><br>
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $subscriber['address']; ?>"><br><br>
        <label for="service">Service Type:</label>
        <select name="service">
            <option value="Basic Plan" <?php if ($subscriber['service'] == "Basic Plan") echo "selected"; ?>>Basic Plan</option>
            <!-- Add more options dynamically based on available services -->
        </select><br><br>
        <button type="submit">Update Subscriber</button>
    </form>
</body>
</html>
