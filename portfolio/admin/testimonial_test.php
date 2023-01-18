<?php

include '../include/config.php';

$req= file_get_contents('php://input');
$data= json_decode($req,true);
//die($req);
$name = $_POST['name'];
$ocu = $_POST['profession'];
$des = $_POST['description'];
//  echo $_FILES["FileKey"]["name"];
$photo = $_FILES["FileKey"]["name"];
//C:\xampp\htdocs\portfolio\admin\testimonial_test.php
$upload_file=move_uploaded_file($_FILES["FileKey"]["tmp_name"],'../assets/img/'.basename($_FILES["FileKey"]["name"]));
// ok vai jquery data table a problem dekben  dekhao
if($upload_file){
  $sql = "INSERT INTO testimonials (name, occupation, des, photo)
VALUES ('$name', '$ocu', '$des', '$photo')";

$testimonials = mysqli_query($con,$sql);
echo 'img uploaded';
 }else{
  echo 'img upload failed';
}

// call
