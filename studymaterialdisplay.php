<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>SSC</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo0.png" hieght="30" width="41"></a>
        <div class="collapse navbar-collapse" id="Navbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="./courses.html"><span class="fa fa-list-ol fa-lg"></span> Courses</a></li>
            <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-book fa-lg"></span> Study Materials</a></li>
            <li class="nav-item"><a class="nav-link" href="./achievement.php"><span class="fa fa-star fa-lg"></span> Achievements</a></li>
            <li class="nav-item"><a class="nav-link" href="./photogallery.php"><span class="fa fa-image fa-lg"></span> Photo Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="./testimonial.php"><span class="fa fa-comments fa-lg"></span> Testimonial</a></li>
            <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-5 text-center">
                    <h1>SURE SUCCESS CENTRE</h1>
                    <p>A name that spells confidence!</p>
                </div>
                <div class="col-12 col-sm align-self-center">
                  <img src="img/logo0.png" class="img-fluid">
                </div>
            </div>
        </div>
    </header>
    
<div class="container">
    
    <div class="row">
          <ol class="col-12 breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            <li class="breadcrumb-item active">Study Materials</li>
          </ol>
            <div class="col">
               <h3>Study Materials</h3>
               <hr>
            </div>
        </div>
    
<div class="row row-header row-content">
             
            <div class="col-12 col-sm-12">
                
                
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#banking" role="tab" data-toggle="tab">Banking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#ssc" role="tab" data-toggle="tab">SSC</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#railway" role="tab" data-toggle="tab">Railway</a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade show active" id="banking">
                    <h3>Banking</h3>
                    <ul>
                      
                        <?php
                        $dirname = "uploads/studymaterials/banking";
                        $files = scandir($dirname);
                        $ignore = Array(".", "..");
                        foreach($files as $curfile){
                        if(!in_array($curfile, $ignore)) {

                        ?>

                        <li><a href="uploads/studymaterials/banking/<?php echo $curfile; ?>" class="text-primary" target="_blank" rel="noopener"><?php echo $curfile; ?></a></li>



                        <?php
                        //echo "<br>\n";
                        };
                        }  
                        ?>
                      </ul>
                      
                  </div>


                  <div role="tabpanel" class="tab-pane fade" id="ssc">
                    <h3>SSC</h3>
                    <ul>
                      <?php
                        $dirname = "uploads/studymaterials/ssc";
                        $files = scandir($dirname);
                        $ignore = Array(".", "..");
                        foreach($files as $curfile){
                        if(!in_array($curfile, $ignore)) {

                        ?>

                        <li><a href="uploads/studymaterials/ssc/<?php echo $curfile; ?>" class="text-primary" target="_blank" rel="noopener"><?php echo $curfile; ?></a></li>



                        <?php
                        //echo "<br>\n";
                        };
                        }  
                        ?>
                      </ul>
                  </div>


                  <div role="tabpanel" class="tab-pane fade" id="railway">
                    <h3>Railway</h3>
                        <ul>
                        <?php
                        $dirname = "uploads/studymaterials/railway";
                        $files = scandir($dirname);
                        $ignore = Array(".", "..");
                        foreach($files as $curfile){
                        if(!in_array($curfile, $ignore)) {

                        ?>

                        <li><a href="uploads/studymaterials/railway/<?php echo $curfile; ?>" class="text-primary" target="_blank" rel="noopener"><?php echo $curfile; ?></a></li>



                        <?php
                        //echo "<br>\n";
                        };
                        }  
                        ?>
                      </ul>
                  </div>

                </div>
                
            </div>
       </div>

    </div>
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-5 offset-sm-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./aboutus.html">About Us</a></li>
                        <li><a href="./courses.html">Courses</a></li>
                        <li><a href="#">Study Materials</a></li>
                        <li><a href="./achievement.php">Achievements</a></li>
                        <li><a href="./photogallery.php">Photo Gallery</a></li>
                        <li><a href="./testimonial.php">Testimonial</a></li>
                        <li><a href="./contactus.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              Circular Road, Ranchi-1<br>
		              Ext. 1: 202,Hari-Om Tower, Circular Road,<br>
		              Lalpur Ranchi - 1<br>
                      <i class="fa fa-phone fa-lg"></i>: +91-9835164787<br>
                      <i class="fa fa-envelope fa-lg"></i>:
                      <a href="mailto:sscranchi1996@reddiffmail.com"><small>sscranchi1996@reddiffmail.com</small></a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2019 Sure Success Centre</p>
                </div>
           </div>
        </div>
    </footer>
    
 <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
    </body>
    
    
</html>