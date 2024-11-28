<?php
session_start(); 
if($_GET['select']){
    $select= $_GET['select'];
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
        echo "$select Form";
        ?>
    </title>
</head>
<body>
<div class="wrap">
    <?php include "nav.php" ?>
        <div class="form">
        <form action="submit.php" method="POST" enctype="multipart/form-data">
        <table>
            <caption>
            <h1>
                <?php
                echo "$select Form";
                ?>
            </h1>
            </caption>
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
                <td><input type="text" name="name"></td>
            </tr>
            EOT;
        }
        if($select=='stu_info' || $select=='stu_res'){
            echo <<<EOT
            <tr>
                <td>Roll</td>
                <td>:</td>
                <td><input type="text" name="roll"></td>
            </tr>
            EOT;
        }
        if($select=='stu_res'){
            echo <<<EOT
            <tr>
                <td>SID</td>
                <td>:</td>
                <td><input type="text" name="sid"></td>
            </tr>
            <tr>
                <td>GPA</td>
                <td>:</td>
                <td><input type="text" name="gpa"></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>:</td>
                <td>
                <select name="sem" id="">
                    <option value="" disabled selected>Select Semester:</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="5th">5th</option>
                    <option value="6th">6th</option>
                    <option value="7th">7th</option>
                    <option value="8th">8th</option>
                </select>
                </td>
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
                        <option value="" disabled selected>Select Technology:</option>
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
                <td><input type="text" name="reg"></td>
            </tr>
            <tr>
                <td>Session</td>
                <td>:</td>
                <td><input type="text" name="session"></td>
            </tr>
            <tr>
                <td>Shift</td>
                <td>:</td>
                <td>
                    <select name="shift" id="">
                        <option value="" disabled selected>Select shift:</option>
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
                        <option value="" disabled selected>Select blood:</option>
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
                        <option value="" disabled selected>Select Position:</option>
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
                <td><input type="text" name="pims"></td>
            </tr>
            <tr>
                <td>Department</td>
                <td>:</td>
                <td>
                    <select name="dept" id="">
                        <option value="" disabled selected>Select Technology:</option>
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
                        <option value="" disabled selected>Select shift:</option>
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
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td><input type="text" name="phone"></td>
            </tr>
            EOT;
        }
        if($select=='login' || $select=='user'){
            echo <<<EOT
            <tr>
                <td>New Username</td>
                <td>:</td>
                <td>
                    <input type="text" name="uname">
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
                        <option value="" selected disabled>Select status:</option>
                        <option value="Allowed">Allowed</option>
                        <option value="Blocked">Blocked</option>
                        <option value="Pending">Pending</option>
                    </select>
                </td>
            </tr>
            EOT;
        }
        if($select=='login' || $select=='tea_info' || $select=='stu_info' || $select=='user'){
            echo <<<EOT
            <tr>
                <td>Upload Photo</td>
                <td>:</td>
                <td><input type="file" name="photo" id=""></td>
            </tr>
            EOT;
        }
        if($select=='notice'){
            echo <<<EOT
            <tr>
                <td>Headline</td>
                <td>:</td>
                <td>
                    <input type="text" name="hline">
                </td>
            </tr>
            <tr>
                <td>Message</td>
                <td>:</td>
                <td>
                    <textarea name="msg" id="" cols="30" rows="10"></textarea>
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
                        <option value="" disabled selected>Select type:</option>
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
                        <option value="" disabled selected>Select type:</option>
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
                <input type="hidden" name="date" value="<?php include "date.php"; ?>">
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
</body>
</html>