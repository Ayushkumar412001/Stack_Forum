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
    <title>Stack Forum</title>
</head>
<body>
    
    <!-- nevbar -->
    <?php include "partials/_dbconnect.php"; ?>
    <?php include "partials/_navbar.php"; ?>
    
    <div class="space"></div>

    <?php
        $search = $_GET['search'];
        $sql = "SELECT * FROM `ask` WHERE ask_title LIKE '%$search%' OR ask_desc LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['ask_id'];
            $comid = 0;
            $title = $row['ask_title'];
            $desc = $row['ask_desc'];
            $ask_time = $row['timestamp'];
            $ask_user_id = $row['ask_user_id'];
            
            $sql1 = "SELECT * FROM `comments` WHERE ask_id = $id";
            $result1 = mysqli_query($conn,$sql1);
            $total_ans = mysqli_num_rows($result1);

            $sql2 = "SELECT * FROM `users` WHERE sno='$ask_user_id'";
            $result2 = mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_assoc($result2);

            echo'
            <div class="concatlist">
                <div class="userinfo">
                    <p class="user_img"><i class="fas fa-user"></i></p>
                    <p>'.$row2['user_name'].'</p>
                    <p><span>'.$ask_time.'</span></p>
                    <p class="report" > <a href="report.php?askid='.$id.'&comid='.$comid.'&askname='.$row2['user_name'].'">Report</a> </p>
                </div>
                <div class="listhead">
                    <h4>'.$title.'</h4>
                    <a href="answer.php?askid='.$id.'&askname='.$row2['user_name'].'">Answers ('.$total_ans.')</a>
                </div>
                <p>'.$desc.'</p>
            </div>
            ';
        }

        if ($noResult) {
            echo '
            
            <div class="concatlist">
                <div class="listhead">
                    <h1>No Question Found</h1>
                    <a href="login.php">Login</a>
                </div>
                <p>Be the first person to ask this question!!</p>
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