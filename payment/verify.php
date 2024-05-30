<?php
// include '../../constant.php';
require('config.php');

session_start();

require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false) {
    $api = new Api($keyId, $keySecret);

    try {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true) {

    $html = "Payment Successfull........";

    if (!empty($_SESSION['email'])) {
        $headers = "From: eracreatix@gmail.com \r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

        $to = trim($_SESSION['email']);
        $subject = "Your order is placed successfully!";

        $message = "Dear <b>" . $_SESSION['username'] . "</b> ,<br/> Welcome, <br />Your order has been placed successfully!<br/><br/>Your order id is <br /><br /><br />Visit us <a href='eracreatix.com' target='_blank'>eracreatix.com</a> to get check status. <br /><br/>Thanks <br/> Team ERA Creatix";

        mail($to, $subject, $message, $headers);
    }


    echo '
        <form action="reciept.php" id="yourform" method="POST">
            <input type="hidden" name="id" value="' . $user_id . '">
        </form>
    <script>            
    document.addEventListener("DOMContentLoaded", function(event) {
            document.createElement(
                "form").submit.call(document.getElementById("yourform"));
            });         
</script>
    ';
} else {
    $txnId = $error;
    $html = include "response/failure.php";
}

echo $html;

// echo '<script type="text/javascript">
// window.location = "https://eracreatix.com/recruitment.php"
// </script>';
