<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Variable for form submission status
$submit = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server = "localhost";
    $username = "root"; // Update if your username is different
    $password = ""; // Update if your password is different
    $database = "portfolio";

    // Create a connection
    $con = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare and bind
    $stmt = $con->prepare("INSERT INTO projectinquiry (name, email, projectType, budget, projectDetails) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $con->error);
    }

    // Bind parameters
    $stmt->bind_param("sssis", $name, $email, $projectType, $budget, $projectDetails);

    // Set parameters and execute
    $name = $_POST['name'];
    $email = $_POST['email'];
    $projectType = $_POST['projectType'];
    $budget = $_POST['budget'];
    $projectDetails = $_POST['projectDetails'];

    // Execute the statement
    if ($stmt->execute()) {
        // Successfully inserted
        $submit = true;
    } else {
        echo "Insertion failed. Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Inquiry Form</title>
    <link rel="stylesheet" href="projectInquiry.css">
</head>
<body>
    <div class="form-container">
        <h1>Project Inquiry Form</h1>
        
        <form action="" method="post" id="inquiryForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="project-type">Project Type:</label>
            <select id="project-type" name="projectType" required>
                <option value="">Select Project Type</option>
                <option value="web-development">Web Development</option>
                <option value="graphic-design">Graphic Design</option>
                <option value="mobile-app">Mobile App</option>
                <option value="other">Other</option>
            </select>

            <label for="budget">Budget (USD):</label>
            <input type="number" id="budget" name="budget" placeholder="Your Budget" min="0" required>

            <label for="message">Project Details:</label>
            <textarea id="message" name="projectDetails" placeholder="Describe your project here..." rows="5" required></textarea>

            <button type="submit">Submit</button>
        </form>
        <p id="form-status"><?php echo $submit ? "Submission successful!" : ""; ?></p>
    </div>
</body>
</html>