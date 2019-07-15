<!DOCTYPE html>
<html lang="en">

<head>

    <title>SSC: Contact Us</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="css/styles.css" rel="stylesheet">
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
                        <li class="nav-item"><a class="nav-link" href="./studymaterialdisplay.php"><span class="fa fa-book fa-lg"></span> Study Materials</a></li>
                        <li class="nav-item"><a class="nav-link" href="./achievement.php"><span class="fa fa-star fa-lg"></span> Achievements</a></li>
                        <li class="nav-item"><a class="nav-link" href="./photogallery.php"><span class="fa fa-image fa-lg"></span> Photo Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="./testimonial.php"><span class="fa fa-comments fa-lg"></span> Testimonial</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact Us</a></li>
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
            
            <?php 
            if(isset($_POST['firstname'],$_POST['lastname'],$_POST['areacode'],$_POST['telnum'],$_POST['emailid'],$_POST['feedback'])){
            ?>
                <div class="col-12 text-center alert alert-success alert-dismissible fade show" role="alert">
                <strong>Your feedback has been saved!</strong> Thank you for your feedback.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php }
            ?>
            
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
            <div class="col-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>
        
        <div class="row row-content">
           <div class="col-12">
              <h3>Location Information</h3>
           </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                   <h5>Our Address</h5>
                    <address>
                              Circular Road, Ranchi-1<br>
                              Ext. 1: 202,Hari-Om Tower, Circular Road,<br>
                              Lalpur Ranchi - 1<br>
                              <i class="fa fa-phone fa-lg"></i>: +91-9835164787<br>
                              <i class="fa fa-envelope fa-lg"></i>:
                              <a href="mailto:sscranchi1996@reddiffmail.com">sscranchi1996@reddiffmail.com</a>
                           </address>
                            <div class="btn-group" role="group">
                            <a role="button" class="btn btn-primary" href="tel:+919835164787"><i class="fa fa-phone"></i> Call</a>
                            <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                            <a role="button" class="btn btn-success" href="mailto:sscranchi1996@reddiffmail.com"><i class="fa fa-envelope-o"></i> Email</a>
                            </div>
            </div>
            <div class="col-12 col-sm-6 offset-sm-1">
                <h5>Map of our Location</h5>
                    <!--Google map-->
                    <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 300px">
                    <iframe src="https://maps.google.com/maps?q=sure%20success%20centre%20ranchi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
                    </div>
            </div>
            
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-md-9">
              <form action="contactus.php" method="POST">
                <div class="form-group row">
                  <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                  </div>

                </div>
                <div class="form-group row">
                  <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                  <div class="col-5 col-md-3">
                    <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area Code" required>
                  </div>
                  <div class="col-7 col-md-7">
                    <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. Number" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="emailid" class="col-md-2 col-form-label">Email</label>
                  <div class="col-md-10">
                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6 offset-md-2">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
                      <label class="form-check-label" for="approve">
                        <strong>May we contact you?</strong>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 offset-md-1">
                    <select class="form-control" name="medium">
                      <option>Tel.</option>
                      <option>Email</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="feedback" class="col-md-2 col-form-label">Your feedback</label>
                  <div class="col-md-10">
                    <textarea class="form-control" id="feedback" name="feedback" rows="12" placeholder="Your Feedback/Comment" required></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-md-2 col-md-10">
                    <button type="submit" class="btn btn-primary">
                      Send Feedback
                    </button>
                  </div>
                </div>
              </form>
            </div>
             <div class="col-12 col-md">
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
                        <li><a href="./studymaterialdisplay.php">Study Materials</a></li>
                        <li><a href="./achievement.php">Achievements</a></li>
                        <li><a href="./photogallery.php">Photo Gallery</a></li>
                        <li><a href="./testimonial.php">Testimonial</a></li>
                        <li><a href="#">Contact Us</a></li>
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

<?php
if(isset($_POST['firstname'],$_POST['lastname'],$_POST['areacode'],$_POST['telnum'],$_POST['emailid'],$_POST['feedback'])){
    
    $myfile = fopen("uploads/feedbacks.txt", "a") or die("Unable to open file!");
    date_default_timezone_set("Asia/Kolkata");
    $txt="Date: ".date("d/m/Y")." Time: ".date("h:i:sa").PHP_EOL;
    fwrite($myfile, $txt);
    $txt = "Name: ".$_POST['firstname']." ".$_POST['lastname'].PHP_EOL;
    fwrite($myfile, $txt);
    $txt = "Contact Number: ".$_POST['areacode']."-".$_POST['telnum'].PHP_EOL;
    fwrite($myfile, $txt);
    $txt = "Email Id: ".$_POST['emailid'].PHP_EOL;
    fwrite($myfile, $txt);
    if(isset($_POST['approve'])){
        $txt = "Contact medium requested: ".$_POST['medium'].PHP_EOL;
        fwrite($myfile, $txt);
    }
    else{
        $txt = "Contact not requested.".PHP_EOL;
        fwrite($myfile, $txt);
    }
    $txt = "Feedback recieved: ".$_POST['feedback'].PHP_EOL;
    fwrite($myfile, $txt);
    $txt = "-----------------------------------------------------------------------------------------------------------------------------".PHP_EOL;
    fwrite($myfile, $txt);
    fclose($myfile);
    
    $myfile = file_get_contents("uploads/testimonial.json");
    $jsontxt=json_decode($myfile, true);
    $jsontxt[]=array('date'=>date("d-m-Y"), 'time'=>date("h:i:sa"), 'name'=>$_POST['firstname']." ".$_POST['lastname'], 'comment'=>$_POST['feedback']);
    file_put_contents("uploads/testimonial.json", json_encode($jsontxt, JSON_PRETTY_PRINT));
}