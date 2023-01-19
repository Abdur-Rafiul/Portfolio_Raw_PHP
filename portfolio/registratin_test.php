<?php
include './include/config.php';

$req= file_get_contents('php://input');
$data= json_decode($req,true);



    $FullName = $_POST['fullName'];
    $email = $_POST['email'];
    $UserName = $_POST['userName'];
    $Phone = $_POST['phone'];
    $Password = $_POST['password'];

    //echo $FullName;
    if(empty($FullName) or empty($email) or empty($UserName) or empty($Phone)  or empty($Password)){

        echo "0";

    }else{

        $sql = "INSERT INTO user_details (fullName,email,userName,phone,password)
    VALUES ('$FullName','$email',  '$UserName', '$Phone', '$Password')";

        $result = mysqli_query($con,$sql);

        if($result){
           echo '1';

        }else{

            echo '0';
        }


}