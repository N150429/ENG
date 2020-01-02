<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'english');
//send notification

if (isset($_POST['notice'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['files']['name'];
    $title = mysqli_escape_string($conn,htmlentities(stripcslashes(($_POST['title']))));
    $description = mysqli_escape_string($conn,htmlentities(stripcslashes($_POST['desc'])));
    $ip = $_SERVER['REMOTE_ADDR'];
    $submitted_by = "Admin";
    $date = date("Y-m-d");
    // destination of the file on the server
    $destination = 'file_uploads/notifications/'.$filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['files']['tmp_name'];
    $size = $_FILES['files']['size'];
    $today = date("Y-m-d");
    if(empty($filename)) {
       $sql = "INSERT INTO `notifications`( `notif_name`, `Description`, `Submitted_By`, `Submitted_Ip`, `Submitted_Date`) VALUES ('$title','$description','$submitted_by','$ip','$date')";
        if(mysqli_query($conn,$sql)) {
                echo "<script>alert('Successfully send notice');
                window.location.href='Admin.php';</script>";
        }
        else {
            mysql_error();
        }
    }
    else {

            if (!in_array($extension, ['jpg','png','jpeg'])) {
                echo "<script>alert('File extension should be jpg, jpeg,png');</script>";
            
            } elseif ($_FILES['files']['size'] > 1000000000000000000000000000000000000000) { // file shouldn't be larger than 1Megabyte
                 echo "<script>alert('File is Too large');</script>";
            } else {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($file, $destination)) {
                         $sql = "INSERT INTO `notifications`( `notif_name`, `Description`, `Submitted_By`, `Submitted_Ip`, `Submitted_Date`, `attachment_file`) VALUES ('$title','$description','$submitted_by','$ip','$date','$filename')"; 
                if (mysqli_query($conn, $sql)) {
                    	echo "<script>alert('File Uploaded Successfully');
                    	window.location.href='Admin.php';</script>";
        						                  
                    }
                } else {
                   	echo "<script>alert('Fail To Upload File');
                   	window.location.href='admin/ahm/panel';
                   	</script>";
   					 
             
        }
    }
    }
}

// Uploads image files
if (isset($_POST['image'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    $today = date("Y-m-d");
    // destination of the file on the server
    $destination = 'file_uploads/images/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    
    if(empty($filename)) {
        echo "<script>alert('select file first');</script>";
    }
    else if (!in_array($extension, ['jpg','png','jpeg'])) {
        echo "<script>alert('File extension should be jpg, jpeg,png');</script>";
    
    } elseif ($_FILES['myfile']['size'] > 1000000000000000000000000000000000000000) { // file shouldn't be larger than 1Megabyte
         echo "<script>alert('File is Too large');</script>";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO images(file_name, size, uploaded_date) VALUES ('$filename', '$size', '$today')";
            if (mysqli_query($conn, $sql)) {
            	echo "<script>alert('File Uploaded Successfully');
            	window.location.href='Admin.php';</script>";
						                  
            }
        } else {
           	echo "<script>alert('Fail To Upload File');
           	window.location.href='admin/ahm/panel';
           	</script>";
   					 
             
        }
    }
}

// Uploads audio files
if (isset($_POST['audio'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'file_uploads/audios/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $today = date("Y-m-d");
    if(empty($filename)) {
            echo "<script>alert('Select your file first');</script>";
    }
    else if (!in_array($extension, ['zip','jpg','png' ,'pdf','mp3','mp4', 'docx'])) {
     		echo "<script>alert('File extension should be mp3');</script>";
    } elseif ($_FILES['myfile']['size'] > 1000000000000000000000000000000000000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
        
            $sql = "INSERT INTO audios(file_name, size, uploaded_date) VALUES ('$filename', $size, '$today')";
            if (mysqli_query($conn, $sql)) {
				echo "<script>alert('File Uploaded Successfully');
            	window.location.href='Admin.php';</script>";            }
        } else {
				echo "<script>alert('Fail To Upload File');
            	window.location.href='Admin.php';</script>";        }
    }
}
// Uploads Video files
if (isset($_POST['video'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'file_uploads/videos/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $today = date("Y-m-d");
    if(empty($filename)) {
        echo "<script>alert('Select your file first'); </script>";
    }
    else if (!in_array($extension, ['zip','jpg','png' ,'pdf','mp3','mp4', 'docx'])) {
         		echo "<script>alert('File extension should be mp4,webm');</script>";
    } elseif ($_FILES['myfile']['size'] > 1000000000000000000000000000000000000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO videos(file_name, size, uploaded_date) VALUES ('$filename', $size, '$today')";
            if (mysqli_query($conn, $sql)) {
				echo "<script>alert('File Uploaded Successfully');
            	window.location.href='Admin.php';</script>";              }
        } else {
         		echo "<script>alert('Fail to upload file');</script>";
        }
    }
}