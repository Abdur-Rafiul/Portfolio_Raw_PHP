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


    <style>
        form {
            margin-top: 20px;
            margin-left: 100px;
        }

        label {
            width: 300px;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;

        }
        label.error {
            color: red;
            font-size: 1rem;
            display: block;
            margin-top: 5px;
        }
        body  {
            background-image: url('assets/img/bm.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-color: #e5c4c4;
            background-size: cover;

        }
    </style>
</head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
<script>
    $(document).ready (function () {
        $("#registration-form").validate();
    });

</script>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3 class="mt-3 text-white">User Registration</h3>
            <form id="registration-form"  class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="mb-3">
                    <!--                        <label for="" class=""></label>-->
                    <label for= "fullName text-white" class="text-white"> Full Name </label>
                    <input type="text" minlength="4"   class="form-control" name="fullName" id="fullName" required>

                </div>

                <div class="mb-3">
                    <label for="" class="text-white">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">User Name</label>
                    <input type="text" class="form-control" minlength="4" name="userName" id="userName" aria-describedby="emailHelp" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Phone</label>
                    <input type="number" minlength="4" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" required>

                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                    <input minlength="8" type="password" class="form-control" name="password" id="password" required>
                </div>

                <button onclick="myFunction()" type="button" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>

<script src="./assets/js/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script>
    function myFunction() {

        const fullName = document.getElementById("fullName").value;
        const email = document.getElementById("email").value;
        const userName = document.getElementById("userName").value;
        const phone = document.getElementById("phone").value;
        const password = document.getElementById("password").value;
       // alert(fullName)
        //const MyFile = $('#tes_img').prop('files')[0]
        //console.log(MyFile)
        // alert(name+profession+description+MyFile)
        const MyFormData = new FormData();

        MyFormData.append('fullName', fullName);
        MyFormData.append('email', email);
        MyFormData.append('userName', userName);
        MyFormData.append('phone', phone);
        MyFormData.append('password', password);
        console.log(MyFormData)

        axios.post('/portfolio_raw_php/portfolio/registratin_test.php',MyFormData ,{

            headers: {
                "Content-Type": "multipart/form-data",
            },})
            .then(function (response) {

                if (response.status == 200) {
                   if(response.data ==1){
                       alert('Registration Successfully Done');
                       window.location.href = 'login.php'
                   }else{
                       alert('Registration Failed');
                   }


                    console.log(response)
                }else{
                    alert('Registration Failed');
                }

            })
            .catch(function (error) {

                alert('Registration Failed');
                console.log(error)

            });


    }
</script>

</body>

</html>