<?php
require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

$name = $_POST['name'];
$email = $_POST['email'];
$contact = ($_POST['contact'] != "" || is_nan($_POST['contact'])) ? $_POST['contact'] : 9999999999;
$address = "ERA ERACREATIX SHOPPING ONLINE";
$merchant_order_id = time() . mt_rand() . $_POST['id'];
$amt = $_POST['amount'] * 100;

$orderData = [
    'receipt'         => $merchant_order_id,
    'amount'          => $amt, // 2000 rupees in paise
    'currency'        => $curreny,
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $appName,
    "description"       => $appDesc,
    "image"             => $appImg,
    "prefill"           => [
        "name"              => $name,
        "email"             => $email,
        "contact"           => $contact,
    ],
    "notes"             => [
        "address"           => $address,
        "merchant_order_id" => $merchant_order_id,
    ],
    "theme"             => [
        "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR') {
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php");
