<?php

session_start();
session_unset(); 
session_destroy(); 

session_start();

?>

<?php

if(isset($_POST["username"],$_POST["password"])){
    $myfile = file_get_contents("admin.json");
    $jsontxt=json_decode($myfile, true);
    $cnt=0;
    $flag=0;
    while($cnt!=count($jsontxt)){
        if($jsontxt[$cnt]["id"]==$_POST['username'] && $jsontxt[$cnt]["pwd"]==$_POST['password']){
            echo "correct";
            $cnt=count($jsontxt);
            $flag=1;
            $_SESSION['sessionid']=rand();
            header("Location: admin.php");
        }
        else $cnt=$cnt+1;
    }
    if($flag==0){
        $_SESSION['incorrect']=1;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SSC Admin Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
<style type="text/css">
	body {
		color: #fff;
		background: linear-gradient(to right, #a1c4fd 0%, #c2e9fb 51%, #a1c4fd 100%);
	}
	.form-control {
		min-height: 41px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: transparent;
	}
	.form-control:focus {
		background: #e2e2e2;
	}
	.form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 350px;
		margin: 30px auto;
		text-align: center;
	}
	.login-form h2 {
        margin: 10px 0 25px;
    }
    .login-form form {
		color: #7a7a7a;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #3598dc;
		border: none;
        outline: none !important;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #2389cd;
	}
	.login-form a {
		color: #fff;
		text-decoration: underline;
	}
	.login-form a:hover {
		text-decoration: none;
	}
	.login-form form a {
		color: #7a7a7a;
		text-decoration: none;
	}
	.login-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>
<div class="login-form">
    <form action="adminlogin.php" method="POST">
        <a href="./index.php" class="col-12 col-sm align-self-center" target="_blank" rel="noopener">
        <img src="img/logo0.png" class="img-fluid">
        </a>
        <h2 class="text-center">Welcome Admin!</h2>
        <h2 class="text-center">Login to continue</h2>   
        
        <?php
        
        if(isset($_SESSION['incorrect'])){
            if($_SESSION['incorrect']==1){
                
        ?>
        
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Invalid Credentials!</strong> Enter the correct username & password.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
        
        <?php
            }
        }
        
        ?>
        
        <div class="form-group has-error">
        	<input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>
        <p><a href="#">Change Password?</a></p>
    </form>
</div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>                            