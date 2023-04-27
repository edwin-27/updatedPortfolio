<?php include 'i_header.php';?>

<h1> Blog </h1>


<form action="viewBlog.php" method="post">
    <div class="container">
        <label for = "TITLE"><p>Title :</p></label>
        <input type = "text" placeholder="Enter title here" name="TITLE" required>

        <label for = "DESCRIPTION"><p> Description :</p></label>
        <input type = "text" placeholder = "Enter description here" name="DESCRIPTION" required>

        <button type="submit">Post</button>
        <button type="reset"> Clear</button>   


        <!-- Include Are ypu sure you want to quit -->
</div>




</form>
    
<?php include 'i_footer.php';?>