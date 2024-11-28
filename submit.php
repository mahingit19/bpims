<?php

include "conn.php";
include "dbname.php";
include "selectdb.php";

include "upload.php";
include "file_upload.php";

$name= trim($_POST['name']);
$uname= trim($_POST['uname']);
$upass= trim($_POST['upass']);
$email= trim($_POST['email']);
$phone= trim($_POST['phone']);
$type= trim($_POST['type']);
$status= trim($_POST['status']);
$date= trim($_POST['date']);
$select= trim($_POST['select']);
$hline= trim($_POST['hline']);
$msg= trim($_POST['msg']);
$file= trim($_POST['file']);
$roll= trim($_POST['roll']);
$dept= trim($_POST['dept']);
$reg= trim($_POST['reg']);
$session= trim($_POST['session']);
$shift= trim($_POST['shift']);
$blood= trim($_POST['blood']);
$sid= trim($_POST['sid']);
$gpa= trim($_POST['gpa']);
$sem= trim($_POST['sem']);
$pos= trim($_POST['pos']);
$pims= trim($_POST['pims']);
$photo= trim($_POST['photo']);


if($select=='user' || $select=='login'){
    $sql= "INSERT INTO login VALUES(
        '',
        '$name',
        '$uname',
        '$upass',
        '$email',
        '$phone',
        '$type',
        '$status',
        '$imgname',
        '$date'
        )";
    $query= mysqli_query($conn,$sql);
}
if($select=='notice'){
    $sql= "INSERT INTO notice VALUES(
        '',
        '$hline',
        '$msg',
        '$filename',
        '$type',
        '$date'
        )";
    $query= mysqli_query($conn,$sql);
}
if($select=='stu_info'){
    $sql= "INSERT INTO stu_info VALUES(
        '',
        '$name',
        '$roll',
        '$dept',
        '$reg',
        '$session',
        '$shift',
        '$blood',
        '$imgname',
        '$date'
        )";
    $query= mysqli_query($conn,$sql);
}
if($select=='stu_res'){
    $sql= "INSERT INTO stu_res VALUES(
        '',
        '$roll',
        '$sid',
        '$gpa',
        '$sem',
        '$date'
        )";
    $query= mysqli_query($conn,$sql);
}
if($select=='tea_info'){
    $sql= "INSERT INTO tea_info VALUES(
        '',
        '$name',
        '$dept',
        '$shift',
        '$pos',
        '$phone',
        '$email',
        '$pims',
        '$blood',
        '$imgname',
        '$date'
        )";
    $query= mysqli_query($conn,$sql);
}

if($query){
    header("Location: form.php?select=$select&query=success");
}
else{
    header("Location: form.php?select=$select&query=Failed to Submit!");
}

include "close.php";

?>