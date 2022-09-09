<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Stack Forum</title>
</head>
<body>
    
    <!-- nevbar -->
    <?php include "partials/_dbconnect.php"; ?>
    <?php include "partials/_navbar.php"; ?>

    <?php 
    $success = 0;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`, `time`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp()); ";
            $result = mysqli_query($conn, $sql);
            
            if($result) {
                $success = 1;
            }else {
                $success = 0;
            }
        }
    ?>
    
     
    <!-- <div class="space"></div> -->
    
    <!-- --------------------------------  Contact Us ---------------------------- -->
    <div class="contact">
    <div class="headlines">
        <h5 style="color: #004599bb;">LET'S TALK</h5>
        <h1>Contact Us</h1>
    </div>
        <div class="contactcontanner">

            <div class="contanner">

                <div class="heading">
                    <div class="icon"><i class="far fa-map"></i></div>
                    <div class="info">
                        <p>Address : </p>
                        <p id="contactinfo">DT-1752, Dhurwa, Ranchi, Jharkhand, India</p>
                    </div>
                </div>

                <div class="heading">
                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="info">
                        <p>Phone : </p>
                        <p id="contactinfo">+91 6351188112</p>
                    </div>
                </div>

                <div class="heading">
                    <div class="icon"><i class="far fa-envelope"></i></div>
                    <div class="info">
                        <p>Email : </p>
                        <p id="contactinfo">ayushkumar412001 @gmail.com</p>
                    </div>
                </div>

            </div>

            <div class="messageform">

                <div class="form">
                    <form action="index.php" method="POST">

                        <style>
                            ::placeholder {color: rgba(0, 0, 0, 0.7);}
                        </style>

                        <?php  
                        if($success == 1) {
                            echo '<p style="color: green;">Thanks for contacting us!!</p>';
                        }
                        ?>
    
                        <input type="text" name="name" placeholder="Your Name" maxlength="25" required>
    
                        <input type="email" name="email" placeholder=" Your Email" maxlength="40" required>
    
                        <input type="text" name="subject" placeholder="Subject" maxlength="80" required>
    
                        <textarea type="message" name="message" id="inputbox"  cols="30" rows="5" placeholder="Message" required></textarea>

                        <label for="tandc"><p><input style="width: auto;" type="checkbox" id="tandc" name="tandc" required> I agree to the StackForum <a href="terms_service.php">Terms of service</a></p></label>
    
                        <button type="submit">Send Message</button>
    
                    </form>
                </div>

            </div>

        </div>
    </div>

    <!-- map -->
    <div class="map">
        <div class="mapcontanner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117223.79371964393!2d85.25128584155931!3d23.34318922552523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e104aa5db7dd%3A0xdc09d49d6899f43e!2sRanchi%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1623237879387!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>


    <div class="space"></div>

    <!-- --------------------------------------- Footer  ------------------------------ -->
    <?php include "partials/_footer.php"; ?>

    <script src="jscript/navbar.js"></script>
    <script src="jscript/typing.js"></script>
    <script src="jscript/testimonial.js"></script>
</body>
</html>