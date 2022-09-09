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
    <title>Report</title>
</head>
<body>
    
    <!-- nevbar -->
    <?php include "partials/_dbconnect.php"; ?>
    <?php include "partials/_navbar.php"; ?>
    
    <div class="space"></div>

    <?php
        $id = $_GET['askid'];
        $comid = $_GET['comid'];
        $username = $_GET['askname'];

        if($comid == 0) {
            $sql = "SELECT * FROM `ask` WHERE ask_id = $id";
            $result = mysqli_query($conn , $sql);
    
            while ($row = mysqli_fetch_assoc($result)) {
                $ask_title = $row['ask_title'];
                $ask_desc = $row['ask_desc'];
            }
        }else if($comid != 0){
            $sql = "SELECT * FROM `comments` WHERE comment_id = $comid";
            $result = mysqli_query($conn , $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $ask_title = "Comment :";
                $ask_desc = $row['comment_content'];
            }
        }

    ?>
    <!-- <div class="space"></div> -->

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
            $report_desc = $_POST['desc'];
            $report_desc = str_replace("<","&lt;",$report_desc);
            $report_desc = str_replace(">","&gt;",$report_desc);
            $report_desc = str_replace("'","&apos;",$report_desc);

            $user_id = $_POST['sno'];
            $ask_id = $_POST['ask_id'];
            $comment_id = $_POST['comid'];

            $sql = "INSERT INTO `report` (`ask_id`, `comment_id`, `user_id`, `report_desc`, `timestamp`) VALUES ('$ask_id', '$comment_id', '$user_id', '$report_desc', current_timestamp());";
            $result = mysqli_query($conn,$sql);
            $showAlert = true;
            if ($showAlert) {
                echo "
                <script>
                alert('We successfully receive your report!! We will take action within 24hrs.');
                window.location='index.php';
                </script>
                ";
            }
        }
    ?>

    <?php
        // session_start();
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ) {
            echo '
            <div class="ask_container">
                <h1 style="padding-top: 30px">Reason of Reporting </h1>
                <form action="report.php?askid='.$id.'" method="POST">
                    
                    <label for="description">Description</label>
                    <p>Write the reason of reporting</p>
                    <textarea type="text" id="description" name="desc" cols="30" rows="3" maxlength="250" required></textarea>
                    
                    
                    <label for="tandc"><p><input style="width: auto;" type="checkbox" id="tandc" name="tandc" required> I agree to the StackForum <a href="terms_service.php">Terms of service</a></p></label>
        
                    <input type="hidden" name="sno" value="'.$_SESSION['sno'].'">

                    <input type="hidden" name="ask_id" value="'.$id.'">

                    <input type="hidden" name="comid" value="'.$comid.'">
        
                    <button type="submit">Report</button>
                    <button type="reset">Clear</button>
                </form>
            </div>
            ';
        }else {
            echo '
            <script>
                alert("Please Login to Report!");
                window.location="login.php";
            </script>
            ';
        }
    ?>
   
    

    <!-- --------------------------------------- Footer  ------------------------------ -->
    <?php include "partials/_footer.php"; ?>



    <script src="jscript/navbar.js"></script>
    <script src="jscript/typing.js"></script>
    <script src="jscript/testimonial.js"></script>
</body>
</html>