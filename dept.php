<?php

if(isset($_GET['dept'])){
    $dept= $_GET['dept'];
}

include "conn.php";
include "dbname.php";
include "selectdb.php";

if($dept=="computer"){
    $string= "কম্পিউটার টেকনোলজি";
}
if($dept=="civil"){
    $string= "সিভিল টেকনোলজি";
}
if($dept=="mechanical"){
    $string= "ম্যাকানিকাল টেকনোলজি";
}
if($dept=="power"){
    $string= "পাওয়ার টেকনোলজি";
}
if($dept=="rac"){
    $string= "আর.এ.সি. টেকনোলজি";
}
if($dept=="electrical"){
    $string= "ইলেকট্রিক্যাল টেকনোলজি";
}
if($dept=="electronics"){
    $string= "ইলেকট্রোনিক্স টেকনোলজি";
}
if($dept=="tourism"){
    $string= "ট্যুরিজম এন্ড হস্পিটালিটি টেকনোলজি";
}
if($dept=="related subject"){
    $string= "রিলেটেড সাবজেক্ট";
}

echo <<<EOT
<div class="dept">
    <div class="cmt">
        <h1>$string</h1>
        <h2>চীফ ইন্সট্রাক্টর গণ</h2>
EOT;
$sql= "SELECT * FROM tea_info WHERE pos='Chief Instructor' AND dept='$dept'";
$result= mysqli_query($conn,$sql);

while($array= mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo<<< EOT
    <table>
        <tr>
    EOT;        
            if($array["photo"] != "uploads/."){
                echo <<<EOT
                <td rowspan="4"><img src="$array[photo]" alt=""></td>
                EOT;
            }
            if($array["photo"]== "uploads/."){
                echo <<<EOT
                <td rowspan="4"><img src="images/847969.png" alt=""></td>
                EOT;
            }
    echo <<<EOT
            <th>নাম</th>
            <td colspan="3">$array[name]</td>
        </tr>
        <tr>
            <th>পদবি</th>
            <td colspan="3">$array[pos] ($array[shift])</td>
        </tr>
        <tr>
            <th>মোবাইল</th>
            <td>$array[phone]</td>
        </tr>
        <tr>
            <th>ই-মেইল</th>
            <td>$array[email]</td>
        </tr>
    </table>
    EOT;
}
echo<<< EOT
        <h2>ইন্সট্রাক্টর গণ</h2>
EOT;
$sql= "SELECT * FROM tea_info WHERE pos='Instructor' AND dept='$dept'";
$result= mysqli_query($conn,$sql);

while($array= mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo<<< EOT
    <table>
        <tr>
    EOT;        
            if($array["photo"] != ""){
                echo <<<EOT
                <td rowspan="4"><img src="$array[photo]" alt=""></td>
                EOT;
            }
            if($array["photo"]== ""){
                echo <<<EOT
                <td rowspan="4"><img src="images/847969.png" alt=""></td>
                EOT;
            }
    echo <<<EOT
            <th>নাম</th>
            <td colspan="3">$array[name]</td>
        </tr>
        <tr>
            <th>পদবি</th>
            <td colspan="3">$array[pos]</td>
        </tr>
        <tr>
            <th>মোবাইল</th>
            <td>$array[phone]</td>
        </tr>
        <tr>
            <th>ই-মেইল</th>
            <td>$array[email]</td>
        </tr>
    </table>
    EOT;
}
echo<<< EOT
        <h2>অফিস স্টাফ</h2>
EOT;
$sql= "SELECT * FROM tea_info WHERE pos='Craft Instructor' AND dept='$dept'";
$result= mysqli_query($conn,$sql);

while($array= mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo<<< EOT
    <table>
        <tr>
    EOT;        
            if($array["photo"] != ""){
                echo <<<EOT
                <td rowspan="4"><img src="$array[photo]" alt=""></td>
                EOT;
            }
            if($array["photo"]== ""){
                echo <<<EOT
                <td rowspan="4"><img src="images/847969.png" alt=""></td>
                EOT;
            }
    echo <<<EOT
            <th>নাম</th>
            <td colspan="3">$array[name]</td>
        </tr>
        <tr>
            <th>পদবি</th>
            <td colspan="3">$array[pos]</td>
        </tr>
        <tr>
            <th>মোবাইল</th>
            <td>$array[phone]</td>
        </tr>
        <tr>
            <th>ই-মেইল</th>
            <td>$array[email]</td>
        </tr>
    </table>
    EOT;
}
echo<<< EOT
    </div>
</div>
EOT;


include "close.php";
