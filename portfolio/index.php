<?php include 'include/config.php';
session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
///Robin
$sql = "SELECT * FROM `users` WHERE `users`.`email` = 'rafiul15-2265@diu.edu.bd'";
$sql_icon = "SELECT * FROM `icon` WHERE `icon`.`id` = 1";
   //hh    
$result = mysqli_query($con,$sql);
$result_icon = mysqli_query($con,$sql_icon);

$data_icon = mysqli_fetch_assoc($result_icon);
$data = mysqli_fetch_assoc($result);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?=$data['name'] ?>-<?=$data['title'] ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">

            <h1><a href="index.php"><?php echo $data['name']  ?></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            <h2>I'm a passionate <span><?php echo $data['title']  ?></span> from Bangladesh</h2>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="#header">Home</a></li>
                    <li><a class="nav-link" href="#about">About</a></li>                      
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                    <li><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="social-links">
                <?php
          if($data_icon['twitter']){

        ?>

                <a href="<?=$data_icon["twitter"]?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                <?php
          }

        ?>
                <?php
          if($data_icon['facebook']){

        ?>

                <a href="<?=$data_icon["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                <?php
          }

        ?>
                <?php
          if($data_icon['instagram']){

        ?>

                <a href="<?=$data_icon["instagram"]?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                <?php
          }

        ?>
                <?php
          if($data_icon['linkedin']){

        ?>

                <a href="<?=$data_icon["linkedin"]?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <?php
          }

        ?>
                <?php
          if($data_icon['github']){

        ?>

                <a href="<?=$data_icon["github"]?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
                <?php
          }

        ?>
                <?php
          if($data_icon['youtube']){

        ?>

                <a href="<?=$data_icon["youtube"]?>" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
                <?php
          }

        ?>


            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <p>Learn more about me</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/img/me.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3><?=$data['title']  ?></h3>
                    <p class="fst-italic">
                        <?=$data['description']  ?>
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                    <span><?= date('d M Y',strtotime($data['birthday']));  ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website: <a target="_blank"
                                            href="<?=$data['website']  ?>">rafiul.com</a></strong> <span></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                    <span>+88<?=$data['phone']  ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                    <span><?=$data['city']  ?></span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                    <span><?=$data['age']  ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                    <span><?=$data['degree']  ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                    <span><?=$data['email']  ?></span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End About Me -->




        <?php
         $counter = "SELECT * FROM `counter`";
         $counter_result = mysqli_query($con,$counter);

         ?>
        <!-- ======= Counts ======= -->
        <div class="counts container">

            <div class="row">
                <?php
         if($counter_result -> num_rows > 0){
          
          while($row = $counter_result -> fetch_assoc()){
          ?>
                <div class="col-lg-3 col-md-6 mt-5">
                    <div class="count-box">
                        <i class="<?=$row['icon']?>"></i>
                        <span data-purecounter-start="<?=$row['pre']?>" data-purecounter-end="<?=$row['post']?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p><?=$row['title']?></p>
                    </div>
                </div>
                <?php
          }
        
        }



       ?>







            </div>

        </div><!-- End Counts -->

        <!-- ======= Skills  ======= -->
        <div class="skills container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row skills-content">

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CSS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">PHP <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Photoshop <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div><!-- End Skills -->

        <!-- ======= Interests ======= -->
      

        <!-- ======= Testimonials ======= -->
        <div class="testimonials container">

            <div class="section-title">
                <h2>Testimonials</h2>
            </div>
                   <?php
                    $t1 = "SELECT * FROM `testimonials`";
                    $tes1 = mysqli_query($con,$t1);

                     ?>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                <?php
                          if($tes1 -> num_rows > 0){

                                    while($row = $tes1 -> fetch_assoc()){


                                ?>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?=$row['des']?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img style="width:200px" src="./assets/img/<?=$row['photo']?>" class="testimonial-img" alt="">
                            <h3><?=$row['name']?></h3>
                            <h4> <?=$row['occupation']?></h4>
                        </div>
                    </div><!-- End testimonial item -->

              <?php
                 }}
              ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="owl-carousel testimonials-carousel">

            </div>

        </div><!-- End Testimonials  -->

    </section><!-- End About Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p><?=$data["address"]?></p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <?php
          if($data_icon['twitter']){

        ?>

                            <a href="<?=$data_icon["twitter"]?>" target="_blank" class="twitter"><i
                                    class="bi bi-twitter"></i></a>
                            <?php
          }

        ?>
                            <?php
          if($data_icon['facebook']){

        ?>

                            <a href="<?=$data_icon["facebook"]?>" target="_blank" class="facebook"><i
                                    class="bi bi-facebook"></i></a>
                            <?php
          }

        ?>
                            <?php
          if($data_icon['instagram']){

        ?>

                            <a href="<?=$data_icon["instagram"]?>" target="_blank" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <?php
          }

        ?>
                            <?php
          if($data_icon['linkedin']){

        ?>

                            <a href="<?=$data_icon["linkedin"]?>" target="_blank" class="linkedin"><i
                                    class="bi bi-linkedin"></i></a>
                            <?php
          }

        ?>
                            <?php
          if($data_icon['github']){

        ?>

                            <a href="<?=$data_icon["github"]?>" target="_blank" class="github"><i
                                    class="bi bi-github"></i></a>
                            <?php
          }

        ?>
                            <?php
          if($data_icon['youtube']){

        ?>

                            <a href="<?=$data_icon["youtube"]?>" target="_blank" class="youtube"><i
                                    class="bi bi-youtube"></i></a>
                            <?php
          }

        ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p><?=$data["email"]?></p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p>+88 <?=$data["phone"]?></p>
                    </div>
                </div>
            </div>

            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                method="post" role="form" class="php-email-form mt-4">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button class="sub"  type="submit">Send Message</button></div>
            </form>

        </div>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        //echo $FullName;
        if(empty($name) or empty($email) or empty($subject) or empty($message)){

          // echo "<span class='error'>"."Field must not be Empty"."</span>";

        }else{

        $sql = "INSERT INTO contact (name,email,subject,message)
        VALUES ('$name','$email',  '$subject', '$message')";
        
        $result = mysqli_query($con,$sql);

        }?>

      
<?php

        }
   ?>
    </section><!-- End Contact Section -->

    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
        Designed by <a href="https://personal-website-livid-sigma.vercel.app/" target="_blank"><?=$data["name"]?></a>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
            document.querySelector('.sub').click(function(){
            
                location.reload();
            
            
            })
          </script>
   
</body>

</html>