<?php
//require  the connection to the database file
include_once 'config.php';
include_once 'session.php';
// initialize variables
$name = $username = $email = $password = $cpassword = '';
//initialize error variables
$nameErr = $usernameErr = $emailErr = $passwordErr = $cpasswordErr = $formErr = $connectionErr = '';
if(isset($_POST['submit'])){
       RegisterUser();
       
}else{
         header('location:index.php');
}

function RegisterUser(){
       global $connection;
       $name = mysqli_real_escape_string($connection , $_POST['name']  );
       $username = mysqli_real_escape_string($connection,$_POST['username']);
       $email = mysqli_real_escape_string($connection,  $_POST['email']);
       $password = mysqli_real_escape_string($connection,  $_POST['password']);
       $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);
       if(empty($name)){
               $nameErr = 'nameErr';
               echo $nameErr;   
       }elseif(empty($username)){
                $usernameErr = 'usernameErr';
                echo $usernameErr;
       }elseif(empty($email)){
                $emailErr = 'emailErr';
                echo $emailErr;
       }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
               $emailErr = 'invalidEmail';
                echo $emailErr;
              
       }elseif(empty($password)){
                 $passwordErr = 'passwordErr';
                 echo $passwordErr; 
       } elseif(empty($cpassword)){
                 $cpasswordErr = 'cpasswordErr';
                  echo $cpasswordErr;
       }elseif($password !== $cpassword){
                $cpasswordErr = 'matchpassword';
                echo $cpasswordErr;
       }else{   
                $sql = 'SELECT userName FROM members WHERE userName = ?';
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                         $connectionErr = 'connectionErr';
                         echo $connectionErr;
                }else{
                       mysqli_stmt_bind_param($stmt, 's' , $username);
                       mysqli_stmt_execute($stmt);
                       mysqli_stmt_store_result($stmt);
                       $checkUsername = mysqli_stmt_num_rows($stmt);
                       if($checkUsername > 0){
                                $usernameErr = 'usernameExists';
                                echo $usernameErr;
                       }else{
                                $sql = 'SELECT userEmail FROM members WHERE userEmail = ?';
                                if(!mysqli_stmt_prepare($stmt, $sql)){
                                          $connectionErr = 'connectionErr';
                                          echo $connectionErr;
                                }else{
                                        mysqli_stmt_bind_param($stmt, 's', $email);
                                        mysqli_stmt_execute($stmt);
                                        mysqli_stmt_store_result($stmt);
                                        $checkEmail = mysqli_stmt_num_rows($stmt);
                                        if($checkEmail > 0){
                                               $emailErr = 'emailExists';
                                               echo $emailErr;
                                        }else{
                                             $hashedpassword = password_hash($password, PASSWORD_BCRYPT);
                                             $sql = 'INSERT INTO members (userName,name,userEmail, userPassword) VALUES (?,?,?,?)';
                                             if(!mysqli_stmt_prepare($stmt, $sql)){
                                                 $connectionErr = 'connectionErr';
                                                 echo $connectionErr; 
                                             }else{
                                                     mysqli_stmt_bind_param($stmt, 'ssss', $username, $name, $email, $hashedpassword);
                                                     mysqli_stmt_execute($stmt);
                                                     echo 'success';
                                                     $_SESSION['success'] = 'Registration was a success !!! Login in';
                                             }
                                        }
                                }


                       }
                }
       }
           
}



