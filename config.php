<?php
$hostname = 'localhost';
$username = 'root';;
$password = '';
$database = 'practice';
$connection = mysqli_connect($hostname, $username, $password, $database);
if(mysqli_connect_errno($connection)){
       echo 'Error connecting to Database';
}