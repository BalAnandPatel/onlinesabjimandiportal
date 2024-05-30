<?php
include "include/header.php";
$user = mysqli_query($con, "select * from users where `id`='" . $_SESSION['id'] . "'");
$user_fetch = mysqli_fetch_array($user);
$user_name = $user_fetch['name'];
$user_email = $user_fetch['email'];
$user_phone = $user_fetch['contactno'];
?>

<main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <div id="shopify-section-template--16885347909878__heading" class="shopify-section page_section_heading">
        <link href="cdn/shop/t/130/assets/heading-template.aio.min.css" rel="stylesheet" type="text/css" media="all">
        <div class="header-banner t4s-heading-fullwidth_false   lazyloadt4sed" style="--space-padding-dk:50px;--space-padding-mb:50px;--space-mg-dk:50px;--space-mg-mb:50px;--bg-cl:#000000;--op:0.54;--bg_repeat:no-repeat;--bg_size:cover;--bg_pos:center center;--height-mobile:0px;--height-desktop:0px"></div>
        <style>
            .t4s-heading-fullwidth_true .t4s-container {
                width: 100%;
                max-width: 100%;
            }
        </style>
    </div>
    <section id="shopify-section-template--16885347909878__main" class="shopify-section t4s-section t4s-section-customers">
        <link href="//vaaree.com/cdn/shop/t/130/assets/customer.min.css?v=51231353298477732391710501931" rel="stylesheet" type="text/css" media="all">

        <div class="t4s-customer t4s-customer-account is--account t4s-row">
            <link href="//vaaree.com/cdn/shop/t/130/assets/sticky-header-account.css?v=70672601914652530161710501932" rel="stylesheet" type="text/css" media="all">
            <div class="account-header-wrapper" id="hiddenStickyDiv" style="
  background-image: url(cdn/shop/files/Mask_group_e1bf8157-b0a0-4ddd-a08b-1e4ade63a2da.png);
">
                <div class="account-header">
                    <div class="customer-info">
                        <div class="name-line">
                            <span class="greeting">Hi, <?php echo $user_name; ?></span>
                            <span class="edit-link">Edit</span>
                        </div>
                        <div class="contact-line">

                            <span class="phone-number">+91-<?php echo $user_phone; ?></span>
                            <span class="dot"> • </span>

                            <span class="email"><?php echo $user_email; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var accounts_page = true
                    if (window.innerWidth > 768 || accounts_page) {
                        return
                    }
                    var hiddenStickyDiv = document.getElementById('hiddenStickyDiv');
                    var showAtScroll = 110; // Adjust this value based on when you want the div to appear
                    var isSticky = false;

                    window.onscroll = function() {
                        if (window.pageYOffset > showAtScroll && !isSticky) {
                            hiddenStickyDiv.classList.add('sticky');
                            isSticky = true;
                        } else if (window.pageYOffset <= showAtScroll && isSticky) {
                            hiddenStickyDiv.classList.remove('sticky');
                            isSticky = false;
                        }
                    };
                });
            </script>

            <div class="account-profile-wrapper">
                <div class="t4s-col-12 t4s-account-sidebar t4s-container">
                    <nav class="t4s-account-nav">
                        <ul class="account-tabs">
                            <li class="t4s-account-nav-link t4s-account-nav-link--track-your-order">
                                <a href="shipping-details-page.php" id="track_orders_account">
                                    <div class="account-title-wrapper">
                                        <div class="account-title">
                                            All Orders
                                        </div>
                                        <div class="account-sub-title">Track your order status and view all past orders</div>
                                    </div>
                                    <svg width="" height="" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L1 9" stroke="#7A7A7A" stroke-linecap="round"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="t4s-account-nav-link t4s-account-nav-link--edit-address">
                                <a href="addresses.php">
                                    <div class="account-title-wrapper">
                                        <div class="account-title">Saved Addresses</div>
                                        <div class="account-sub-title">Track your orders, raise return or exchange requests</div>
                                    </div>
                                    <svg width="" height="" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L1 9" stroke="#7A7A7A" stroke-linecap="round"></path>
                                    </svg>
                                </a>
                            </li>
                            <!-- <li class="t4s-account-nav-link t4s-account-nav-link--returns">
                                <a href="/apps/return_prime">
                                    <div class="account-title-wrapper">
                                        <div class="account-title">Raise Return / Exchange Request</div>
                                        <div class="account-sub-title">Track your orders, raise return or exchange requests</div>
                                    </div>
                                    <svg width="" height="" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L1 9" stroke="#7A7A7A" stroke-linecap="round"></path>
                                    </svg>
                                </a>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include "include/footer.php";
?>