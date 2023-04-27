<?php
$title = "View Blog"; ?>
<?php include "i_vars.php"; ?>
<?php include "i_blog.php"; ?>
<?php include "i_header.php"; ?>

<?php
$sortmonth = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sortmonth = $_POST["sortmonth"];
}

$oBlog = new Blog($servername, $username, $password, $dbname);
$oBlogs = $oBlog->getBlog();
$blogSort = [];

foreach ($oBlogs as $blog) {
    $blogSort[] = $blog->dateCreated;
}
rsort($blogSort);
$blogMonthSort = [];
foreach ($oBlogs as $blog) {
    $blogMonthSort[] = strtotime(date("01-M-Y", strtotime($blog->dateCreated)));
}
$blogMonthSort = array_unique($blogMonthSort);
rsort($blogMonthSort);
?>  

<div class="controw">
  <div class="leftCol2">
    <h2>View Blogs</h2>

  </div>    

    <div class="rightCol2">    
      <div class="container blog-time">
        Filter by 

        <form name="viewblog" id="viewblog" method="post" action="viewBlog.php">
        <select name="sortmonth" id="sortmonth" onchange="sortbymonth()">
        <?php
        echo '<option value="">All</option>';
        foreach ($blogMonthSort as $sortdate) {
            $displaydate = date("M-Y", $sortdate);
            echo '<option value="' . date("M-Y", $sortdate) . '"';
            if ($sortmonth == $displaydate) {
                echo " selected ";
            }
            echo ">" . $displaydate . "</option>";
        }
        ?>
        </select>


       
        </form>
      </div>
      <BR />&nbsp;




        <?php

        foreach ($blogSort as $rowid) {
            if ($sortmonth != "") {
                foreach ($oBlogs as $blog) {
                    $currowmonth = date("M-Y", strtotime($blog->dateCreated));
                    if (
                        $blog->dateCreated == $rowid &&
                        $currowmonth == $sortmonth
                    ) {
                        echo "<div class='container'><br />";
                        echo "<div class='blog-time'>" . date('d F Y H:m:s', strtotime($blog->dateCreated)) .  "</div><div class='blog-title'>" .  $blog->title .  "</div><div><br />" . $blog->description .  "</div>";
                        echo "<br /></div>";
                        echo "<hr />";
                    }
                }
            } else {
                foreach ($oBlogs as $blog) {
                    if ($blog->dateCreated == $rowid) {
                      echo "<div class='container'><br />";
                        echo "<div class='blog-time'>" . date('d F Y H:m:s', strtotime($blog->dateCreated)) .  "</div><div class='blog-title'>" .  $blog->title .  "</div><div><br />" . $blog->description .  "</div>";
                        echo "<br /></div>";
                        echo "<hr />";
                    }
                }
            }
        }
        ?>   
    </div>      

</div>

<?php include "i_footer.php"; ?>  



