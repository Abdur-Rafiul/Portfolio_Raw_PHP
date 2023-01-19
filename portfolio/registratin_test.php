<?php
include './include/config.php';

$req= file_get_contents('php://input');
$data= json_decode($req,true);



    $FullName = $_POST['fullName'];
    $email = $_POST['email'];
    $UserName = $_POST['userName'];
    $Phone = $_POST['phone'];
    $Password = $_POST['password'];

    echo $FullName;
    if(empty($FullName) or empty($email) or empty($UserName) or empty($Phone)  or empty($Password)){

        echo "<span class='error'>Field must not be Empty</span>";

    }else{

        $sql = "INSERT INTO user_details (fullName,email,userName,phone,password1)
    VALUES ('$FullName','$email',  '$UserName', '$Phone', '$Password')";

        $result = mysqli_query($con,$sql);

        if($result){
           echo "Registration Success";

        }else{

            echo "Something Went Wrong!";
        }


}