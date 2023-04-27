<?php
$title = "Add Blog"; ?>
<?php include "i_vars.php"; ?>
<?php include "i_blog.php"; ?>
<?php include "i_header.php"; ?>


<?php if ($_SESSION["authentication"] != 1) {
    header("Location: login.php");
    exit();
} elseif ($_SESSION["is_admin"] != 1) {
    header("Location: viewBlog.php");
    exit();
} ?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["TITLE"];
    $desc = $_POST["DESCRIPTION"];
    $date = date("Y-m-d H:i:s");
    $userid = $_SESSION["userid"];
    if (!isset($title, $desc)) {
        echo "Please fill in both fields";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($title, $desc)) {
    $oBlog = new Blog($servername, $username, $password, $dbname );
    $result = $oBlog->addBlog($title, $desc, $date, $userid);
    if ($result == 1) {
        header("Location: viewBlog.php");
        exit();
    } else {
        echo "Sorry, there is a problem adding new blog. Please contact administrator";
    }
}
?>


<div class="controw">
  <aside>
    <div class="leftCol">
        <h1> Add a Blog</h1>
    </div>   
  </aside> 
      <div class = "rightCol">

        <form id = "form" action="addBlog.php" method="post">
          
                <label for = "TITLE"><p>Title :</p></label>
                <input type = "text"  id ="title"placeholder="Enter title here" name="TITLE" >
                <br /><span id="errtitle" class="val-error"></span>

                <label for = "DESCRIPTION"><P>Description :</p></label>
                <textarea name="DESCRIPTION" id="desc" cols="40" rows="5" placeholder="Enter description here" ></textarea>
                <br /><span id="errdesc" class="val-error"></span>


                <button type="submit" class = "button" id = "submit">Post</button>
                <br>
                <input type="button"  class = "button" name="reset" id="reset" value="Clear" />

                <script>
                  InitAddBlog();
                  </script>
        </div>      
      
</div>



<?php include "i_footer.php"; ?>
