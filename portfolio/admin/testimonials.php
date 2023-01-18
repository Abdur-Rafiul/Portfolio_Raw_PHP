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


$counter = "SELECT * FROM `counter`";
$counter_result = mysqli_query($con,$counter);

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
    <button   id="add_testimonials" type="button"
              class="btn  btn-info m-2" data-toggle="modal"
              data-target="#add_testimonial">
      <i class="fa-regular fa-plus mr-2"></i>
      Add Testimonials

    </button>
<?php

$t = "SELECT * FROM `testimonials`";
$tes = mysqli_query($con,$t);

?>
    <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="f">
                            <table id="testimonials_table" style="overflow-x: auto;border-collapse: collapse;width: 100%;"
                                class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>Name</th>

                                        <th>Occupation </th>
                                        <th>Description</th>
                                        <th>Photo </th>






                                    </tr>
                                </thead>
                                <tbody  class="">
                                 <?php


                                  if($tes -> num_rows > 0){

                                    while($row = $tes -> fetch_assoc()){


                                ?>


                                  <tr>
                                        <td>
                                        <?=$row['name']?>
                                        </td>
                                        <td>
                                            <?=$row['occupation']?>
                                        </td>
                                        <td>
                                            <?=$row['des']?>
                                        </td>
                                        <td>
                                          <img style="width:100px" src="../assets/img/<?=$row['photo']?>" alt="">

                                        </td>




                                    </tr>'
                                  <?php
                                  }}


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
    <div class="modal fade addData" id="add_testimonial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel11"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>





          <div class="modal-body">
            <form enctype="multipart/form-data"  class="row g-3"
                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <label>Enter  Name</label>

              <div class="input-group mb-3">
                <input type="text" id="name" class="form-control name"  name="name" required>

                <div class="input-group-append">
                  <div class="input-group-text">
                  </div>
                </div>
              </div>

              <label>Add  Profession</label>

              <div class="input-group mb-3">
                <input type="text" id="profession" class="form-control profession" name="profession" value=""
                       required>
                <div class="input-group-append">
                  <div class="input-group-text">
                  </div>
                </div>
              </div>
              <label>Add  Photo</label>

              <div class="input-group mb-3">
                <input type="file" id="tes_img" class="form-control tes_img"  name="tes_img"
                       required>
                <div class="input-group-append">
                  <div class="input-group-text">
                  </div>
                </div>
              </div>
              <label>Add Description</label>

              <div class="input-group mb-3">
                <input type="text" id="description" class="form-control description" name="description" value="""
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
                <button onclick="myFunction()" type="button" class="btn btn-primary addData">Save</button>
              </div>
              <!-- /.col -->
          </div>
          </form>


        </div>

      </div>
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
  $(document).ready(function(){
    $("#add_testimonials").click(function (){


      $('#add_testimonial').modal('show');

    })
  })

  $(document).ready( function () {
//     $('.testimonials_table').DataTable();
    $('#testimonials_table').DataTable({"order":false});
    $('.dataTables_length').addClass('bs-select');
} );





</script>


<script>

  function myFunction() {

    const name = document.getElementById("name").value;
    const profession = document.getElementById("profession").value;
    const description = document.getElementById("description").value;

    const MyFile = $('#tes_img').prop('files')[0]
    console.log(MyFile)
    // alert(name+profession+description+MyFile)
    const MyFormData = new FormData();

    MyFormData.append('name', name);
    MyFormData.append('FileKey', MyFile);
    MyFormData.append('profession', profession);
    MyFormData.append('description', description);
    console.log(MyFormData)

    axios.post('/Personal_Portfolio_Raw_PHP/portfolio/admin/testimonial_test.php',MyFormData ,{

  headers: {
    "Content-Type": "multipart/form-data",
  },})
      .then(function (response) {

        if (response.status == 200) {

            $('#add_testimonial').modal('hide');
            // window.location.href = '../admin/counter.php'

             console.log(response)
          }

      })
      .catch(function (error) {

        $('#add_testimonial').modal('hide');
        console.log(error)

      });


  }
</script>

</body>

</html>
