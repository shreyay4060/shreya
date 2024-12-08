<?php
$submit = false; // Initialize the variable for submission

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "portfolio";

    // connection to the database
    $con = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // echo "Connection is successful"; 

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Basic validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }
    if ($password !== $confirmPassword) {
        die("Passwords do not match");
    }

    // Hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO `portfolio`.`signup` (`email`, `password`, `date`) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $email, $hashedPassword); // Bind email and hashed password
    if ($stmt->execute()) {
        // Successfully inserted
        $submit = true;
    } else {
        echo "Insertion failed. Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp Form For Portfolio</title>
    <link rel="stylesheet" href="signup.css" />
</head>
<body>
    <div class="container">
        <h2>Create a new account!</h2>
        <p>Fill up the necessary details</p>
        <form action="index.php" method="post" id="signupForm">
            <h2>Signup Form</h2>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter email" required />

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required />

            <label for="confirmPassword">Confirm</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password" required />

            <button type="submit" class="submit">Submit</button>
            <!-- Vote of thanks -->
            <?php
                           if($submit==true){

                               echo "<div class='thanks'>Thanks for submitting your response</div>";
                            } 
                     ?>
        </form>
    </div>

    <!-- <script src="signup.js"></script> -->
</body>
</html>