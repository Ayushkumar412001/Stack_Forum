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
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/testimonial.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Stack Forum</title>
</head>
<body>
    
    <!-- nevbar -->
    <?php include "partials/_dbconnect.php"; ?>
    <?php include "partials/_navbar.php"; ?>
    
    <!-- back_cover -->
    <div class="backcover">
        <div class="ctext"> 
            <h1>Every <a href="" class="typewrite" data-period="2000" data-type='[ "Developer", "Data Scientist", "System Admin", "Mobile Developer","Game Developer" ]'></a> has a<br>tab open to Stack Fourm</h1>
            <div class="hdevider"></div> 

            <div class="coverinfo">
                <div class="infodata">
                    <h3>100+ million</h3>
                    <p>monthly visitors to Stack Forum & Stack Exchange</p>
                </div>
                <div class="infodata">
                    <h3>45.1+ billion</h3>
                    <p>Times a developer got help since 2008</p>
                </div>
                <div class="infodata">
                    <h3>179% ROI</h3>
                    <p>from companies using Stack Forum for Teams</p>
                </div>
                <div class="infodata">
                    <h3>5,000+</h3>
                    <p>Stack Forum for Teams instances active every day</p>
                </div>
            </div>  

        </div>
    </div>
    
    <!-- White curve line -->
    <div class="cardcontainer" id="Categories">
        <div class="curve"></div>
    </div>
    
    <div class="headlines">
        <h5>WHAT WE OFFER</h5>
        <h1>Fourm Categories</h1>
    </div>
    
    <!-- category list -->
    <div class="gallery">
        <?php
        $sql = "SELECT * FROM `categories`";
        $result = mysqli_query($conn , $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['categories_id'];
            $cat = $row['categories_name'];

            echo '
            
            <a href="categorieslist.php?catid='.$id.'"><img src="images/'.$cat.'.jpg" alt="'.$cat.'"></a>

            ';
        }
        ?>
    </div>

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
    
    <!-- Want to work here -->
    <div class="wantwork">
        <a id="work" href="">About the company</a>
        <!-- <a href=""></a> -->
        <p>Want to work here? <span><a href="">Current job openings</a></span></p>
    </div>

    <!-- White curve line -->
    <div class="cardcontainer">
        <div class="curvedown"></div>
    </div>

    <!-- Q & A Communities  -->
    <div class="qacomm">
        <div class="qacontainer">
            <h3>OurCommunities<i class="fab fa-stack-exchange"></i></h3>
            <div class="hline"></div>
            <h1>Explore technical topics and other disciplines across 170+ Q&A communities</h1>
            <p>From <span>Server Fault</span> to <span>Super User</span>, much of the Stack Exchange network continues our mission to empower the world to develop technology through collective knowledge. Other sites on the Stack Exchange network further encourage knowledge sharing across topics such as cooking and medicine.</p>
            <a href="">Explore the network</a>
        </div>
    </div>

    <!-- login now and get benifits -->
    <div class="private">
        <i class="fas fa-fingerprint"></i>
        <p>Build a <strong>private community</strong> to share technical or non-technical knowledge.</p>
        <a href="">Login to get free Benefits</a>
    </div>

    <!-- --------------------------------------- Footer  ------------------------------ -->
    <?php include "partials/_footer.php"; ?>

    <script src="jscript/navbar.js"></script>
    <script src="jscript/typing.js"></script>
    <script src="jscript/testimonial.js"></script>
</body>
</html>