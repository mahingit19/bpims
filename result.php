<?php

if(isset($_POST['roll']) && isset($_POST['sem'])){
    $roll= $_POST['roll'];
    $sem= $_POST['sem'];

    include "conn.php";
    include "dbname.php";
    include "selectdb.php";

    $sql= "SELECT * FROM stu_res WHERE roll='$roll' AND sem='$sem'";
    $result= mysqli_query($conn,$sql);
    $array= mysqli_fetch_array($result,MYSQLI_ASSOC);

    include "close.php";
}




$self= $_SERVER['PHP_SELF'];
?>


<div class="form">
    <form action="<?php echo $self; ?>?select=result" method="POST">
        <table>
            <caption>
                <h1>
                    Result
                </h1>
            </caption>
            <tr>
                <td>Roll</td>
                <td>:</td>
                <td><input type="text" name="roll"></td>
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
            <tr>
                <th colspan="3">
                    <input type="submit" value="Submit">
                </th>
            </tr>
        </table>
    </form>
</div>

<?php
if(isset($array['roll']) && isset($array['sem']) && isset($array['gpa'])){
    if($array['roll']!='' && $array['sem']!='' && $array['gpa']!=''){
        if(isset($_POST['roll']) && isset($_POST['sem'])){
            echo<<< EOT
            <table class="res">
                <tr>
                    <th>Roll</th>
                    <th>Semester</th>
                    <th>GPA</th>
                </tr>
                <tr>
                    <td>$array[roll]</td>
                    <td>$array[sem]</td>
                    <td>$array[gpa]</td>
                </tr>
            </table>
            EOT;
        }
    }
}

?>