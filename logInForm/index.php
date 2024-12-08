<?php
session_start();
$loggedin=false;


if (isset($_POST['email'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "portfolio"; // Replace with your actual database name

    //  connection to database
    $con = mysqli_connect($server, $username, $password);
    if (!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    // Selection of the database
    mysqli_select_db($con, $database);

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement
    $sql = "INSERT INTO `portfolio`.`login` (`email`, `password`, `date`) VALUES ('$email', '$hashedPassword', current_timestamp());";

    if ($con->query($sql) === true) {
        // "Successfully inserted";
        $loggedin=true;
    } else {
        echo "Please enter valid email Error: $sql <br> $con->error";
    }

    // Close connection
    $con->close();
}

// logout


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit;
}


session_destroy(); // Destroy the session
header("Location: login.html"); // Redirect to login page
exit;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="box">
        <div class="container">
            <h2 id="p">Welcome To My Little World</h2>
            <p id="p">Please Log In To See My Personal WebPage</p>

            <?php
                if($loggedin==true){

                    echo "<p>You are logged in successfully..</p>"; 
                }
            ?>

            <form action="index.php" method="post" id="loginForm">
                <h2>Login</h2><br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" required><br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Your Password" required><br><br>
                <p>
                    <a id="forgot" href="#">Forgot password?</a><br><br>
                </p>
                <p id="or">Don't have an account? <a id="signup" href="SignUpForm/index.php">Sign Up</a></p>
                <br><br>
                <button class="submit"><h4>Submit</h4></button>
            </form>
            <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <form action="logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>
        </div>
    </div>

    <script src="login.js"></script>
</body>
</html>