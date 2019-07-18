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
            <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="./courses.html"><span class="fa fa-list-ol fa-lg"></span> Courses</a></li>
            <li class="nav-item"><a class="nav-link" href="./studymaterialdisplay.php"><span class="fa fa-book fa-lg"></span> Study Materials</a></li>
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
      <div class="row row-content">
        <div class="col">
          <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/slide8.jpg" alt="uthappizza">
                <!--<div class="carousel-caption d-none d-md-block">
                  caption
                </div>-->

              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/slide9.jpg" alt="buffet">
                <!--<div class="carousel-caption d-none d-md-block">
                  caption
                </div>-->

              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/slide14.jpg" alt="alberto">
                <!--<div class="carousel-caption d-none d-md-block">
                  caption
                </div>-->
              </div>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
              <li data-target="#mycarousel" data-slide-to="1"></li>
              <li data-target="#mycarousel" data-slide-to="2"></li>
            </ol>
            <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            <button class="btn btn-danger btn-sm" id="carouselButton">
              <span id="carousel-button-icon" class="fa fa-pause"></span>
            </button>
          </div>
        </div>
      </div>
        
        <!--News & Event and New Batch/Class-->
        <div class="row row-content align-items-center">
            
            <div class="col-12 col-sm-4">
            </div>
            
            <div class="col-12 col-sm-6">
                <h5><a href="#" class="badge badge-pill badge-warning">Click here for registration for online examination.</a></h5>
            </div>
            
            <div class="col-12 col-sm-2">
            </div>
            
            <!--News & Event-->
            <div class="col-12 col-sm-6 align-self-center">
                  
                    <div class="card">
                  <h3 class="card-header bg-primary text-white">News & Event</h3>
                  <div class="card-body">
                      
                      <marquee  direction="up"  scrollamount="2">
                        
                          <ul>
                        
                            <?php
                            $myfile = fopen("uploads/news&events.txt", "r") or die("Unable to open file!");
                            while(!feof($myfile)) {
                            ?>
                          
                          <li class="text-info"><?php echo fgets($myfile) . "<br>"; ?></li>
                          <?php
                                }
                            fclose($myfile);
                          ?>
                      </ul>
                          
                      </marquee>
                      
                  </div>
              </div>        
            </div>
            
            <!--New Batch/Class-->
            <div class="col-12 col-sm-6 align-self-center">
                  
                    <div class="card">
                  <h3 class="card-header bg-primary text-white">New Batch/Class</h3>
                  <div class="card-body">
                      
                      <marquee  direction="up"  scrollamount="2">
                        
                          <ul>
                        
                            <?php
                            $myfile2 = fopen("uploads/batch&class.txt", "r") or die("Unable to open file!");
                            while(!feof($myfile2)) {
                            ?>
                          
                          <li class="text-info"><?php echo fgets($myfile2) . "<br>"; ?></li>
                          <?php
                                }
                            fclose($myfile2);
                          ?>
                      </ul>
                          
                      </marquee>
                      
                  </div>
              </div>        
            </div>
            
        </div>
        
        <!-- News clippings, Courses/Assessment and Top Performers-->
        <div class="row row-content">
        
            <!-- News clippings -->
            <div class="col-12 col-sm-3">
                <div class="card">
                  <h3 class="card-header bg-primary text-white">News Clippings</h3>
                  <div class="card-body">
                <div id="newscarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      
                    <?php
                    $count=-1;
                    $dirname = "uploads/photos/newsclippings";
                    $images = scandir($dirname);
                    $ignore = Array(".", "..");
                    foreach($images as $curimg){
                    if(!in_array($curimg, $ignore)) {
                    $count=$count+1; 
                    ?>
                    
                    <li data-target="#newscarousel" data-slide-to="<?php echo $count ?>" class="<?php if($count==0) echo "active"; ?>"></li>
                      
                    <?php  

                        
                    }}
                    ?>
                      
                    
                  </ol>
                  <div class="carousel-inner">
                      
                    <?php
                    $count2=-1;
                    $dirname = "uploads/photos/newsclippings";
                    $images = scandir($dirname);
                    $ignore = Array(".", "..");
                    foreach($images as $curimg){
                    if(!in_array($curimg, $ignore)) {
                        $count2=$count2+1;
                            
                    ?>
                    <div class="carousel-item <?php if($count2==0) echo "active"; ?>">
                      <img class="d-block w-100" src="uploads/photos/newsclippings/<?php echo $curimg; ?>" alt="<?php echo $curimg; ?>" onclick="window.open(this.src)">
                    </div>
                      
                    <?php
                        }}

                    ?>
                      
                    
                  </div>
                  <a class="carousel-control-prev" href="#newscarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#newscarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                
                    </div>
                </div>
                
            </div>
            
            <!--Courses and Assessment-->
            <div class="col-12 col-sm-6">
                
                <div class="card">
                  <h3 class="card-header bg-primary text-white text-center">Course Categories</h3>
                  <div class="card-body text-center">
                      
                        <h3>
                        <span class="badge badge-success">RAILWAY(TECH & NON-TECH)</span>
                        <span class="badge badge-light">COMPUTER COURSES</span><br>
                        <span class="badge badge-secondary">BANK(PO & CLERK)</span><br>
                        <span class="badge badge-danger">CDS</span>
                        <span class="badge badge-dark">CPO</span>
                        <span class="badge badge-info">CPF</span>
                        <span class="badge badge-primary">MBA</span>
                      </h3>
                      <br>
                      <h6 class="text-info">Various Assessment Facilities are also avialable in the form of:</h6>
                      <br>
                      <h5><span class="badge badge-pill badge-warning">MOCK INTERVIEWS(GD & PI)</span>
                          <span class="badge badge-pill badge-warning">MOCK TESTS(OMR SHEET & ONLINE TEST)</span></h5>
                      <a href="courses.html">Click here to know more.</a>
                  </div>
              </div>
            </div>
            
            <!-- Top Performers -->
            <div class="col-12 col-sm-3">
                <div class="card">
                  <h3 class="card-header bg-primary text-white">Top Performers</h3>
                  <div class="card-body">
                <div id="topperformerscarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      
                    <?php
                    $count=-1;
                    $dirname = "uploads/photos/topperformers";
                    $images = scandir($dirname);
                    $ignore = Array(".", "..");
                    foreach($images as $curimg){
                    if(!in_array($curimg, $ignore)) {
                    $count=$count+1; 
                    ?>
                    
                    <li data-target="#topperformerscarousel" data-slide-to="<?php echo $count ?>" class="<?php if($count==0) echo "active"; ?>"></li>
                      
                    <?php  

                        
                    }}
                    ?>
                      
                    
                  </ol>
                  <div class="carousel-inner">
                      
                    <?php
                    $count2=-1;
                    $dirname = "uploads/photos/topperformers";
                    $images = scandir($dirname);
                    $ignore = Array(".", "..");
                    foreach($images as $curimg){
                    if(!in_array($curimg, $ignore)) {
                        $count2=$count2+1;
                            
                    ?>
                    <div class="carousel-item <?php if($count2==0) echo "active"; ?>">
                      <img class="d-block w-100 d-flex mr-3 img-thumbnail align-self-center" src="uploads/photos/topperformers/<?php echo $curimg; ?>" alt="<?php echo $curimg; ?>" onclick="window.open(this.src)">
                    </div>
                      
                    <?php
                        }}

                    ?>
                      
                    
                  </div>
                  <a class="carousel-control-prev" href="#topperformerscarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#topperformerscarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                
                    </div>
                </div>
                
            </div>
            
        </div>

        <div class="row row-content align-items-center">
            <div class="col-12">
                <div class="card card-body bg-light">
                    <blockquote class="blockquote">
                        <p class="mb-0">Salient Features</p>
                        <footer class="blockquote-footer">
                            Experience & Dedicated Faculty, Regular Classes & Weekly Test, Proper evaluation performance, Preparation in good environment, Updated study materials, Facility of on line examination, Weekly classes for current affair, Monthly magazine for current Affair, Excellent Library facility for self-study, Guidance & support even after completing courses, Special Classes for Mock Interview, Special Classes for PI & GD, Spoken English, Special Classes for English, Maths, Computer, General Awareness
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Meet our Director</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
              <div class="media">
                <img class="d-flex mr-3 img-thumbnail align-self-center" src="img/director0.png" alt="Director's photo">
                <div class="media-body">
                  <h2 class="mt-0">Sunil Jaiswal</h2>
                  <h4>Director</h4>
                    
                    <blockquote class="blockquote d-none d-sm-block text-justify">
                    <footer class="mb-0 blockquote-footer" >" It the responsibility of the youth to be patient and determined and move forward towards building their future. Give the obligation of building your future in the hands of those who are really serious about it and understand the value of it.<br> We take the challenge of your future development seriously, your untimely energy and endless potential remain vigilant towards achieving right direction. Your patience, discipline and belief is our key. Our organization has contributed in the future creation of more than 24 thousand competitions. This is our achievement. "</footer>
                    </blockquote>
                
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
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.html">About Us</a></li>
                        <li><a href="./courses.html">Courses</a></li>
                        <li><a href="./studymaterialdisplay.php">Study Materials</a></li>
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
    <script>
    $(document).ready(function(){
      $("#carouselButton").click(function(){
          if ($("#carouselButton").children("span").hasClass('fa-pause')) {
              $("#mycarousel").carousel('pause');
              $("#carouselButton").children("span").removeClass('fa-pause');
              $("#carouselButton").children("span").addClass('fa-play');
          }
          else if ($("#carouselButton").children("span").hasClass('fa-play')){
              $("#mycarousel").carousel('cycle');
              $("#carouselButton").children("span").removeClass('fa-play');
              $("#carouselButton").children("span").addClass('fa-pause');
          }
      });
    });
  </script>
</body>

</html>
