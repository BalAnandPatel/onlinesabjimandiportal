<?php
include "include/config.php";
// $_POST['pid'] = 1;
$query = mysqli_query($con, "Select * from review_table where product_id='" . $_POST['product_id'] . "'");
// print_r($query);

$average_rating = 0;
$total_review = 0;
$five_star_review = 0;
$four_star_review = 0;
$three_star_review = 0;
$two_star_review = 0;
$one_star_review = 0;
$total_user_rating = 0;
$review_content = array();

$counter = 0;
while ($value = mysqli_fetch_array($query)) {

    $review_content[] = array(
        'review_id'        =>    $value['review_id'],
        'user_name'        =>    $value['user_name'],
        'user_review'    =>    $value['user_review'],
        'review_reply'    =>    $value['review_reply'],
        'reply_by'        =>    $value['reply_by'],
        'updated_on'    =>    $value['updated_on'],
        'rating'        =>    $value['user_rating'],
        'datetime'        =>    date('l jS, F Y h:i:s A', $value['created_on'])
    );


    if ($value['user_rating'] == '5') {
        $five_star_review++;
    }

    if ($value['user_rating'] == '4') {
        $four_star_review++;
    }

    if ($value['user_rating'] == '3') {
        $three_star_review++;
    }

    if ($value['user_rating'] == '2') {
        $two_star_review++;
    }

    if ($value['user_rating'] == '1') {
        $one_star_review++;
    }

    $total_review++;

    $total_user_rating = $total_user_rating + $value['user_rating'];
}

$average_rating = $total_user_rating / $total_review;

$output = array(
    'average_rating'    =>    number_format($average_rating, 1),
    'total_review'        =>    $total_review,
    'five_star_review'    =>    $five_star_review,
    'four_star_review'    =>    $four_star_review,
    'three_star_review'    =>    $three_star_review,
    'two_star_review'    =>    $two_star_review,
    'one_star_review'    =>    $one_star_review,
    'review_data'        =>    $review_content
);

echo json_encode($output);
