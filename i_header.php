<?php


session_start();
//echo "hhh." . $_SESSION["authentication"];
//exit();

?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>

    <!-- <link rel="stylesheet" href="reset.css"> -->
    <link rel="stylesheet" href="flex.css?v=<?php echo rand(); ?>">
   
     <script src="util.js?v=11" language="JavaScript" type="text/javascript"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <title>
        <?php  echo $title; ?></title>
</head>
<body>
<?php  
//

$current_page = strtoupper($_SERVER['REQUEST_URI']);

?>

<header>

    <div class="header">
        <h2> My Portfolio </h2>
        <p> By Edwin John </p>
        
    </div>
    <nav>

        <div class="topNav">

            
            <a href="homepage.php" class="split">Homepage</a>

            <a href="AboutMe.php" <?php echo ($current_page == "/ABOUTME.PHP") ? "class='current-tab'" : ""   ?>   > About Me</a>
            <a href="Experience.php" <?php echo ($current_page == "/EXPERIENCE.PHP") ? "class='current-tab'" : ""   ?>> Experience</a>
            <a href="Skills.php" <?php echo ($current_page == "/SKILLS.PHP") ? "class='current-tab'" : ""   ?>>Skills</a>
            <a href="Education.php" <?php echo ($current_page == "/EDUCATION.PHP") ? "class='current-tab'" : ""   ?>>Education</a>
            <a href="Projects.php" <?php echo ($current_page == "/PROJECTS.PHP") ? "class='current-tab'" : ""   ?>>Projects</a>
            <a href="addBlog.php" <?php echo ($current_page == "/ADDBLOG.PHP") ? "class='current-tab'" : ""   ?>>Blog</a>
            <a href="viewblog.php" <?php echo ($current_page == "/VIEWBLOG.PHP") ? "class='current-tab'" : ""   ?>>View blogs</a>
            <?php
                if(isset($_SESSION['authentication']) && $_SESSION['authentication'] == 1){
            ?>
            <span><?php echo "Hello ". $_SESSION['promptName']; ?></span>
            <a href = "Logout.php">Click here to log out</a>
            <?php
            }
            else{
            
            ?>
                <span><?php echo "Hello Guest"; ?></span>
                <a href="Login.php">Log in here</a>

            <?php  
            }
            ?>

        </div>   
    </nav>    
 
</header>    
        
        
            


    