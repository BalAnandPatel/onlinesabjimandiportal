<?php
include('../include/config.php');

if (isset($_POST['form_type'])) {
    if ($_POST['form_type'] == "customer_address") {
        if (!isset($_SESSION['login'])) {
            header('location: ../login.php');
        } else {
            if (isset($_POST['form_type']) == "customer_address") {
                if (isset($_POST["default"])) {
                    $status = 1;
                } else {
                    $status = 0;
                }
                mysqli_query($con, "insert into address (user_id,for_order,shippingName,shippingAddress,shippingCity,shippingPincode,shippingState,shippingCountry,billingName,billingAddress,billingCity,billingPincode,billingState,billingCountry,status,regDate) values ('" . $_SESSION['id'] . "',null,'" . $_POST['shippingName'] . "','" . $_POST['shippingAddress'] . "','" . $_POST['shippingCity'] . "','" . $_POST['shippingPincode'] . "','" . $_POST['shippingState'] . "','" . $_POST['shippingCountry'] . "','" . $_POST['billingName'] . "','" . $_POST['billingAddress'] . "','" . $_POST['billingCity'] . "','" . $_POST['billingPincode'] . "','" . $_POST['billingState'] . "','" . $_POST['billingCountry'] . "','0','" . date("Y-m-d h:i:s") . "')");

                // mysqli_query($con, "insert into address(user_id,name,shippingStreet,shippingAddress,shippingCity,shippingPincode,shippingState,shippingCountry,status,regDate) values('" . $_SESSION['id'] . "','" . $_POST['name'] . "','" . $_POST['shippingStreet'] . "','" . $_POST['shippingAddress'] . "','" . $_POST['shippingCity'] . "','" . $_POST['shippingPincode'] . "','" . $_POST['shippingState'] . "','" . $_POST['shippingCountry'] . "','" . $status . "','" . date("Y-m-d h:i:s") . "')");
                $_SESSION['message'] = "Address added successfully";
                header("Location: addresses.php");
                exit();
            } else {
                header('location: addresses.php');
                exit();
            }
        }
    }
    if ($_POST['form_type'] == "address_update") {
        if (!isset($_SESSION['login'])) {
            header('location: ../login.php');
        } else {
            if (isset($_POST['form_type']) == "address_update") {
                mysqli_query($con, "Update address SET shippingName = '" . $_POST['shippingName'] . "',shippingAddress = '" . $_POST['shippingAddress'] . "',shippingCity = '" . $_POST['shippingCity'] . "',shippingPincode = '" . $_POST['shippingPincode'] . "',shippingState = '" . $_POST['shippingState'] . "',shippingCountry = '" . $_POST['shippingCountry'] . "',billingName = '" . $_POST['billingName'] . "',billingAddress = '" . $_POST['billingAddress'] . "',billingCity = '" . $_POST['billingCity'] . "',billingPincode = '" . $_POST['billingPincode'] . "',billingState = '" . $_POST['billingState'] . "',billingCountry = '" . $_POST['billingCountry'] . "',updationDate = '" . date("Y-m-d h:i:s") . "' where `id` = '" . $_POST['rowid'] . "'");
                $_SESSION['message'] = "Address updated successfully";
                header("Location: addresses.php");
                exit();
            } else {
                header('location: addresses.php');
                exit();
            }
        }
    }
}


if (isset($_GET['delete'])) {
    if (!isset($_SESSION['login'])) {
        header('location: ../index.php');
    } else {
        mysqli_query($con,  "DELETE FROM address WHERE `address`.`id` = '" . $_GET['delete'] . "'");
        $_SESSION['message'] = "Address deleted successfully";
        header("Location: addresses.php");
        exit();
    }
}

if (isset($_GET['edit'])) {
    if (!isset($_SESSION['login'])) {
        header('location: ../index.php');
    } else {
        header("Location: edit-addresses.php?aid=" . base64_encode($_GET['edit']));
        exit();
    }
}
