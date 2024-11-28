<?php

include "conn.php";
include "dbname.php";

$sql= "DROP DATABASE $dbname";
$query= mysqli_query($conn,$sql);

if($query){
    echo "$dbname dropped!";
}
else{
    echo "$dbname cannot drop! ".mysqli_error();
}

include "close.php";

?>