<?php
include_once 'config.php';
session_start();
if(isset($_POST['loginbtn']))
{
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $uname = mysqli_real_escape_string($conn,$uname);
    $pwd = mysqli_real_escape_string($conn,$pwd);

    $pwd = sha1($pwd);

    $sql = "SELECT * FROM admin WHERE uname = '$uname' AND password = '$pwd'";

    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
    $count =mysqli_num_rows($res);

    if($count==1)
    {
        header("Location:admin/admin-dashboard.php");
    }
    else{
        header("Location:index.php");
    }
}



?>