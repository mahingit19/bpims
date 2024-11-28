<?php

session_start();

if(isset($_SESSION['uname']) && isset($_SESSION['upass'])){
    $uname = $_SESSION['uname'];
    $upass = $_SESSION['upass'];

    include "conn.php";
    include "dbname.php";
    include "selectdb.php";

    $sql= "SELECT uname,upass FROM login WHERE uname='$uname' AND upass='$upass'";
    $query= mysqli_query($conn,$sql);
    $auth= mysqli_num_rows($query);

    if($auth==1){
        $select= $_GET['select'];
        if(isset($_GET['search'])){
            $search= trim($_GET['search']);
            if($select=='login'){
                $sql= "SELECT * FROM $select WHERE email LIKE'$search%' OR id LIKE'$search%' OR name LIKE'$search%' OR mobile LIKE'$search%'";
            }
            elseif($select=='notice'){
                $sql= "SELECT * FROM $select WHERE hline LIKE'$search%' OR id LIKE'$search%' OR date LIKE'$search%'";
            }
            elseif($select=='stu_info'){
                $sql= "SELECT * FROM $select WHERE name LIKE'$search%' OR id LIKE'$search%' OR roll LIKE'$search%' OR dept LIKE'$search%' OR shift LIKE'$search%' OR blood LIKE'$search%' OR session LIKE'$search%' ";
            }
            elseif($select=='stu_res'){
                $sql= "SELECT * FROM $select WHERE id LIKE'$search%' OR roll LIKE'$search%' OR sid LIKE'$search%' OR gpa LIKE'$search%' OR sem LIKE'$search%'";
            }
            elseif($select=='tea_info'){
                $sql= "SELECT * FROM $select WHERE id LIKE'$search%' OR name LIKE'$search%' OR dept LIKE'$search%' OR shift LIKE'$search%' OR pos LIKE'$search%' OR phone LIKE'$search%' OR email LIKE'$search%'";
            }
            
            
        }
        else{
            $sql= "SELECT * FROM $select";
        }
        if($select=='login' || $select=='notice' || $select=='stu_info' || $select=='stu_res' || $select=='tea_info'){

            $result= mysqli_query($conn,$sql);
            $row= mysqli_num_rows($result);


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
    <title>Bogura Polytechnic Institute</title>
</head>
<body>
    <div class="wrap">
    <?php include "nav.php" ?>
        <div class="container">
            <div class="left-panel">
                <ul>
                    <a href="dash.php?select=dashboard"><li>Dashboard</li></a>
                    <a href="dash.php?select=profile"><li>Profile</li></a>
                    <a href="dash.php?select=login"><li>Accounts</li></a>
                    <a href="dash.php?select=notice"><li>Notices</li></a>
                    <a href="dash.php?select=stu_info"><li>Student's Information</li></a>
                    <a href="dash.php?select=stu_res"><li>Student's Result</li></a>
                    <a href="dash.php?select=tea_info"><li>Teacher's Information</li></a>
                </ul>
            </div>
            <div class="dash-content">
                <?php 
                if($select=='dashboard'){
                    echo "<h1>$select</h1>";
                }
                if($select=='profile'){
                    echo "<h1>$select</h1>";
                }
                if($select=='login' || $select=='notice' || $select=='stu_info' || $select=='stu_res' || $select=='tea_info'){
                    $self= $_SERVER['PHP_SELF'];
                    echo "<h1>$select</h1>";
                    echo "<p>There are $row Data in the list.";
                    if(isset($_GET['search'])){
                        $search= trim($_GET['search']);
                        echo<<< EOT
                        Search result for <b>"$search"</b> 
                        <a href="dash.php?select=$select" style="text-decoration: underline">clear</a>
                        </p>
                        EOT;
                    }
                    echo <<<EOT
                    <form action="$self" method="get" align="center">
                    <input type="search" name="search" placeholder="Search anything...">
                    <input type="submit" value="search">
                    <input type="hidden" name="select" value="$select">
                    
                    </form>
                    EOT;
                    echo "<a href=\"form.php?select=$select\">Add Data</a>";
                    
                }
                
                ?>
                <?php
                if($select=='login' || $select=='notice' || $select=='stu_info' || $select=='stu_res' || $select=='tea_info'){ ?>
                <table>
                    <?php
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $del= "DELETE FROM $select WHERE id='$id';";
                        $delquery= mysqli_query($conn,$del);
                    }
                    if(isset($result)){
                        $fieldinfo = mysqli_fetch_fields($result);
                        echo "<tr>";
                        foreach($fieldinfo as $fields){
                            printf("<td>%s</td>", $fields->name);
                        }
                        echo "<td colspan='2'>Options</td>";
                        echo "</tr>";
                        while($print= mysqli_fetch_row($result)){
                            echo "<tr>";
                            foreach($print as $field){
                                echo "<td>".$field."</td>";
                            }
                            echo "<td><a href=\"edit.php?select=$select&id=".$print[0]. "\">Edit</a></td>";
                            echo "<td><a onClick=\"window.location.reload();\" style='color:red' href=\"dash.php?select=$select&id=".$print[0]. "\">Delete</a></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
                <?php } 
                if($select=='profile'){
                    
                    $sql= "SELECT * FROM login WHERE uname='$uname' AND upass='$upass'";
                    $result= mysqli_query($conn,$sql);
                    $show= mysqli_fetch_array($result);
                ?>

                <table>
                    <tr>
                        <td colspan="3" align="center"><img src="<?php echo $show['photo'] ?>" alt="" width="100px"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><?php echo $show['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>:</td>
                        <td><?php echo $show['type'] ?></td>
                    </tr>

                </table>

                <?php
                }
                if($select=='dashboard'){
                    echo <<<EOT
                    
                    <div class="dashboard">
                        <a href="dash.php?select=profile">
                            <div class="blocks2" onclick="">
                                <figure>
                                    <img src="images/dashboard/profile.png" alt="">
                                    <figcaption>Profile</figcaption>
                                </figure>
                            </div>
                        </a>
                        <a href="dash.php?select=login">
                        <div class="blocks2">
                            <figure>
                                <img src="images/dashboard/menu.png" alt="">
                                <figcaption>Accounts</figcaption>
                            </figure>
                        </div>
                        </a>
                        <a href="dash.php?select=notice">
                        <div class="blocks2">
                            <figure>
                                <img src="images/dashboard/notice.png" alt="">
                                <figcaption>Notices</figcaption>
                            </figure>
                        </div>
                        </a>
                        <a href="dash.php?select=stu_info">
                        <div class="blocks2">
                            <figure>
                                <img src="images/dashboard/student-card.png" alt="">
                                <figcaption>Students</figcaption>
                            </figure>
                        </div>
                        </a>
                        <a href="dash.php?select=stu_res">
                        <div class="blocks2">
                            <figure>
                                <img src="images/dashboard/results.png" alt="">
                                <figcaption>Results</figcaption>
                            </figure>
                        </div>
                        </a>
                        <a href="dash.php?select=tea_info">
                        <div class="blocks2">
                            <figure>
                                <img src="images/dashboard/team.png" alt="">
                                <figcaption>Teachers</figcaption>
                            </figure>
                        </div>
                        </a>
                        
                        
                    </div>
                    EOT;
                }
                ?>
                
            </div>
        </div>
    </div>
    <?php include "js.php" ?>
    <?php include "footer.php" ?>
</body>
</html>

<?php
    }
    else{
        header("Location: login.php?error=You must login fisrt!");
    }
    include "close.php";
}
else{
    header("Location: login.php?error=You must login fisrt!");
}
?>