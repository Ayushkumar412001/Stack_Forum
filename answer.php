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
    
<!--------------------------------- containner category list ------------------------------->
    <?php
        $id = $_GET['askid'];
        $username = $_GET['askname'];
        $sql = "SELECT * FROM `ask` WHERE ask_id = $id";
        $result = mysqli_query($conn , $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $ask_title = $row['ask_title'];
            $ask_desc = $row['ask_desc'];
        }

    ?>
    <div class="space"></div>   

    <div class="concatlist">
        <div class="listhead">
            <h1> <?php echo $ask_title; ?></h1>
            <strong>-By <?php echo $username; ?></strong>
        </div>
        <p><?php echo $ask_desc; ?></p>
    </div>

    <?php 
        $showAlert = false;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Insert Into Ask Table
            $comment_content = $_POST['ans'];
            $comment_content = str_replace("<","&lt;",$comment_content);
            $comment_content = str_replace(">","&gt;",$comment_content);
            $comment_content = str_replace("'","&apos;",$comment_content);
            $comment_by = $_POST['sno'];
            $sql = "INSERT INTO `comments` (`comment_content`, `ask_id`, `comment_by`, `comment_time`) VALUES ('$comment_content', '$id', '$comment_by', current_timestamp());";
            $result = mysqli_query($conn,$sql);
            $showAlert = true;
            if ($showAlert) {
                echo "
                <script>
                alert('Answer posted Successfully')
                window.location='answer.php?askid=".$id."&askname=".$username."';
                </script>
                ";
            }
        }
    ?>

    <div class="space"></div>
    <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ) {
            echo '
            <div class="ask_container">
                <form action="answer.php?askid='.$id.'&askname='.$username.'" method="POST">
        
                    <label for="ans">Post Your Comment</label>
                    <p>Type your Answer</p>
                    <textarea type="text" id="ans" name="ans" cols="30" rows="3" maxlength="800" required></textarea>
                    
                    
                    <label for="tandc"><p><input style="width: auto;" type="checkbox" id="tandc" name="tandc" required> I agree to the StackForum <a href="terms_service.php">Terms of service</a></p></label>
        
                    <input type="hidden" name="sno" value="'.$_SESSION['sno'].'">
        
                    <button type="submit">Post Your Answer</button>
                    <button type="reset">Clear</button>
                </form>
            </div>
            ';
        }else {
            echo '
            <div class="concatlist">
                <div class="listhead">
                    <h1>You are not Logged in!!</h1>
                    <a href="login.php">Log in</a>
                </div>
                <p>Login to start a Discussion.</p>
            </div>
            <div class="space"></div>
            ';
        }
    ?>


    
    <!-- <div class="space"></div> -->

    <div class="question">
        <h2> Answer related to ' <?php echo $ask_title; ?> ' <i class="fas fa-chevron-right"></i></h2>
    </div>

    <?php
        // $id = $_GET['catid'] ;
        $sql = "SELECT * FROM `comments` WHERE ask_id = $id";
        $result = mysqli_query($conn,$sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['ask_id'];
            $comid = $row['comment_id'];
            $comment_content = $row['comment_content'];
            $comment_time = $row['comment_time'];
            $comment_by = $row['comment_by'];

            $sql2 = "SELECT * FROM `users` WHERE sno='$comment_by'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);

            echo'
            <div class="concatlist">
                <div class="userinfo">
                    <p class="user_img"><i class="fas fa-user"></i></p>
                    <p>'.$row2['user_name'].'</p>
                    <p><span>'.$comment_time.'</span></p>
                    <p class="report"> <a href="report.php?askid='.$id.'&comid='.$comid.'&askname='.$row2['user_name'].'">Report</a> </p>
                </div>
                <div class="listhead">
                    <h4>'.$comment_content.'</h4>
                </div>
            </div>
            ';
        }

        if ($noResult) {
            echo '
            
            <div class="concatlist">
                <div class="listhead">
                    <h1>No Answer Found</h1>
                </div>
                <p>Be the first person to answer a question!!</p>
            </div>
            ';
        }
    ?>
    

    <div class="space"></div>
   

    <!-- --------------------------------------- Footer  ------------------------------ -->
    <?php include "partials/_footer.php"; ?>



    <script src="jscript/navbar.js"></script>
    <script src="jscript/typing.js"></script>
    <script src="jscript/testimonial.js"></script>
</body>
</html>