<?php
  //echo "Hello";
  $name = "Marv";
  $age = 33;

  echo mb_strtolower($name)."<br>";

  //arrays
  $people = array('ken', 'chun-li');
  $ages = [3,6,9,12];

  array_push($people,'chima');
  print_r($people);



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>PHP Project</title>
   </head>
   <body>
    <!-- embedded php -->
    <h1>User Profile Page</h1>

     <h1><?php echo "Hello, I am here again" ?></h1>

     <div class=""><?php echo $name; ?> </div>
     <div class=""><?php echo $age; ?> </div>

   </body>
 </html>
