<?php

session_start();

	if (!empty($_FILES['file'])) {



	    $target = "uploads/photos/".$_SESSION['location']."/". $_FILES["file"]["name"];

	    move_uploaded_file($_FILES['file']['tmp_name'], $target);

	    echo json_encode(['uploaded' => $target]); 



	} else {



		echo json_encode(['error'=>'No files found for upload.']); 



	}



?>