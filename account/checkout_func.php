<?php
include('../include/config.php');


if (isset($_POST['submit'])) {
    if (!isset($_SESSION['login'])) {
        header('location: ../login.php');
    } else {
        if ($_POST['form_type'] == "place_order") {
            $order_id = uniqid('order_');
            if(!empty($_POST['gstn'])){
                $gstn = $_POST['gstn'];
            } else {
                $gstn = 'null';
            }
            $cart = mysqli_query($con, "select * from cart where `userId` = '" . $_SESSION['id'] . "' ");
            $fetch_cart = mysqli_fetch_array($cart);
            foreach ($_POST['method'] as $methods) {
                $method = $methods;
            }
            foreach ($cart as $key => $value) {
                mysqli_query($con, "insert into orders(userId,productId,quantity,address,order_id,GSTN,orderDate, paymentMethod) values('" . $_SESSION['id'] . "','" . $value['productId'] . "','" . $value['quantity'] . "','" . $_POST['address'] . "','" . $order_id . "',".$gstn.",'" . date("Y-m-d h:i:s") . "', '" . $method . "')");
                mysqli_query($con, "DELETE FROM cart WHERE `cart`.`id` = '" . $value['id'] . "'");
            }
            $_SESSION['message'] = "Order placed successfully";
            header("Location: shipping-details-page.php");
            exit();
        } elseif ($_POST['form_type'] == "place_order_with_address") {
            $order_id = uniqid('order_');
            if(!empty($_POST['gstn'])){
                $gstn = $_POST['gstn'];
            } else {
                $gstn = 'null';
            }
            $cart = mysqli_query($con, "select * from cart where `userId` = '" . $_SESSION['id'] . "' ");
            $fetch_cart = mysqli_fetch_array($cart);
            if (isset($_POST['save'])) {
                mysqli_query($con, "insert into address (user_id,for_order,shippingName,shippingAddress,shippingCity,shippingPincode,shippingState,shippingCountry,billingName,billingAddress,billingCity,billingPincode,billingState,billingCountry,status,regDate) values ('" . $_SESSION['id'] . "',null,'" . $_POST['shippingName'] . "','" . $_POST['shippingAddress'] . "','" . $_POST['shippingCity'] . "','" . $_POST['shippingPincode'] . "','" . $_POST['shippingState'] . "','" . $_POST['shippingCountry'] . "','" . $_POST['billingName'] . "','" . $_POST['billingAddress'] . "','" . $_POST['billingCity'] . "','" . $_POST['billingPincode'] . "','" . $_POST['billingState'] . "','" . $_POST['billingCountry'] . "','0','" . date("Y-m-d h:i:s") . "')");
            }
            mysqli_query($con, "insert into address (user_id,for_order,shippingName,shippingAddress,shippingCity,shippingPincode,shippingState,shippingCountry,billingName,billingAddress,billingCity,billingPincode,billingState,billingCountry,status,regDate) values ('" . $_SESSION['id'] . "','" . $order_id . "','" . $_POST['shippingName'] . "','" . $_POST['shippingAddress'] . "','" . $_POST['shippingCity'] . "','" . $_POST['shippingPincode'] . "','" . $_POST['shippingState'] . "','" . $_POST['shippingCountry'] . "','" . $_POST['billingName'] . "','" . $_POST['billingAddress'] . "','" . $_POST['billingCity'] . "','" . $_POST['billingPincode'] . "','" . $_POST['billingState'] . "','" . $_POST['billingCountry'] . "','0','" . date("Y-m-d h:i:s") . "')");
            $lastInsertedID = mysqli_insert_id($con);
            foreach ($_POST['method'] as $methods) {
                $method = $methods;
            }
            foreach ($cart as $key => $value) {
                mysqli_query($con, "insert into orders(userId,productId,quantity,address,order_id,GSTN,orderDate, paymentMethod) values('" . $_SESSION['id'] . "','" . $value['productId'] . "','" . $value['quantity'] . "','" . $lastInsertedID . "','" . $order_id . "',".$gstn.",'" . date("Y-m-d h:i:s") . "', '" . $method . "')");
                mysqli_query($con, "DELETE FROM cart WHERE `cart`.`id` = '" . $value['id'] . "'");
            }
            $_SESSION['message'] = "Order placed successfully";
            header("Location: shipping-details-page.php");
            exit();
        } else {
            header('location: checkout.php');
            exit();
        }
    }
}

// if (isset($_GET['delete'])) {
//     if (!isset($_SESSION['login'])) {
//         header('location: ../index.php');
//     } else {
//         mysqli_query($con,  "DELETE FROM address WHERE `address`.`id` = '" . $_GET['delete'] . "'");
//         $_SESSION['message'] = "Address deleted successfully";
//         header("Location: addresses.php");
//         exit();
//     }
// }
