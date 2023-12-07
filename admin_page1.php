<?php

include 'config.php';

session_start();



if(!isset($admin_id)){
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom admin style link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<section class="dashboard">

   

   <div class="box-container">

      
     <div class="box">
              <?php
                 $select_users = $conn->prepare("SELECT * FROM `user`");
                 $select_users->execute();
                 $number_of_users = $select_users->rowCount()
              ?>
              
              <h3>UTG</h3>
              <a href="./utg.pdf" class="btn">Click here to see</a>
      </div>
   </div>
   <br><br>
      <br><br>
      <div class="box-container">
           <div class="box">
              <?php
                 $select_users = $conn->prepare("SELECT * FROM `user`");
                 $select_users->execute();
                 $number_of_users = $select_users->rowCount()
              ?>
              <h3>Senfina</h3>
              <a href="./senfina1.pdf" class="btn">Click here to see</a>
         </div>
      </div>
      <br><br>

      

<!--
<br><br>
      <div class="box-container">
           <div class="box">
              <?php
                 $select_users = $conn->prepare("SELECT * FROM `user`");
                 $select_users->execute();
                 $number_of_users = $select_users->rowCount()
              ?>
              <h3>Atomind</h3>
              <a href="./pre-IPO presentation.html" class="btn">Click here to see</a>
         </div>
      </div>

      -->
      <br><br>

<div class="box-container">
           <div class="box">
              <?php
                 $select_users = $conn->prepare("SELECT * FROM `user`");
                 $select_users->execute();
                 $number_of_users = $select_users->rowCount()
              ?>
              <h3>Atomind</h3>
              <a href="./Atomind.pdf" class="btn">Click here to see</a>
         </div>
      </div>


           
     
           
      

      

    
   

</section>



<script src="js/admin_script.js"></script>

</body>
</html>