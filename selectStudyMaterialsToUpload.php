<?php
session_start();

if (!isset($_SESSION['sessionid'])){
  header("Location: adminlogin.php");
}

if ( isset($_GET['subject']) ) { 
    
    if($_GET['subject']==1) $_SESSION['subject'] ="physics";
    else if($_GET['subject']==2) $_SESSION['subject'] ="chemistry";
    else $_SESSION['subject'] ="maths";
}
else {
$_SESSION['subject']="physics";
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

<body style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%);">
    
    <div id="subjectModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Select Subject
            </h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <a href="selectStudyMaterialsToUpload.php?subject=1" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Physics</a>
            <a href="selectStudyMaterialsToUpload.php?subject=2" class="btn btn-success btn-lg btn-block" role="button" aria-pressed="true">Chemistry</a>
            <a href="selectStudyMaterialsToUpload.php?subject=3" class="btn btn-danger btn-lg btn-block" role="button" aria-pressed="true">Maths</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-sm-12 col-11 main-section">
                
                <a href="admin.php" role="button" class="btn btn-outline-primary">Go Back</a>

                <h1 class="text-center text-info">Select <?php echo $_SESSION['subject']; ?> study materials to upload or 
                    
                    <a id="switch" href="#" class="btn btn-info btn-lg" role="button" aria-pressed="true">switch subject</a></h1><br>

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

            uploadUrl: "./uploadStudyMaterials.php",

            allowedFileExtensions: ['pdf'],

            overwriteInitial: false,

            maxFileSize:2000,

            maxFilesNum: 10,

            slugCallback: function (filename) {

                return filename.replace('(', '_').replace(']', '_');

            }

        });
        
        $(document).ready(function(){
            
            $("#switch").click(function(){
                $("#subjectModal").modal('show');
            });
            
        });

    </script>



</body>

</html>