<?php
session_start();

if (!isset($_SESSION['sessionid'])){
  header("Location: adminlogin.php");
}

if ( isset($_GET['location']) ) { 
    
    switch($_GET['location']){
        case 1: $_SESSION['location'] ="gallery";
                break;
        case 2: $_SESSION['location'] ="newsclippings";
                break;
        case 3: $_SESSION['location'] ="topperformers";
                break;
        case 4: $_SESSION['location'] ="achievements/bank";
                break;
        case 5: $_SESSION['location'] ="achievements/mba";
                break;
        case 6: $_SESSION['location'] ="achievements/jssc";
                break;
        case 7: $_SESSION['location'] ="achievements/ssc";
                break;
        case 8: $_SESSION['location'] ="achievements/railway";
                break;
        case 9: $_SESSION['location'] ="achievements/defence";
                break;
        case 10: $_SESSION['location'] ="achievements/hotelmanagement";
                break;
        case 11: $_SESSION['location'] ="achievements/general";
                break;
        default: $_SESSION['location'] ="gallery";
    }
}
else {
$_SESSION['location']="gallery";
}
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>

    <style type="text/css">

        .main-section{

            margin:0 auto;

            padding: 20px;

            margin-top: 100px;

            background-color: #fff;

            box-shadow: 0px 0px 20px #c1c1c1;

        }

    </style>

</head>

<body style="background-image: linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);">
    
    <div id="locationModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Select Upload Location
            </h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <a href="selectPhotosToUpload.php?location=1" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Gallery</a>
            <a href="selectPhotosToUpload.php?location=2" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">News Clippings</a>
            <a href="selectPhotosToUpload.php?location=3" class="btn btn-success btn-lg btn-block" role="button" aria-pressed="true">Top Performers</a>
            <a href="selectPhotosToUpload.php?location=4" class="btn btn-danger btn-lg btn-block" role="button" aria-pressed="true">Bank(Achievements)</a>
            <a href="selectPhotosToUpload.php?location=5" class="btn btn-warning btn-lg btn-block" role="button" aria-pressed="true">MBA(Achievements)</a>
            <a href="selectPhotosToUpload.php?location=6" class="btn btn-info btn-lg btn-block" role="button" aria-pressed="true">JSSC(Achievements)</a>
            <a href="selectPhotosToUpload.php?location=7" class="btn btn-light btn-lg btn-block" role="button" aria-pressed="true">SSC(Achievements)</a>
            <a href="selectPhotosToUpload.php?location=8" class="btn btn-dark btn-lg btn-block" role="button" aria-pressed="true">Railway(Achievements)</a>
            <a href="selectPhotosToUpload.php?location=9" class="btn btn-success btn-lg btn-block" role="button" aria-pressed="true">Defence(Achievements)</a>
            <a href="selectPhotosToUpload.php?location=10" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Hotel Management(Achievements)</a>
            <a href="selectPhotosToUpload.php?location=11" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">General(Achievements)</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-sm-12 col-11 main-section">
                
                <a href="admin.php" role="button" class="btn btn-outline-primary">Go Back</a>
                
                <h1 class="text-center text-info">Select photos to upload(Current Upload location: <?php echo $_SESSION['location']; ?>) or 
                    
                    <a id="switchlocation" href="#" class="btn btn-info btn-lg" role="button" aria-pressed="true">change location</a></h1><br>

                    <div class="form-group">

                        <div class="file-loading">

                            <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">

                        </div>

                    </div>

            </div>

        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>



    <script type="text/javascript">

        $("#file-1").fileinput({

            theme: 'fa',

            uploadUrl: "./uploadPhotos.php",

            allowedFileExtensions: ['jpg','jpeg', 'png', 'gif'],

            overwriteInitial: false,

            maxFileSize:10000,

            maxFilesNum: 10,

            slugCallback: function (filename) {

                return filename.replace('(', '_').replace(']', '_');

            }

        });
        
        $(document).ready(function(){
            
            $("#switchlocation").click(function(){
                $("#locationModal").modal('show');
            });
            
        });

    </script>



</body>

</html>