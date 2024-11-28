<?php

include "conn.php";
include "dbname.php";

$sql= "CREATE DATABASE $dbname";
$query= mysqli_query($conn,$sql);

if($query){
    echo "$dbname created successfully! <br>";
}
else{
    echo "database creation failed! ".mysqli_error();
}


include "selectdb.php";

$sql = "CREATE TABLE login(
            id INT NOT NULL AUTO_INCREMENT,
            name VARCHAR(50),
            uname VARCHAR(10),
            upass VARCHAR(10),
            email VARCHAR(50),
            phone VARCHAR(20),
            type VARCHAR(10),
            status VARCHAR(10),
            photo VARCHAR(100),
            date VARCHAR(100),
            PRIMARY KEY(id));";
$sql .= "CREATE TABLE stu_info(
            id INT NOT NULL AUTO_INCREMENT,
            name VARCHAR(50),
            roll INT(10),
            dept VARCHAR(50),
            reg INT(20),
            session VARCHAR(10),
            shift VARCHAR(10),
            blood VARCHAR(10),
            photo VARCHAR(100),
            date VARCHAR(100),
            PRIMARY KEY(id,roll));";
$sql .= "CREATE TABLE stu_res(
            id INT NOT NULL AUTO_INCREMENT,
            roll INT(10),
            sid INT,
            gpa DOUBLE(10,2),
            sem VARCHAR(10),
            date VARCHAR(100),
            PRIMARY KEY(id),
            FOREIGN KEY(sid,roll) REFERENCES stu_info(id,roll));";
$sql .= "CREATE TABLE tea_info(
            id INT NOT NULL AUTO_INCREMENT,
            name VARCHAR(50),
            dept VARCHAR(50),
            shift VARCHAR(10),
            pos VARCHAR(20),
            phone VARCHAR(20),
            email VARCHAR(50),
            pims INT,
            blood VARCHAR(10),
            photo VARCHAR(100),
            date VARCHAR(100),
            PRIMARY KEY(id));";
$sql .= "CREATE TABLE notice(
            id INT NOT NULL AUTO_INCREMENT,
            hline VARCHAR(100),
            message TEXT,
            file VARCHAR(100),
            type VARCHAR(10),
            date VARCHAR(100),
            PRIMARY KEY(id))";
$multi_query= mysqli_multi_query($conn,$sql);

if($multi_query){
    echo "tables created successfully! <br>";
}
else{
    echo "database creation failed! ".mysqli_error();
}

include "close.php";

?>