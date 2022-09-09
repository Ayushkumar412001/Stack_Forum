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
    <link rel="stylesheet" href="css/testimonial.css">
    <link rel="stylesheet" href="css/about.css">
    <title>Stack Forum</title>
</head>
<body>
    
    <!-- nevbar -->
    <?php include "partials/_dbconnect.php"; ?>
    <?php include "partials/_navbar.php"; ?>
     
    <!-- <div class="space"></div> -->
    
    <!-- --------------------  About us Section ---------------------------------- -->
    <div class="about">
        <div class="imgcontanner">
            <img src="images/about2.jpg" alt="about us img">
        </div>
        <div class="aboutcontent">
            <h5>WHO WE ARE</h5>
            <h1>Empowering the world to develop technology through collective knowledge.</h1>
            <p>Our public platform serves 100 million people every month, making it one of the 50 most popular websites in the world.</p>
            <p style="padding: 0 0 40px;">Our asynchronous knowledge management and collaboration offering Stack Overflow for Teams, is transforming how people work.</p>
            <a href="index.php#Categories">Explore Categories</a>

        </div>
    </div>

    <div class="space"></div>

<!-- Additional products that reach -->
    <div class="additional">
        <h4 id="logo"><h1><span><i class="fas fa-layer-group"></i> </span> STACK<span> FORUM</span></h1></h4>
        <div class="styledevider"></div>
        <p>Additional products that reach and engage <br> developers & technologists…</p>
        <div class="info">

            <div class="cardinfo">
                <h3><span><i class="fas fa-layer-group"></i> </span> <div class="hline"></div> ADVERTISING</h3>
                <p>Reach the world's largest audience of developers and technologists</p>
            </div>
            <div class="cardinfo">
                <h3><span><i class="fas fa-layer-group"></i> </span> <div class="hline"></div> COLLECTIVES</h3>
                <p>Connecting communities with the specific technologies they use the most</p>
            </div>
            <div class="cardinfo">
                <h3><span><i class="fas fa-layer-group"></i> </span> <div class="hline"></div> TALENT</h3>
                <p>Build your employer brand to attract tech talent</p>
            </div>
            <div class="cardinfo">
                <h3><span><i class="fas fa-layer-group"></i> </span> <div class="hline"></div> JOBS</h3>
                <p>Programming & related technical career opportunities</p>
            </div>

        </div>
    </div>
    <div class="space"></div>


    <!------------------------------------------- Become a driver------------------------------------------ -->
    <div class="driver">

        <img src="images/about3.jpg">

        <div class="cutcolor"></div>

        <div class="becomedriver">
            <h1>Do You Want To Earn With Us? <br> So Don't Be Late.</h1>
            <a href="signup.php">Sign Up Now</a>
        </div>

    </div>

    <!-- <div class="space"></div> -->

    <!-- ---------------------------------------- TESTIMONIAL ---------------------------->
    <div class="testimonial">

        <h5 data-aos="fade-down">TESTIMONIAL</h5>
        <h1 data-aos="fade-up">Happy Clients</h1>

        <div class="clients">

            <div class="card" id="slide">

                <div class="people">
                    <!-- <div class="clientimg one"></div> -->
                    <img src="images/client1.jpg" alt="">
                    <p id="review">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="styledevider"></div>
                    <p id="name">Roger Scott</p>
                    <p id="profession">System Analyst</p>
                </div>

                <div class="people">
                    <!-- <div class="clientimg two"></div> -->
                    <img src="images/client2.jpg" alt="">
                    <p id="review">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="styledevider"></div>
                    <p id="name">Roger Scott</p>
                    <p id="profession">Marketing Maager</p>
                </div>

                <div class="people">
                    <!-- <div class="clientimg three"></div> -->
                    <img src="images/client3.jpg" alt="">
                    <p id="review">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="styledevider"></div>
                    <p id="name">Roger Scott</p>
                    <p id="profession">Unterface Designer</p>
                </div>

                <div class="people">
                    <!-- <div class="clientimg four"></div> -->
                    <img src="images/client4.jpg" alt="">
                    <p id="review">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="styledevider"></div>
                    <p id="name">Roger Scott</p>
                    <p id="profession">UI Designer</p>
                </div>

                <div class="people">
                    <!-- <div class="clientimg one"></div> -->
                    <img src="images/client1.jpg" alt="">
                    <p id="review">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="styledevider"></div>
                    <p id="name">Roger Scott</p>
                    <p id="profession">System Analyst</p>
                </div>

                <div class="people">
                    <!-- <div class="clientimg two"></div> -->
                    <img src="images/client2.jpg" alt="">
                    <p id="review">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="styledevider"></div>
                    <p id="name">Roger Scott</p>
                    <p id="profession">Marketing Maager</p>
                </div>

                <div class="people">
                    <!-- <div class="clientimg three"></div> -->
                    <img src="images/client3.jpg" alt="">
                    <p id="review">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="styledevider"></div>
                    <p id="name">Roger Scott</p>
                    <p id="profession">Unterface Designer</p>
                </div>

                <div class="people">
                    <!-- <div class="clientimg four"></div> -->
                    <img src="images/client4.jpg" alt="">
                    <p id="review">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="styledevider"></div>
                    <p id="name">Roger Scott</p>
                    <p id="profession">UI Designer</p>
                </div>

            </div>

        </div>

        <div class="btncontanner">
            
            <span ><i class="btn active far fa-stop-circle fas"></i></span>
            <span ><i class="btn far fa-stop-circle "></i></span>
            <span ><i class="btn far fa-stop-circle "></i></span>
            <span ><i class="btn far fa-stop-circle "></i></span>
            <span ><i class="btn far fa-stop-circle "></i></span>

        </div>


    </div>

    <!-- --------------------------------------- Footer  ------------------------------ -->
    <?php include "partials/_footer.php"; ?>



    <script src="jscript/navbar.js"></script>
    <script src="jscript/typing.js"></script>
    <script src="jscript/testimonial.js"></script>
</body>
</html>