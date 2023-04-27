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
   
    // $BlogArray[] = new Blog()

    // function_construct($author,$date,$time,$title,$description){
    //     $this->$author = $author;
    //     $this->$date = $date;
    //     $this->$time = $time;
    //     $this->$title = $title;
    //     $this->$description = $description;
    // }

    // $BlogArray[0] = new Blog("Edwin", "19/04","12:15","First entry","This is first entry");
    // $BlogArray[1] = new Blog("A", "20/04","13:15","second entry","This is second entry");
    // $BlogArray[2] = new Blog("B", "21/04","14:15","third entry","This is third entry");

    // for($x = 0;$x<=2;$x++){
    //     echo"$BlogArray[$x]";
    // }

    $ObjectArray = array();

    $st1 = new Blog();
    $st1->$author = "Edwin";
    $st1->$date = "19/04";
    $st1->$time =   "12:15";
    $st1->$title = "first entry";
    $st1-$description = "this is first entry";
        
    // $ObjectArray[] = $st1;


    // $st2 = new Blog();
    // $st2->$author = "EdwinB";
    // $st2->$date = "20/04";
    // $st2->$time =   "13:15";
    // $st2->$title = "second entry";
    // $st2-$description = "this is second entry";

    // $ObjectArray[]  =$st2;


    print_r($ObjectArray);




}


    
</body>
</html>