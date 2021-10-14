<?php

  if (isset($_POST['submit'])) {
    // code...
    // echo stripslashes() ;

    if (empty($_POST['email'])) {
      echo "An email is required <br/>";
    }else {
      echo strip_tags($_POST['email'])."<br/>";
    }

    if (empty($_POST['title'])) {
      echo "A title is required <br/>";
    }else {
      echo strip_tags($_POST['title']) ."<br/>";
    }

    if (empty($_POST['ingredients'])) {
      echo "At least one ingredient is required <br/>";
    }else {
      echo htmlspecialchars($_POST['ingredients']) ."<br/>";
    }


  }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <?php require "templates/header.php"; ?>


   <section class="container grey-text">
     <h4 class="center">Add a Pizza</h4>
     <form class="white" action="add.php" method="POST">
       <label for="">Your Email: </label>
       <input type="text" name="email" value="">
       <label for="">Pizza Title: </label>
       <input type="text" name="title" value="">
       <label for="">Ingredients (comma separated): </label>
       <input type="text" name="ingredients" value="">
       <div class="center">
         <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">

       </div>

     </form>

   </section>
   <?php require "templates/footer.php"; ?>


 </html>
