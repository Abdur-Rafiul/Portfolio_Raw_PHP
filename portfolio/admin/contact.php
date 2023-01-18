<?php

include '../include/config.php';
$sql = "SELECT * FROM `users` WHERE `users`.`email` = 'rafiul15-2265@diu.edu.bd'";

$result = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($result);
session_start();

if(!isset($_SESSION['isUserLoggedIn'])){

  echo "<script>window.location.href = '../admin/login.php';</script>";


}
$sql_icon = "SELECT * FROM `icon` WHERE `icon`.`id` = 1";


$result_icon = mysqli_query($con,$sql_icon);

$data_icon = mysqli_fetch_assoc($result_icon);


$con1 = "SELECT * FROM `contact`";
$con_result = mysqli_query($con,$con1);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    table,
    th,
    td {
        border: 1px solid black !important;
        border-collapse: collapse;
    }
    table{

       width:100%!important;
    }
    </style>

<link rel="stylesheet" type="text/css" href="../assets/css/datatables.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/datatables.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>

            </ul>



            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <a class="nav-link" href="../admin/logout.php">
                        Logout
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Panel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    </div>
                    <div class="info">
                        <a href="index.php" class="d-block">Rafiul Islam</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="index.php" class="nav-link ">
                                <i class="nav-icon "></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>

                        </li>

                        <li class="nav-item menu-open mt-2">
                            <a href="../admin/profile.php" class="nav-link ">
                                <i class="nav-icon "></i>
                                <p>
                                    Profile Setting

                                </p>
                            </a>

                        </li>

                        <li class="nav-item menu-open mt-2">
                            <a href="../admin/icon.php" class="nav-link ">
                                <i class="nav-icon "></i>
                                <p>
                                    Icon Setting

                                </p>
                            </a>

                        </li>
                        <li class="nav-item menu-open mt-2">
                            <a href="../admin/counter.php" class="nav-link ">
                                <i class="nav-icon "></i>
                                <p>
                                    Counter Setting

                                </p>
                            </a>

                        </li>


                      <li class="nav-item menu-open mt-2">
                        <a href="../admin/testimonials.php" class="nav-link ">
                          <i class="nav-icon "></i>
                          <p>
                            Testimonials Setting

                          </p>
                        </a>

                      </li>

                      <li class="nav-item menu-open mt-2">
                        <a href="../admin/contact.php" class="nav-link ">
                          <i class="nav-icon "></i>
                          <p>
                            Contact List

                          </p>
                        </a>

                      </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Profile Setting</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content" style="width:100%!important">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="">
                            <table style="width:100%!important"
                                class="table table-striped table-bordered table-responsive" id="counter_table">
                                <thead>
                                    <tr>
                                        <th>Name</th>

                                        <th>Email </th>
                                        <th>Subject</th>
                                        <th>Message </th>



                                    </tr>
                                </thead>
                                <tbody class="table">


                                    <?php
                                             if($con_result -> num_rows > 0){

                                               while($row = $con_result -> fetch_assoc()){
                                                   ?>
                                    <tr>
                                        <td>
                                            <?=$row['name']?>
                                        </td>
                                        <td>
                                            <?=$row['email']?>
                                        </td>
                                        <td>
                                            <?=$row['subject']?>
                                        </td>
                                        <td>
                                            <?=$row['message']?>
                                        </td>




                                    </tr>
                                    <?php
          }

        }



       ?>




                                </tbody>
                            </table>

                        </div>

                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
        </section>

        <!-- Modal -->
      <div class="modal fade updateData" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
           aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel11"></h5>
