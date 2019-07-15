<?php

session_start();


if (!isset($_SESSION['sessionid'])){
  header("Location: adminlogin.php");
}

?>

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
    <link rel="stylesheet" href="css/admin.css">
    <title>SSC</title>
</head>

<body style="background-image: linear-gradient(to right, #a1c4fd 0%, #c2e9fb 51%, #a1c4fd 100%);">
    
    <div id="newseventsModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              News & Events to be added
            </h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="admin.php">



              <div class="form-group row">

                  <div class="col-12">
                    <textarea class="form-control" id="newsEventText" name="newsEventText" rows="12" placeholder="Enter the news and events such that each sentence is a news/event." required></textarea>
                  </div>

              </div>
              <div class="form-group row">
                <div class="offset-md-2 col-md-12">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
        <div id="batchclassModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Batch/Class to be added
            </h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="admin.php">



              <div class="form-group row">

                  <div class="col-12">
                    <textarea class="form-control" id="batchClassText" name="batchClassText" rows="12" placeholder="Enter the batch/class such that each sentence is a batch/class." required></textarea>
                  </div>

              </div>
              <div class="form-group row">
                <div class="offset-md-2 col-md-12">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
        <div id="feedbackModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Feedbacks Recieved
            </h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
                <?php
                $myfile = fopen("uploads/feedbacks.txt", "r") or die("Unable to open file!");
                while(!feof($myfile)){
                    echo fgets($myfile) . "<br>";
                }
                fclose($myfile);
                ?>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
        <?php 
        if(isset($_POST['newsEventText'])){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>News & Events added!</strong> You should check it on the website.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <?php }
        
        if(isset($_POST['batchClassText'])){
        ?>
        
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Batch/Class added!</strong> You should check it on the website.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <?php } ?>
        
        
        <div class="row">
        
        
  <a class="btn btn-1 modbtn col-12" href="#" id="feedbackButton">Check Feedbacks</a>
  <a class="btn btn-2 modbtn col-12" href="selectPhotosToUpload.php">Upload photos</a>
  <a class="btn btn-3 modbtn col-12" href="selectStudyMaterialsToUpload.php">Study Material</a>
  <a class="btn btn-4 modbtn col-12" href="#" id="newseventsButton">News & Event</a> 
  <a class="btn btn-5 modbtn col-12" href="#" id="batchclassButton">Batch & Class</a>
            
        </div>
</div>

    
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
   
      $(document).ready(function(){
     
            $("#newseventsButton").click(function(){
            $("#newseventsModal").modal('show');
            });
          
            $("#batchclassButton").click(function(){
            $("#batchclassModal").modal('show');
            });
          
            $("#feedbackButton").click(function(){
            $("#feedbackModal").modal('show');
            });
    });
    
  </script>
</body>

</html>

<?php
if(isset($_POST['newsEventText'])){
    
    $myfile = fopen("uploads/news&events.txt", "w") or die("Unable to open file!");
    $txt = $_POST['newsEventText'];
    fwrite($myfile, $txt);
    fclose($myfile);
    
}

if(isset($_POST['batchClassText'])){
    
    $myfile2 = fopen("uploads/batch&Class.txt", "w") or die("Unable to open file!");
    $txt2 = $_POST['batchClassText'];
    fwrite($myfile2, $txt2);
    fclose($myfile2);
    
}

?>
