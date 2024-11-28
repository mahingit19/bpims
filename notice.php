<?php
if(isset($_GET["noticeid"])){
    $noticeid = $_GET["noticeid"];
}
if(isset($_GET["selectnotice"])){
    $select_notice = $_GET["selectnotice"];
}
include "conn.php";
include "dbname.php";
include "selectdb.php";

if($select_notice=="notice"){
$sql= "SELECT * FROM notice WHERE id='$noticeid'";
$result= mysqli_query($conn,$sql);
$array= mysqli_fetch_array($result,MYSQLI_ASSOC);
echo <<<EOT
<div class="notice">
    <h1>Notice</h1>
    <table class="notice-table">
        <tr>
            <th colspan="2">$array[hline]</th>
        </tr>
        <tr>
            <td>Date: <b>$array[date]</b></td>
            <td>Type: <b>$array[type]</b></td>
        </tr>
        <tr>
            <td colspan="2">$array[message]</td>
        </tr>
        <tr>
EOT;
if($array['file'] != ''){
    echo "<td colspan=\"2\">Download File: <a href=\"$array[file]\">Download</a></td>";
}
if($array['file'] == ''){
    echo "<td colspan=\"2\">Download File: N/A</td>";
}
echo<<< EOT
            
        </tr>
    </table>
</div>
EOT;
}

?>
<?php
if($select_notice=="allnotice"){
?>
<div class="allnotice">
    <h1>Notice</h1>
    <table class="notice-table">
        <?php
        $sql= "SELECT * FROM notice ORDER BY date DESC";
        $result= mysqli_query($conn,$sql);
        if(isset($result)){
            $fieldinfo = mysqli_fetch_fields($result);
            echo "<tr>";
            foreach($fieldinfo as $fields){
                printf("<td>%s</td>", $fields->name);
            }
            echo "</tr>";
            while($print= mysqli_fetch_row($result)){
                echo "<tr>";
                foreach($print as $field){
                    if($field==$print[3]){
                        if($field != ''){
                            echo "<td><a href='$field'>Download</a></td>";
                        }
                        if($field==''){
                            echo "<td>N/A</td>";
                        }                       
                        continue;
                    }
                    echo "<td>".$field."</td>";
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
</div>
<?php
}
?>
