<?php
session_start(); 
if($_GET['select']){
    $select= $_GET['select'];
}
if(isset($_GET['id'])){
    $id= $_GET['id'];
}

?>

<?php

include "conn.php";
include "dbname.php";
include "selectdb.php";

// include "upload.php";

if(isset($_POST['id']) && isset($_POST['select'])){
$id= $_POST['id'];
$name= $_POST['name'];
$uname= $_POST['uname'];
$upass= $_POST['upass'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$type= $_POST['type'];
$status= $_POST['status'];
$date= $_POST['date'];
$select= $_POST['select'];
$hline= $_POST['hline'];
$msg= $_POST['msg'];
$file= $_POST['file'];
$roll= $_POST['roll'];
$dept= $_POST['dept'];
$reg= $_POST['reg'];
$session= $_POST['session'];
$shift= $_POST['shift'];
$blood= $_POST['blood'];
$sid= $_POST['sid'];
$gpa= $_POST['gpa'];
$sem= $_POST['sem'];
$pos= $_POST['pos'];
$pims= $_POST['pims'];


if($select=='user' || $select=='login'){
    $sql= "UPDATE login
        SET
        
        name= '$name',
        uname= '$uname',
        upass= '$upass',
        email= '$email',
        phone= '$phone',
        type= '$type',
        status= '$status'
        WHERE id='$id'
        ";
    $query= mysqli_query($conn,$sql);
}
if($select=='notice'){
    $sql= "UPDATE notice
        SET
        hline= '$hline',
        message= '$msg',
        file= '$file',
        type= '$type'
        WHERE id='$id'
        ";
    $query= mysqli_query($conn,$sql);
}
if($select=='stu_info'){
    $sql= "UPDATE stu_info
        SET
        name= '$name',
        roll= '$roll',
        dept= '$dept',
        reg= '$reg',
        session= '$session',
        shift= '$shift',
        blood= '$blood'
        WHERE id='$id'
        ";
    $query= mysqli_query($conn,$sql);
}
if($select=='stu_res'){
    $sql= "UPDATE stu_res
        SET
        roll= '$roll',
        sid= '$sid',
        gpa= '$gpa',
        sem= '$sem'
        WHERE id='$id'
        ";
    $query= mysqli_query($conn,$sql);
}
if($select=='tea_info'){
    $sql= "UPDATE tea_info
        SET
        name= '$name',
        dept= '$dept',
        shift= '$shift',
        pos= '$pos',
        phone= '$phone',
        email= '$email',
        pims= '$pims',
        blood= '$blood',
        photo= '$photo'
        WHERE id='$id'
        ";
    $query= mysqli_query($conn,$sql);
}


if($query){
    header("Location: edit.php?select=$select&query=success&id=$id");
}
else{
    header("Location: edit.php?select=$select&query=Failed to Submit!");
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pc.css" media="only screen and (min-width: 1260px) ">
    <link rel="stylesheet" href="tab.css" media="only screen and (min-width: 640px) and (max-width: 1260px) ">
    <link rel="stylesheet" href="mobile.css" media="only screen and (min-width: 320px) and (max-width: 640px) ">
    <title>
        <?php
        echo "$select Update Form";
        ?>
    </title>
</head>
<body>
<div class="wrap">
    <?php 
    include "nav.php";
    $self = $_SERVER["PHP_SELF"];
    $edit = "SELECT * FROM $select WHERE id='$id'";
    $inquery = mysqli_query($conn,$edit);
    $eshow= mysqli_fetch_array($inquery);
    ?>
        <div class="form">
        <form action="<?php echo"$self"; ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="id" value="<?php echo"$id"; ?>">
        <table>
            <caption>
            <h1>
                <?php
                echo "$select Update Form";
                ?>
            </h1>
            </caption>
            <tr>
                <td><?php echo "<a href=\"dash.php?select=$select\">Back</a>"; ?></td>
            </tr>
        <?php 
        
        if(isset($_GET['query'])){
            $result= $_GET['query'];
            if($result=='success'){
                echo <<<EOT
                <tr>
                    <td colspan='3' id="success">Form Successfully Submitted!</td>
                </tr>
                EOT;
            }
        }
        if($select=='user' || $select=='tea_info' || $select=='stu_info' || $select=='login'){
            echo <<<EOT
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name" value="$eshow[name]"></td>
            </tr>
            EOT;
        }
        if($select=='stu_info' || $select=='stu_res'){
            echo <<<EOT
            <tr>
                <td>Roll</td>
                <td>:</td>
                <td><input type="text" name="roll" value="$eshow[roll]"></td>
            </tr>
            EOT;
        }
        if($select=='stu_res'){
            echo <<<EOT
            <tr>
                <td>SID</td>
                <td>:</td>
                <td><input type="text" name="sid" value="$eshow[sid]"></td>
            </tr>
            <tr>
                <td>GPA</td>
                <td>:</td>
                <td><input type="text" name="gpa" value="$eshow[gpa]"></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>:</td>
                <td><input type="text" name="sem" value="$eshow[sem]"></td>
            </tr>
            EOT;
        }
        if($select=='stu_info'){
            echo <<<EOT
            <tr>
                <td>Department</td>
                <td>:</td>
                <td>
                    <select name="dept" id="">
                        <option value="$eshow[dept]">Selected:$eshow[dept]</option>
                        <option value="Computer">Computer</option>
                        <option value="Civil">Civil</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="Power">Power</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Electronics">Electronics</option>
                        <option value="RAC">RAC</option>
                        <option value="Mining">Mining</option>
                        <option value="Tourism">Tourism</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Register</td>
                <td>:</td>
                <td><input type="text" name="reg" value="$eshow[reg]"></td>
            </tr>
            <tr>
                <td>Session</td>
                <td>:</td>
                <td><input type="text" name="session" value="$eshow[session]"></td>
            </tr>
            <tr>
                <td>Shift</td>
                <td>:</td>
                <td>
                    <select name="shift" id="">
                        <option value="$eshow[shift]">Selected:$eshow[shift]</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                    </select>
                </td>
            </tr>
            EOT;
        }
        if($select=='stu_info' || $select=='tea_info'){
            echo <<<EOT
            <tr>
                <td>Blood</td>
                <td>:</td>
                <td>
                    <select name="blood" id="">
                        <option value="$eshow[blood]">Selected:$eshow[blood]</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </td>
            </tr>
            EOT;
        }
        if($select=='tea_info'){
            echo <<<EOT
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>
                    <select name="pos" id="">
                        <option value="$eshow[pos]">Selected:$eshow[pos]</option>
                        <option value="Chief Instructor">Chief Instructor</option>
                        <option value="Instructor">Instructor</option>
                        <option value="Junior Instructor">Junior Instructor</option>
                        <option value="Craft Instructor">Craft Instructor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>P.I.M.S.</td>
                <td>:</td>
                <td><input type="text" name="pims" value="$eshow[pims]"></td>
            </tr>
            <tr>
                <td>Department</td>
                <td>:</td>
                <td>
                    <select name="dept" id="">
                        <option value="$eshow[dept]">Selected: $eshow[dept]</option>
                        <option value="Computer">Computer</option>
                        <option value="Civil">Civil</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="Power">Power</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Electronics">Electronics</option>
                        <option value="RAC">RAC</option>
                        <option value="Mining">Mining</option>
                        <option value="Tourism">Tourism</option>
                        <option value="Related Subject">Related Subject</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Shift</td>
                <td>:</td>
                <td>
                    <select name="shift" id="">
                        <option value="$eshow[shift]">Selected: $eshow[shift]</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                    </select>
                </td>
            </tr>
            EOT;
        }
        if($select=='user' || $select=='tea_info' || $select=='login'){
            echo <<<EOT
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" value="$eshow[email]"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td><input type="text" name="phone" value="$eshow[phone]"></td>
            </tr>
            EOT;
        }
        if($select=='login' || $select=='user'){
            echo <<<EOT
            <tr>
                <td>New Username</td>
                <td>:</td>
                <td>
                    <input type="text" name="uname" value="$eshow[uname]">
                </td>
            </tr>
            <tr>
                <td>New Password</td>
                <td>:</td>
                <td>
                    <input type="password" name="upass">
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select name="status" id="">
                        <option value="$eshow[status]">Selected: $eshow[status]</option>
                        <option value="Allowed">Allowed</option>
                        <option value="Blocked">Blocked</option>
                        <option value="Pending">Pending</option>
                    </select>
                </td>
            </tr>
            EOT;
        }
        if($select=='login' || $select=='tea_info' || $select=='stu_info' || $select=='user'){
            // echo <<<EOT
            // <tr>
            //     <td>Upload Photo</td>
            //     <td>:</td>
            //     <td><input type="file" name="photo" id="" value="$eshow[photo]"></td>
            // </tr>
            // EOT;
        }
        if($select=='notice'){
            echo <<<EOT
            <tr>
                <td>Headline</td>
                <td>:</td>
                <td>
                    <input type="text" name="hline" value="$eshow[hline]">
                </td>
            </tr>
            <tr>
                <td>Message</td>
                <td>:</td>
                <td>
                    <textarea name="msg" id="" cols="30" rows="10">$eshow[message]</textarea>
                </td>
            </tr>
            <tr>
                <td>Upload File</td>
                <td>:</td>
                <td><input type="file" name="file" id=""></td>
            </tr>
            EOT;
            echo <<<EOT
            <tr>
                <td>type</td>
                <td>:</td>
                <td>
                    <select name="type" id="">
                        <option value="$eshow[type]">Selected: $eshow[type]</option>
                        <option value="Routine">Routine</option>
                        <option value="Fee">Fee</option>
                        <option value="Result">Result</option>
                    </select>
                </td>
            </tr>
            EOT;
            
        }
        if($select=='login' || $select=='user' ){
            echo <<<EOT
            <tr>
                <td>type</td>
                <td>:</td>
                <td>
                    <select name="type" id="">
                        <option value="$eshow[type]">Selected: value="$eshow[type]"</option>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </td>
            </tr>
            EOT;
        }
        ?>
        <tr>
            <th colspan="3">
                
                <input type="hidden" name="select" value="<?php echo $select; ?>">
                <input type="submit" value="Submit">
            </th>
        </tr>
                 
        </table>
    </form>
        </div>
    </div>
    <?php include "js.php" ?>
    <?php include "footer.php" ?>
    <?php include "close.php" ?>

</body>
</html>