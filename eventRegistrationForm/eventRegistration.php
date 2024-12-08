<?php
$submit=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $eventDate = $_POST['eventDate'];
    $session = $_POST['session'];

    // Database connection
    $server = "localhost"; // Your server name
    $username = "root"; // Your database username
    $password = ""; // Your database password
    $dbname = "portfolio"; // Your database name

    // Create connection
    $conn = new mysqli($server, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO `portfolio`.`eventregistrations` (`name`, `email`, `eventDate`, `session`, `date`) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $name, $email, $eventDate, $session); // Bind only 4 variables

    // Execute the statement
    if ($stmt->execute()) {
        // echo "Registration successful!";
        $submit=true;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration Form</title>
    <link rel="stylesheet" href="eventRegistration.css">
</head>
<body>
    <div class="form-container">
        <h1>Event Registration Form</h1><br>
        <!-- Vote of thanks -->
        <?php
            if($submit==true){
                echo "<div class='thanks'>Thanks for submitting your response</div>";
            } 
        ?>
       
        <form action="eventRegistration.php" method="post">
            <!-- Name Field -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Full Name" required>
            
            <!-- Email Field -->
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Your Email Address" required>
            
            <!-- Event Preferences -->
            <label for="event-date">Event Date:</label>
            <input type="date" id="date" name="eventDate" required>
            
            <!-- Session Choices -->
            <label for="session">Preferred Session:</label>
            <select id="session" name="session" required>
                <option value="">Select a session</option>
                <option value="morning">Morning Session (9 AM - 12 PM)</option>
                <option value="afternoon">Afternoon Session (1 PM - 4 PM)</option>
                <option value="evening">Evening Session (6 PM - 9 PM)</option>
            </select>
            
            <!-- Submit Button -->
            <button type="submit">Register</button>
        </form>
        <p id="form-status"></p>
    </div>
    <script src="eventRegistration.js"></script>
</body>
</html>