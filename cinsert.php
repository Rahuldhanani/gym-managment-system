<?php
$con = mysqli_connect("localhost", "root", "", "gym");


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mno = $_POST['mno'];
    $comment = $_POST['comment'];

    $qry = "INSERT INTO `contact`(`id`, `name`, `email`, `mno`, `comment`) VALUES (null, '$name', '$email', '$mno', '$comment')";

    mysqli_query($con, $qry);
    
    header("Location:cselect.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM MASTER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../solartech/css/bootstrap.min.css ">
    <link rel="stylesheet" href="../solartech/css/main.css">
    <link rel="stylesheet" href="main.css">

</head>

<body>
    <!-- nav -->
    <div class="bg11 text-white pb-5">
        <div class="container py-4">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="Logo" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                    <span class="navbar-toggler-icon" style="color: black;"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4 pe-4">
                        <li class="nav-item"><a class="nav-link" href="index.html">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">ABOUT US</a></li>
                        <li class="nav-item"><a class="nav-link" href="classes.html">CLASSES</a></li>
                        <li class="nav-item"><a class="nav-link" href="service.html">SERVICES</a></li>
                        <li class="nav-item"><a class="nav-link" href="team.html">OUR TEAM</a></li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown">
                                PAGES
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                <li><a class="dropdown-item" href="timetable.html">Classes TimeTable</a></li>
                                <li><a class="dropdown-item" href="calculator.html">BMI Calculate</a></li>
                                <li><a class="dropdown-item" href="team.html">Our Team</a></li>
                                <li><a class="dropdown-item" href="gallary.html">Gallery</a></li>
                                <li><a class="dropdown-item" href="blog.html">Our Blog</a></li>
                                <li><a class="dropdown-item" href="error.html">404</a></li>
                            </ul>
                        </li>
    
                        <li class="nav-item"><a class="nav-link" href="cinsert.php">CONTACT</a></li>
                    </ul>
                    <div class="d-flex align-items-center ms-3 gap-3">
                        <i class="fa-solid fa-magnifying-glass text-white"></i>
                        <i class="fa-brands fa-facebook-f text-white"></i>
                        <i class="fa-brands fa-twitter text-white"></i>
                        <i class="fa-brands fa-instagram text-white"></i>
                        <a href="registation.php"><i class="fa-solid fa-user text-white"></i></a>
                        <a href="login.php"><i class="fa-solid fa-right-to-bracket  text-white"></i></a>        
                      </div>
                   
                </div>
            </nav>
        </div>
    
        <!-- Hero Content -->
    <div class="container text-center mt-5 pt-5">
      <div class="about-page">
        <p class="pa-f1 ps-2">CONTACT</p>
        <ul class="d-flex justify-content-center fs-5">
          <li >Home</li>
          <li class="ps-2">></li>
          <li class="ps-2" style="color: #f36100;"><a href="">Contact</a></li>
        </ul>
    </div>
  </div>
    </div>
    <!-- contact page -->
    <div class="con">
        <div class="container ">
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="con-ti">
                    <p class="ct1">CONTACT US</p>
                    <p class="ct2">GET IN TOUCH</p>
                </div>
                <div class="con-det">
                    <div class="contact">
                        <div class="con-icon">
                            <i class="fa-solid fa-location-dot fa-xl" style="color: #f36100;"></i>
                        </div>
                        <p class="cit1">333Middle Winchendon Rd, Rindge,<br> NH 03461 </p>
                    </div>
                    <div class="contact">
                        <div class="con-icon">
                            <i class="fa-solid fa-mobile-screen-button fa-xl" style="color: #f36100;"></i>
                        </div>
                        <p class="cit1">125-711-811 | 125-668-886 </p>
                    </div>
                    <div class="contact">
                        <div class="con-icon">
                            <i class="fa-solid fa-envelope fa-xl" style="color: #f36100;"></i>
                        </div>
                        <p class="cit1">Support.gymcenter@gmail.com </p>
                    </div>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <form action="" method="post" class="pt-5">                                   
                    <div class="mb-3">                    
                        <input type="text" class="form-control" style="background-color: transparent; border: 1px solid gray;" name="name"  id="name" placeholder="Enter your name" required>
                      </div>
                  
                      <!-- Email Field -->
                      <div class="mb-3">
                        <input type="email" class="form-control" style="background-color: transparent; border: 1px solid gray;" name="email" id="email" placeholder="Email" required>
                      </div>
                  
                      <!-- Website Field -->
                      <div class="mb-3">
                        <input type="number" class="form-control" style="background-color: transparent; border: 1px solid gray;" name="mno"  id="mno" placeholder="mobile no">
                      </div>
                  
                      <!-- Comment Field -->
                      <div class="mb-3">                     
                        <textarea class="form-control" id="comment" style="background-color: transparent; border: 1px solid gray;" name="comment" rows="4" placeholder="comment"></textarea>
                      </div>
                  
                      <!-- Submit Button -->
                       <div class="d-grid ">
                            <input type="submit" name="submit" class="btn text-center" style="color: white;background-color: #f36100;"></input>
                       </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <div class="map">
   
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238132.6728892043!2d72.65747210655415!3d21.159440566239983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1745989364631!5m2!1sen!2sin" width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    </div>    
   <div class="footer1 pb-4">
      
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 mt-4">
          <div class="foot">
            <div class="f-icon">
              <i class="fa-solid fa-location-dot fa-xl" style="color: #ffffff;"></i>
            </div>
            <div class="f-add">
              <p>333 Middle Winchendon Rd, Rindge, <br>NH 03461</p>

            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 mt-4">
          <div class="foot">
            <div class="f-icon">
              <i class="fa-solid fa-mobile-screen-button fa-xl" style="color: #ffffff;"></i>
            </div>
            <div class="f-add">
              <p > 125-711-811 | 125-668-886</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 mt-4">
          <div class="foot">
            <div class="f-icon">
              <i class="fa-solid fa-envelope fa-xl" style="color: #ffffff;"></i>
            </div>
            <div class="f-add">
              <p>
                Support.gymcenter@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- footer 2 -->

<div class="footer2 pt-5">      
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-4">
      <ul class="fo-ul">
        <li><img src="/img/logo.png" alt=""></li>
        <li class="pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua endisse ultrices gravida lorem.</li>
        <li class="pt-2">
          <i class="fa-brands fa-facebook-f fa-sm ms-2" style="color: #ffffff;"></i>
          <i class="fa-brands fa-twitter fa-sm ms-2" style="color: #ffffff;"></i>
          <i class="fa-brands fa-youtube fa-sm ms-2" style="color: #ffffff;"></i>
          <i class="fa-brands fa-instagram fa-sm ms-2" style="color: #ffffff;"></i>
          <i class="fa-regular fa-envelope fa-sm ms-2" style="color: #ffffff;"></i>       
         </li>
      </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2 col-xl-2 col-xxl-2 mt-4">
      <ul class="fo-ul">
        <li><h3 class="text-white fw-bold">Useful link</h3></li>
        <li class="pt-3">About</li>
        <li class="pt-1">Blog</li>
        <li class="pt-1">Classes</li>
        <li class="pt-1">Contact</li>
      </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2 col-xl-2 col-xxl-2 mt-4">
      <ul class="fo-ul">
        <li><h3 class="text-white fw-bold">Support</h3></li>
        <li class="pt-3">Login</li>
        <li class="pt-1">My account</li>
        <li class="pt-1">Subscribe</li>
        <li class="pt-1">Contact</li>
      </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-4">
      <ul class="fo-ul">
        <li><h3 class="text-white fw-bold">Tips & Guides</h3></li>
        <li class="pt-2 font2">Physical fitness may help prevent depression, anxiety</li>
        <li class="pt-1 font1"><pre>3 min read  |  20 comment</pre></li>
        <li><hr></li>
       <li class="font2">Fitness: The best exercise to lose belly fat and tone up...</li>
       <li class=" font1"><pre>3 min read  |  20 comment</pre></li>
       
      </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
      <hr class="line">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pt-2 pb-4">
      <p class="l-foot">Copyright ©2025 All rights reserved | This template is made with <a href="#" class="heart">&#10084</a> by <a href="#" class="foot-li">Colorlib</a></p>
    </div>
  </div>
</div>
</div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="index.js"></script>
<!-- <script src="index1.js"></script> -->

</html>