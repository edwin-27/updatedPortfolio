<?php


class Blog{

    public $id;
    public $title;
    public $description;
    public $dateCreated;
    public $userID;

    private $servername;
    private $username;
    private $password;
    private $dbname;


    function __construct($servername,$username,$password,$dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
      }

  function addBlog($title, $desc, $date, $userid){

    $conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);

    if($conn->connect_error){
        die("Connection failed : ". $conn->connect_error);
    }
    
    $sql = "INSERT INTO Blog(userid,dateCreated, title, description, dateModified)  VALUES('$userid',' $date','$title','$desc','$date')";

    $result  =$conn->query($sql);

    $conn->close();  

    return $result;

  }

  function getBlog(){

    $blogs = array();
    
    $conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);

    if($conn->connect_error){
        die("Connection failed : ". $conn->connect_error);
    }
    
    
    $sql = "SELECT * FROM blog";
    $result  =$conn->query($sql);
    
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
         

          $key = $row["id"];  
        
          $blogs[$key] = new Blog($this->servername,$this->username,$this->password,$this->dbname);
          $blogs[$key]->id = $row["id"];
          $blogs[$key]->title = $row["title"];
          $blogs[$key]->description = $row["description"];
          $blogs[$key]->dateCreated = $row["dateCreated"];

        }
      } else {
        echo "0 results";
      }
      $conn->close();    

      return $blogs;

  }


  

  function addComment(){

  }


}


class Comment{

  public $comment;
  public $userID;              
}



?>   
