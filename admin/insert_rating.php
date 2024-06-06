<?php
include "include/config.php";
if (isset($_SESSION['login'])) {
    if (isset($_POST['rating_data'])) {
        $user_id = $_POST['user_id'];
        $user_name = $_POST['user_name'];
        $rating_data = $_POST['rating_data'];
        $product_id = $_POST['product_id'];
        $user_review = $_POST['user_review'];

        $sql = mysqli_query($con, "insert into review_table(user_id,user_name,user_rating,product_id,user_review) values('$user_id','$user_name','$rating_data','$product_id','$user_review')");
        $_SESSION['msg'] = "Review Inserted Successfully !!";

        echo "Review Inserted Successfully !!";
    }
} else {
    echo "Please login to write review.";
    // header("Location: ../index.php");
}