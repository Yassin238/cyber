<?php

include('connexion.php');
session_start();
$email=$_POST['email'];
$pass=$_POST['password'];

$sql="SELECT * from users where email='$email' and password ='$password'";
$res=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($res);

?>