<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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
    </style>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
<script>
    $(document).ready (function () {
        $("#login-form").validate();
    });

</script>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="mt-3">User Login</h3>
                <form id="login-form" class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text"></div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input minlength="4" type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <a href="registration.php">Registration</a>
                    <button onclick="myFunction()" type="button" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>




    </div>


    <script src="./assets/js/axios.min.js"></script>


    <script>
        function myFunction() {

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            // alert(fullName)
            //const MyFile = $('#tes_img').prop('files')[0]
            //console.log(MyFile)
            // alert(name+profession+description+MyFile)
            const MyFormData = new FormData();


            MyFormData.append('email', email);

            MyFormData.append('password', password);
            console.log(MyFormData)

            axios.post('/portfolio_raw_php/portfolio/login_test.php',MyFormData ,{

                headers: {
                    "Content-Type": "multipart/form-data",
                },})
                .then(function (response) {

                    if (response.status == 200) {
                        if (response.data == 1) {
                            alert('Login Successfully Done');
                            window.location.href = 'index.php'

                            console.log(response)
                        } else {
                            alert('Login Failed');
                        }
                    }else{
                        alert('Login Failed');
                    }
                })
                .catch(function (error) {

                    alert('Login Failed');
                    console.log(error)

                });


        }
    </script>
</body>

</html>