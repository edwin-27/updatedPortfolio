<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<?php
     


class Blog {
    public $author;
    public $date;
    public $time;
    public $title;
    public $description;
   

}

$BlogArray[] = new Blog();

//  function_construct($author,$date,$time,$title,$description){
//     $this->$author = $author;
//     $this->$date = $date;
//     $this->$time = $time;
//     $this->$title = $title;
//     $this->$description = $description;
// }

$instance = new Blog();
$instance->author = "dfgdfg";
$BlogArray[0] =  $instance;

$instance = new Blog();
$instance->author = "dfgdfgdfg";
$BlogArray[1] =  $instance;

$instance = new Blog();
$instance->author = "lllklklklk";
$BlogArray[2] =  $instance;


// $instance= new Blog("Edwin", "19/04","12:15","First entry","This is first entry");
// $BlogArray[1] = new Blog("A", "20/04","13:15","second entry","This is second entry");
// $BlogArray[2] = new Blog("B", "21/04","14:15","third entry","This is third entry");

for($x = 0;$x<=2;$x++){
    echo "<BR>";
    echo $BlogArray[$x]->author;
    }
    



?>



    
</body>
</html>