<?php
// error_reporting(0);
include('../include/config.php');

// Code for User login
$email = $_POST['email'];
$password = md5($_POST['password']);
$query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' and password='$password'");
$num = mysqli_fetch_array($query);
if ($num > 0) {
    // $extra = "my-cart.php";
    $_SESSION['login'] = $_POST['email'];
    $_SESSION['id'] = $num['id'];
    $_SESSION['username'] = $num['name'];
    $_SESSION['contact'] = $num['contactno'];
    $uip = $_SERVER['REMOTE_ADDR'];
    $status = 1;
    $log = mysqli_query($con, "insert into userlog(userEmail,userip,status) values('" . $_SESSION['login'] . "','$uip','$status')");
    header("location: ../index.php");
    exit();
} else {
    $extra = "login.php";
    $email = $_POST['email'];
    $uip = $_SERVER['REMOTE_ADDR'];
    $status = 0;
    $log = mysqli_query($con, "insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
    header("location:" . $_SERVER['HTTP_REFERER']);
    $_SESSION['errmsg'] = "Invalid email id or Password";
    exit();
}
