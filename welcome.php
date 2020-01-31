<?php
   include_once 'session.php';
   //welcome page
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/style.css">
   <title>Registration - Dash</title>
</head>
<body>
   <div class="welcome">
      <div class="container">
           <div class="welcome-inner">
                <h2> Welcome <small> <?php  if(isset($_SESSION['id'])){
                   echo $_SESSION['name'];
       
      }
     ?></small></h2><a href="logout.php">Log out</a>
           </div>
      </div>
   </div>
   
</body>
</html>