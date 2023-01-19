<?php
include './include/config.php';

$req= file_get_contents('php://input');
$data= json_decode($req,true);

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

$query1 = "SELECT * FROM user_details WHERE email='$email' && password='$password'";
$run = mysqli_query($con,$query1);
$data = mysqli_fetch_array($run);

if(count($data) > 0){


    $_SESSION["loggedin"] = true;
    $_SESSION["email"] = $_POST['email'];;
    $_SESSION["password"] = $_POST['password'];
   echo '1';
}else{

    echo '0';
}


