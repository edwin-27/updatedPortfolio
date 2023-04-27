<?php include 'i_header.php';?>

<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "myportfolio";

$errorMsg = null;


$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed : ". $conn->connect_error);
}

// $sql = "SELECT * FROM users WHERE userid = 'ejj@gmail.com' AND userpassword = 'google'";

if($_SERVER["REQUEST_METHOD"] == "POST"){
$email = $_POST['EMAIL'];
$password = $_POST['PASS'];

if(!isset($email, $password )){
  echo("Please fill in both fields");
}
else
{


    $sql = "SELECT * FROM users WHERE userid = '$email' AND userpassword = '$password'";
    // echo $sql;
    
    // if(!isset($_POST['EMAIL'], $_POST['PASS'])){
    //   exit(" fill in  both the email and password fields");
    // }
    
    
    
    $result  =$conn->query($sql);
    
    
    // echo "<BR>count".$result->num_rows ."<BR>";
    
    if ($result->num_rows > 0) {
    

    
      $mysql = "SELECT firstname FROM users WHERE userid = '$email' AND userpassword = '$password'";
      $myresult = $conn->query($mysql);
      while ($row = $result->fetch_assoc()) {
        $_SESSION['promptName']= $row['firstname'];
        $_SESSION['userid']= $row['userid'];
        $_SESSION['is_admin']= $row['is_admin'];
        $_SESSION['authentication'] = 1;
    }

    // $_SESSION["promptName"]= "ADMIN";
    // $_SESSION["authentication"] = 1;
    
      if ($_SESSION['is_admin'] == 1)
      {
        header("Location: addBlog.php");
      }
      else
      {
        header("Location: viewBlog.php");
      }
      exit();

    
        
      
      } else {

        $errorMsg =  "Email and password do not match. Please retry";
      }
      $conn->close();
    


}

}


?>

<div class = "controw">
  <aside>
    <div class  ="leftCol">
          <h2> Log in </h2>
    </div>
  </aside>  


  <div class = "rightCol">




        <form action="login.php" method="post" name="login" id="login">
          <span  class="val-error"><?php echo $errorMsg; ?></span>
              <div class="container">
                  <label for = "EMAIL"><p>Email Address :</p></label>
                  <input type = "email" placeholder="Enter email address" name="EMAIL" id="email">
                  <br /><span id="erremail" class="val-error"></span>

                  <label for = "PASS"><p> Password :</p></label>
                  <input type = "password" placeholder = "Enter your password" name="PASS" id="password">
                  <br /><span id="errpassword" class="val-error"></span>

                  <button type="submit" class = "button" >Login</button>
              </div>
        </form>

                  <script>
                    InitLogin();
                  </script>
  </div>                
  


</div>                  


<?php include 'i_footer.php';?>
