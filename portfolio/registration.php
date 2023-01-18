<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="mt-3">User Registration</h3>
                <form enctype="multipart/form-data" class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="mb-3">
                        <label for="" class="">Full Name</label>
                        <input type="text" class="form-control" name="fullName" id="" aria-describedby="">
                       
                    </div>

                    <div class="mb-3">
                        <label for="" class="">Email</label>
                        <input type="text" class="form-control" name="email" id="" aria-describedby="">
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="userName" id="exampleInputEmail1" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp">
                       
                    </div>
                   
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>

    </div>

    <?php
 include 'include/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $FullName = $_POST['fullName'];
    $email = $_POST['email'];
    $UserName = $_POST['userName'];
    $Phone = $_POST['phone'];
    $Password = $_POST['password'];

    //echo $FullName;
    if(empty($FullName) or empty($email) or empty($UserName) or empty($Phone)  or empty($Password)){
  
       echo "<span class='error'>"."Field must not be Empty"."</span>";
  
  }else{

    $sql = "INSERT INTO user_details (fullName,email,userName,phone,password1)
    VALUES ('$FullName','$email',  '$UserName', '$Phone', '$Password')";
     
    $result = mysqli_query($con,$sql);

    if($result){
        // $to_email = $email;
        // $subject = 'Registration Complete';
        // $message = 'Hey ! User I am Rafiul Islam ';
        // $headers = ['From' => $email, 'Reply-To' => $email];
        // mail($to_email,$subject,$message,$headers);
        header("location: login.php");
    }else{
       
        echo "Something Went Wrong!";
    }
}

}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.dropify').dropify();
    </script>
</body>

</html>