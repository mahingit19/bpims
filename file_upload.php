<?php



$target_dir = "file_upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$upFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST['hline'])){
  $filename= $target_dir.$_POST['hline'].".".$upFileType;
}



echo $upFileType;

// Check if file already exists
if (file_exists($filename)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

// Check file size
if ($_FILES["file"]["size"] > 10000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

// Allow certain file formats
if($upFileType != "doc" && $upFileType != "pdf") {
  echo "Sorry, only doc & pdf files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $filename)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

?>