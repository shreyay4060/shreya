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

    // Handle file upload
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $resume = $_FILES['resume'];
        $uploadDir = 'uploads/'; // Specify the upload directory

        // Create the uploads directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true); // Create the directory with appropriate permissions
        }

        $resumePath = $uploadDir . basename($resume['name']); // Specify the full path

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($resume['tmp_name'], $resumePath)) {
            // Prepare and bind
            $stmt = $con->prepare("INSERT INTO resumesubmission (name, email, portfolio, resume) VALUES (?, ?, ?, ?)");
            if ($stmt === false) {
                die("Prepare failed: " . $con->error);
            }

            // Bind parameters
            $stmt->bind_param("ssss", $name, $email, $portfolio, $resumePath);

            // Set parameters and execute
            $name = $_POST['name'];
            $email = $_POST['email'];
            $portfolio = $_POST['portfolio'];

            // Execute the statement
            if ($stmt->execute()) {
                // Successfully inserted
                $submit = true;
            } else {
                echo "Insertion failed. Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Failed to upload resume.";
        }
    } else {
        echo "No file uploaded or there was an error uploading the file.";
    }

    // Close the connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Submission Form</title>
    <link rel="stylesheet" href="resumeSubmission.css">
</head>
<body>
    <div class="form-container">
        <h1>Resume Submission Form</h1>
        <form action="resumeSubmission.php" method="post" enctype="multipart/form-data">
            <!-- Name Field -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Full Name" required>
            
            <!-- Email Field -->
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Your Email Address" required>
            
            <!-- Portfolio/LinkedIn Field -->
            <label for="portfolio">Portfolio/LinkedIn Link:</label>
            <input type="url" id="portfolio" name="portfolio" placeholder="https://yourportfolio.com" required>
            
            <!-- File Upload Field -->
            <label for="resume">Upload Resume:</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
            <small class="file-hint">Accepted formats: PDF, DOC, DOCX (Max: 2MB)</small>
            
            <!-- Submit Button -->
            <button type="submit">Submit</button>
        </form>
        <p id="form-status"></p>
    </div>
    <script src="resumeSubmission.js"></script>
</body>
</html>