<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shreya.dev</title>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/survey.css">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/3047116925.js" crossorigin="anonymous"></script>
</head>
<body>
  

    <!-- portfolio section -->
    

    <div id="header">
        <div class="container">
        <nav>
            <div class="logo-shreya">shreya &#x2661;</div>
            <ul id="sidemenu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                   <!-- logout section -->

                <div class="nav">
                    <div class="right-links">
                        <a href="php/logout.php"> <button class="btn5">Log Out</button> </a>
                    </div>
                </div>

                <i class="fa-solid fa-xmark fas" onclick="closeMenu()"></i>
            </ul>
            <i class="fa-solid fa-bars fas" onclick="openMenu()"></i>
        </nav>

            <div class="header-text">
               
                <h1>Hi, I'm <span>Shreya</span> <br>And I am a <br> <span id="element"></span> </h1>
            </div>
        </div>
    </div>

    <!-- ------- about ---------- -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/img1.jpg">
                </div>
                <div class="about-col-2">
                    <h3 class="sub-title">About Me</h3><br>
                    <p class="about">Hello, my name is <b class="shreya">Shreya</b>. I recently completed my Bachelor of Computer Science (BCS) degree in 2025 from SGM College in Karad, affiliated with Shivaji University. With a strong passion for computers and technology, I am excited to embark on my career as a Software Developer. I am eager to apply my knowledge and skills in programming and software development to create innovative solutions and contribute to impactful projects in the tech industry.
                    </p>
                    <br><br><hr><br>

                   <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                   </div>
                   <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                        <li><span>Problem-Solving:</span><br> Ability to analyze problems and develop effective solutions.</li>
                        <li><span>Communication:</span><br> Strong verbal and written communication skills to collaborate with team members and stakeholders.</li>
                        <li><span>Teamwork: </span><br> Ability to work effectively in a team environment</li>
                        <li><span>Adaptability: </span><br>  Willingness to learn new technologies and adapt to changing project requirements.</li>
                    </ul>
                   </div>
                   <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2025 - Current</span><br>Currently I have attended Nandi -Mahindra Pride Workshop </li>
                        <li><span>2024 - 2025</span><br>I also contribute in Open source projects on github .</li>
                        <li><span>2024 - 2025 </span><br>I started freelancing took some simple projects depends upon frontend</li>
                        <li><span>2023 - 2024 </span><br>Created own projects based on some experiments and technologies.There are some projects listed below and you can see on them on my github page.</li>
                    </ul>     
                   </div>
                   <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2020</span><br>I completed my 10th with 94.40% </li>
                        <li><span>2022</span><br>I have completed my 12th in science stream with 75.50%</li>
                        <li><span>2025 </span><br>I completed my BCS degree with aggregate percentage 85%</li>
                        <li><span>2025 </span><br>I started my MERN Stack Developer Journey</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------Servicces------- -->

    <div id="services">
        <div class="container">
            <h3 class="sub-title">My Services</h3>
            <div class="service-list">
            <div>
                    <i class="fa-solid fa-crop"></i>
                    <h2>UI/UX Design</h2>
                    <p>Designing intuitive and user-friendly interfaces for applications, focusing on user experience and usability.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Custom Software Development</h2>
                    <p>Creating tailored software solutions that meet specific client needs, including desktop applications, mobile apps, and web applications.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Design</h2>
                    <p>Building and maintaining websites and web applications, including front-end (user interface) and back-end (server-side) development.</p>
                    <a href="#">Learn more</a>
                </div>

                <div>
                    <i class="fa-solid fa-crop"></i>
                    <h2>Database Design and Management</h2>
                    <p>Designing, implementing, and managing databases to store and retrieve data efficiently and securely.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-brands fa-app-store"></i>
                    <h2>E-commerce Solutions</h2>
                    <p>Developing and managing e-commerce platforms, including shopping cart integration, payment processing, and inventory management.</p>
                    <a href="#">Learn more</a>
                </div>
                
            </div>
        </div>
    </div>

    <!-- --------work--------------- -->

    <div id="portfolio">
        <div class="container">
            <h3 class="sub-title">My Work</h3><br><br>
            <div class="work-list">
                <div class="work">
                    <img src="images/blog.jpeg">
                    <div class="layer">
                        <h3>Blog Post App</h3>
                        <p>a platform or application designed to create, manage, and display blog posts.</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/music.jpeg">
                    <div class="layer">
                        <h3>Music App</h3>
                        <p>The app connects you go the talented people around the world. Download it from play store.</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/onlineshopping.avif">
                    <div class="layer">
                        <h3>Online Shopping App</h3>
                        <p>The app connects you go the talented people around the world. Download it from play store.</p>
                        <a href="https://github.com/shreyay4060/amazon"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>  
            </div><br><br>
            <a href="#" class="btn4">See more</a>
        </div>
    </div>


    <!-- --------Contact--------- -->

     <!-- php code for contact form -->
 <?php

    // variable for submit contact form
    $submit = false;
    if (isset($_POST['name'])) {
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "portfolio";

        // Create a connection
        $con = mysqli_connect($server, $username, $password, $database);

        // Check connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepare the SQL statement
        $stmt = $con->prepare("INSERT INTO contact (name, email, msg, date) VALUES (?, ?, ?, current_timestamp())");
        
        // Bind parameters
        $stmt->bind_param("sss", $name, $email, $msg);

        // Get values from POST request
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        // Execute the statement
        if ($stmt->execute()) {
            // Successfully inserted
            $submit = true;
        } else {
            // Log the error instead of displaying it
            error_log("Insertion failed: " . $stmt->error);
            echo "There was an error submitting your message. Please try again later.";
        }

        // Close the statement and connection
        $stmt->close();
        $con->close();
    }
