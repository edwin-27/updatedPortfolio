<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "myportfolio";


$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed : ". $conn->connect_error);
}

$sql = "SELECT * FROM blog";
$result  =$conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - dateCreated: " . $row["dateCreated"]. " -  Title" . $row["title"]. " - description " . $row["description"] . "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();    




?>