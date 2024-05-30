<?php
// error_reporting(0);
include('../include/config.php');
// Code user Registration


$name = $_POST['name'];
$contactno = $_POST['contactno'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$reg_check = mysqli_query($con, "select count(id) as numb from users where `email` = '" . $email . "' ");
$if_already_reg = mysqli_num_rows($reg_check);
$fetch = mysqli_fetch_array($reg_check);
if ($fetch['numb'] == 0 ) {
    if (mysqli_query($con, "insert into users(name,email,contactno,password) values('$name','$email','$contactno','$password')")) {
        header("location: ../register.php");
        $_SESSION['success'] = "User registered successfully";
        exit();
    } else {
        header("location: ../register.php");
        $_SESSION['errmsg'] = "Failed to register user. Please try again.";
        exit();
    }
} else {
    header("location: ../register.php");
    $_SESSION['errmsg'] = "User already registered.";
    exit();
}
