<?php
session_start();

$_SESSION['uname']= $_POST['uname'];
$_SESSION['upass']= $_POST['upass'];

$uname= $_POST['uname'];
$upass= $_POST['upass'];

include "conn.php";
include "dbname.php";
include "selectdb.php";

$sql= "SELECT uname,upass FROM login WHERE uname='$uname' AND upass='$upass'";
$query= mysqli_query($conn,$sql);
$auth= mysqli_num_rows($query);

if($auth==1){
    header("Location: dash.php?select=dashboard");
}
else{
    header("Location: login.php?error=Wrong Username or Password!");
}

include "close.php";

?>