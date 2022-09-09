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
    
    <div class="space"></div>

    <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `categories` WHERE categories_id = $id";
        $result = mysqli_query($conn,$sql);
        // use a while loop to itrate through categories
        $row = mysqli_fetch_assoc($result);
        $catname = $row['categories_name'];
    ?>

    <?php 
        $showAlert = false;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Insert Into Ask Table
            $ask_title = $_POST['title'];
            $ask_title = str_replace("<","&lt;",$ask_title);
            $ask_title = str_replace(">","&gt;",$ask_title);
            $ask_title = str_replace("'","&apos;",$ask_title);
            $ask_desc = $_POST['desc'];
            $ask_desc = str_replace("<","&lt;",$ask_desc);
            $ask_desc = str_replace(">","&gt;",$ask_desc);
            $ask_desc = str_replace("'","&apos;",$ask_desc);
            $sno = $_POST['sno'];
            $sql = "INSERT INTO `ask` (`ask_title`, `ask_desc`, `ask_cat_id`, `ask_user_id`, `timestamp`) VALUES ('$ask_title', '$ask_desc', '$id', '$sno', current_timestamp());";
            $result = mysqli_query($conn,$sql);
            $showAlert = true;
            if ($showAlert) {
                echo "
                <script>
                alert('Question posted Successfully');
                window.location='categorieslist.php?catid=$id';
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
                <h1>Ask a public question on '.$catname.' </h1>
                <form action="ask.php?catid='.$id.'" method="POST">
                    <label for="title">Title</label>
                    <p>Be specific and imagine you’re asking a question to another person</p>
                    <input type="text" id="title" name="title" maxlength="100" required>
        
                    <label for="description">Description</label>
                    <p>Include all the information someone would need to answer your question</p>
                    <textarea type="text" id="description" name="desc" cols="30" rows="3" maxlength="250" required></textarea>
                    
                    
                    <label for="tandc"><p><input style="width: auto;" type="checkbox" id="tandc" name="tandc" required> I agree to the StackForum <a href="terms_service.php">Terms of service</a></p></label>
        
                    <input type="hidden" name="sno" value="'.$_SESSION['sno'].'">
        
                    <button type="submit">Post Your Question</button>
                    <button type="reset">Clear</button>
                </form>
            </div>
            ';
        }else {
            echo '
            <script>
                alert("Please Login to continue!");
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