<!--              <h5 class="modal-title" id="exampleModalLabel1"></h5>-->
<!--              <h5 class="modal-title" id="exampleModalLabel2"></h5>-->
<!--              <h5 class="modal-title" id="exampleModalLabel3"></h5>-->
<!--              <h5 class="modal-title" id="exampleModalLabel4"></h5>-->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>





            <div class="modal-body">
              <form enctype="multipart/form-data"  class="row g-3"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label>Edit Yourf Icon</label>

                <div class="input-group mb-3">
                  <input type="facebook" id="icon" class="form-control iconu"  name="facebook" required>

                  <div class="input-group-append">
                    <div class="input-group-text">
                    </div>
                  </div>
                </div>

                <label>Edit Your title</label>

                <div class="input-group mb-3">
                  <input type="text" id="title" class="form-control titleu" name="title" value=""
                         required>
                  <div class="input-group-append">
                    <div class="input-group-text">
                    </div>
                  </div>
                </div>
                <label>Edit Your Pre</label>

                <div class="input-group mb-3">
                  <input type="text" id="pre" class="form-control preu"  name="Pre"
                         required>
                  <div class="input-group-append">
                    <div class="input-group-text">
                    </div>
                  </div>
                </div>
                <label>Edit Your Post</label>

                <div class="input-group mb-3">
                  <input type="text" id="post" class="form-control postu" name="post" value="""
                         required>
                  <div class="input-group-append">
                    <div class="input-group-text">
                    </div>
                  </div>
                </div>



                <!-- /.col -->
                <div class="col-4">
                </div>
                <div class="modal-footer">
                  <button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button onclick="myFunction()" type="button" class="btn btn-primary updateData">Save</button>
                </div>
                <!-- /.col -->
            </div>
            </form>


          </div>

        </div>
      </div>
    </div>

    <!-- /.content -->
    </div>


    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2022-2023 <a href="#">Admin Panel</a>.</strong>
        All rights reserved.

    </footer>



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
            integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--    <script src="plugins/jquery/jquery.min.js"></script>-->
    <script src="../assets/js/axios.min.js"></script>
    <script src="../assets/js/jquery.toast.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script src="../assets/js/datatables.min.js"></script>
    <script src="../assets/js/datatables-select.min.js"></script>
<script>

$(document).ready( function () {
//     $('.testimonials_table').DataTable();
    $('#counter_table').DataTable({"order":false});
    $('.dataTables_length').addClass('bs-select');
} );

  $(document).ready(function(){
    $(".edit2").click(function (){

      const id = $(this).data("id");

      const title = $(this).data("title");
      const icon = $(this).data("icon");
      const pre = $(this).data("pre");
      const post = $(this).data("post");
      $('.titleu').val(title)
      $('.iconu').val(icon)
      $('.preu').val(pre)
      $('.postu').val(post)

        document.getElementById("exampleModalLabel11").innerHTML = id;
       // document.getElementById("exampleModalLabel1").innerHTML = icon;
       // document.getElementById("exampleModalLabel2").innerHTML = title;
       // document.getElementById("exampleModalLabel3").innerHTML = pre;
       //  document.getElementById("exampleModalLabel4").innerHTML = post;
    })
  })







</script>


    <script>

      function myFunction() {
        // $('.updateData').click(function(){
        // console.log(id)
        //  document.getElementById("exampleModalLabel").setAttribute("name", id); ;
        const id = document.getElementById("exampleModalLabel11").innerHTML;
        const icon = document.getElementById("icon").value;
        const title = document.getElementById("title").value;
        const pre = document.getElementById("pre").value;
        const post = document.getElementById("post").value;
        //const axios = require('axios')


        // const title = $('.titleu').val()
        // const icon =$('.iconu').val()

        axios.post('/Personal_Portfolio_Raw_PHP/portfolio/admin/test.php', {
          id:id,
          icon:icon,
          title:title,
          pre:pre,
          post:post

        })
          .then(function (response) {
            //console.log('call ok')
            if (response.status == 200) {
              if (response.data == 1) {
                $('.updateData').modal('hide');
             window.location.href = '../admin/counter.php'

    showToast('Successfully  Data Updated!', {
                  duration: 5000, // The time interval after notification disappear
                  background: '#2fff00', // Background color for toast notification
                  color: '#f1f1f1', //Text color
                  borderRadius: '15px', //Border Radius,
                  marginTop: '89px'
                });
              }}

          })
          .catch(function (error) {
            //console.log(error);

            $('.updateData').modal('hide');
            window.location.href = '../admin/counter.php'
            showToast('Data Failed!', {
              duration: 5000, // The time interval after notification disappear
              background: '#ff2323', // Background color for toast notification
              color: '#f1f1f1', //Text color
              borderRadius: '15px', //Border Radius,
              marginTop: '89px'
            });
          });


      }
    </script>

</body>

</html>