?>
    
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h3 class="sub-title">Get in Touch</h3>
                    <p><i class="fa-solid fa-paper-plane-top"></i> 
                    shreya@dev.com
                </p>
                <p><i class="fa-solid fa-square-phone"></i> 
                8421915279
                    </p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://x.com/?lang=en-in"><i class="fa-brands fa-twitter-square"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://in.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://github.com/shreyay4060"><i class="fa-brands fa-github"></i></a>
                    </div>
                    <a href="images/resume.pdf"class="btn btn3" download>Download CV</a>
                </div>
                <div class="contact-right">
                    <form action="" method="post">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="msg"rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2 submit">Submit</button>
                    </form>

                    <!-- Vote of thanks -->
                     <?php
                           if($submit==true){

                               echo "<div class='thanks'>Thanks for submitting your response</div>";
                            } 
                     ?>
                </div>
            </div>
        </div>
        

        <br>
        <div class="form">

            <button class="forms"><a href="eventRegistrationForm/eventRegistration.php" class="btn1">Event Registration</a></button>
            <button class="forms"><a href="feedbackForm/feedback.php" class="btn1">Feedback</a></button>
            <!-- <button class="forms"><a href="surveyForm/survey.php" class="btn1">Survey</a></button> -->
            <button class="forms"><a href="resumeSubmissionForm/resumeSubmission.php" class="btn1">Submit Resume</a></button>
            <button class="forms"><a href="projectInquiryForm/projectInquiry.php" class="btn1">Project Inquiry</a></button>
        </div>
        <div class="copyright" href="https://github.com/shreyay4060">
            <p>Copyright <i class="fa-regular fa-copyright"></i> Shreya <i class="fa-sharp fa-solid fa-heart"></i> </p>
        </div>
    </div>

    <div class="space"></div>

    <!-- --------survey form-------- -->

<?php
    $submit2=false;
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capture the form data
        $satisfaction = $_POST['satisfaction'];
        $rating = $_POST['rating'];
        $feedback = $_POST['feedback'];

        // Validate the rating
        if ($rating < 1 || $rating > 5) {
            die("Rating must be between 1 and 5.");
        }

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
        $stmt = $conn->prepare("INSERT INTO `portfolio`.`survey` (satisfaction, rating, feedback) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        // Use 's' for string and 'i' for integer
        // Pass the variables directly without quotes
        $stmt->bind_param("sis", $satisfaction, $rating, $feedback);

        // Execute the statement
        if ($stmt->execute()) {
            // Successfully inserted
            $submit2 = true;
        } else {
            echo "Insertion failed. Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
?>
<div class="form-container">
        <h1>Survey/Questionnaire Form</h1>
        <p>We value your feedback! Please fill out this survey to help us improve.</p><br><br><hr><br>
        <form id="surveyForm" action="" method="post">
            <!-- Multiple-Choice Question -->
            <label for="satisfaction">How much you satisfied with my work?</label>
            <div class="options">
                <label><input type="radio" name="satisfaction" value="Very Satisfied" required> Very Satisfied</label>
                <label><input type="radio" name="satisfaction" value="Satisfied"> Satisfied</label>
                <label><input type="radio" name="satisfaction" value="Neutral"> Neutral</label>
                <label><input type="radio" name="satisfaction" value="Dissatisfied"> Dissatisfied</label>
                <label><input type="radio" name="satisfaction" value="Very Dissatisfied"> Very Dissatisfied</label>
            </div>

            <!-- Rating Scale -->
             <br>
            <label for="rating">Rate our services (1 = Poor, 5 = Excellent):</label>
            <div class="rating-scale">
                <input type="range" id="rating" name="rating" min="1" max="5" value="3" oninput="updateRatingValue(this.value)">
                <span id="ratingValue">3</span>
            </div>

            <!-- Open-Ended Question -->
            <label for="feedback">What improvements would you suggest?</label>
            <textarea id="feedback" name="feedback" placeholder="Your suggestions..." rows="4" required></textarea>

            <!-- Submit Button -->
            <button type="submit" id="submit2" class="button1">Submit</button>
            <p id="form-status"><?php echo $submit2 ? "Submited successful!" : ""; ?></p>
        </form>
        
    </div><br><br>
    <?php 
                        
        $id = $_SESSION['id'];
        $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

        while($result = mysqli_fetch_assoc($query)){
            $res_Uname = $result['Username'];
            $res_Email = $result['Email'];
            $res_Age = $result['Age'];
            $res_id = $result['Id'];
        }
        
        echo "<div><a class='btn6' href='edit.php?Id=$res_id'>Change Profile</a></div>";
    ?>
    <!-- scripts for survey -->
    <script>
        function updateRatingValue(value) {
            document.getElementById('ratingValue').innerText = value;
        }
    </script>
    <script src="survey.js"></script>    
    
    <!-- Scripts for website -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    
    <script src="script.js"></script>
</body>
</html>