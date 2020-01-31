<?php
//require  the connection to the database file

require_once 'config.php';
include_once 'session.php';
// initialize variables
$username = $password =  '';
//initialize error variables
 $usernameErr =  $passwordErr = $formErr = $connectionErr = '';
 if(isset($_POST['login'])){
    LoginUser();
}
function loginUser(){
    global $connection;
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $password = mysqli_real_escape_string($connection,  $_POST['password']);  
  if(empty($username)){
         $usernameErr = 'usernameErr';
         echo $usernameErr;
  }elseif(empty($password)){
         $passwordErr = 'passwordErr';
         echo $passwordErr;
  }else{
        $sql = 'SELECT * FROM  members  WHERE  userName = ? OR userEmail = ?';
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
             $connectionErr = 'connectionErr';
             echo $connectionErr;
        }else{
              mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              if($row = mysqli_fetch_assoc($result)){
                       $checkpassword = password_verify($password, $row['userPassword']);
                       if($checkpassword == false){
                            $passwordErr = 'wrongpassword';
                            echo $passwordErr;
                       }elseif($checkpassword == true){
                              echo 'success';
                              $_SESSION['id'] = $row['userId'];
                              $_SESSION['username'] = $row['userName'];
                              $_SESSION['name'] = $row['name'];      
                       }
              }else{
                    echo 'nouser';
              }
        }
  }
}