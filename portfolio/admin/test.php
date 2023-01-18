<?php
include '../include/config.php';

$req= file_get_contents('php://input');
$data= json_decode($req,true);
  //echo $data['title'];
$id= $data['id'];
$icon = $data['icon'];
$title = $data['title'];
$pre = $data['pre'];
$post = $data['post'];
if(empty($data['icon']) or empty($data['title'])
  or empty($data['pre']) or empty($data['post'])

){

  echo 0;

}else {


  $sql = "UPDATE `counter` SET `icon`='$icon',`title`='$title',`pre`='$pre',
`post`='$post' WHERE `counter`.`id`=$id";

  $result = mysqli_query($con, $sql);

 echo "1";
}
