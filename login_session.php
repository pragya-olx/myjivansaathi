<?php include('header.php');
include('menu.php');


$email = $_POST['email'];
$password = $_POST['password'];



$query= mysqli_query("select * from user_profile where email = $email and password = $password", $conncection);
$query = mysqli_query("insert into user_login() values()");