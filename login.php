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
        header("Location: dash.php");
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
    <title>Bogura Polytechnic Institute</title>
</head>
<body>
    <div class="wrap">
    <?php include "nav.php" ?>
        <div class="login">
            <form action="auth.php" method="post">
                <table>
                    <caption>Login</caption>
                    <tr>
                        <td colspan="3" style="text-align:center;color:red;">
                            <?php 
                            if(isset($_GET['error'])){
                                echo "* Wrong Username or Password!";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>:</td>
                        <td><input type="text" name="uname" required></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>:</td>
                        <td><input type="password" name="upass" required></td>
                    </tr>
                    <tr>
                        <th colspan="3"><input type="submit" value="Login"></th>
                    </tr>
                    <tr>
                        <th colspan="3">Contact admin if you can't login!</th>
                    </tr>
                    <!-- <tr>
                        <th colspan="3"><a href="form.php?select=user">Create new account</a></th>
                    </tr> -->
                </table>
            </form>
        </div>
    </div>
    <?php include "js.php" ?>
    <?php include "footer.php" ?>
</body>
</html>