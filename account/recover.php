<?php
$email = $_POST['email'];
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "eracreatix@gmail.com";
    $to = "giplanand@gmail.com";
    $subject = "Era Creatix Password Recovery Email";
    $message = "Dear user your new password is . "$email" .please change the password after succesfully login;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Your new password is send in your email Inbox please check the password and login and change The Password";
?>